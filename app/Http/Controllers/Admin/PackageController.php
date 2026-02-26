<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display package list
     */
    public function index()
    {
        // Many packages
        $packages = Package::orderBy('order')
            ->latest()
            ->paginate(10);

        return view('admin.packages.index', compact('packages'));
    }


    /**
     * Show create form
     */
    public function create()
    {
        return view('admin.packages.create');
    }


    /**
     * Store new package
     */
   public function store(Request $request)
{
    $request->validate([
        'name'              => 'required|string|max:255',
        'short_description' => 'required|string|max:500',
        'pricing_type'      => 'required|in:fixed,flexible',
        'details'           => 'required',
        'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Conditional validation
    if ($request->pricing_type === 'fixed') {

        $request->validate([
            'price'    => 'required|integer|min:1',
            'duration' => [
                'required',
                'integer',
                'min:30',
                function ($attribute, $value, $fail) {
                    if ($value % 30 !== 0) {
                        $fail('Duration must be a multiple of 30 minutes.');
                    }
                },
            ],
        ]);

    } else {

        $request->validate([

            'base_duration' => [
                'required',
                'integer',
                'min:30',
                function ($attribute, $value, $fail) {
                    if ($value % 30 !== 0) {
                        $fail('Base duration must be multiple of 30 minutes.');
                    }
                },
            ],

            'increment_minutes' => [
                'required',
                'integer',
                'min:30',
                function ($attribute, $value, $fail) {
                    if ($value % 30 !== 0) {
                        $fail('Increment minutes must be multiple of 30.');
                    }
                },
            ],

            'max_duration' => [
                'required',
                'integer',
                function ($attribute, $value, $fail) use ($request) {

                    if ($value % 30 !== 0) {
                        $fail('Maximum duration must be multiple of 30 minutes.');
                    }

                    if ($value < $request->base_duration) {
                        $fail('Maximum duration must be greater than or equal to base duration.');
                    }

                    if (($value - $request->base_duration) % $request->increment_minutes !== 0) {
                        $fail('Max duration must follow increment rule.');
                    }
                },
            ],

            'base_price'        => 'required|integer|min:1',
            'increment_price'   => 'required|integer|min:1',
        ]);
    }

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('packages', 'public');
    }

    Package::create([
        'name'              => $request->name,
        'short_description' => $request->short_description,
        'image'             => $imagePath,
        'image_alt'         => $request->image_alt,
        'pricing_type'      => $request->pricing_type,

        // Fixed
        'price'             => $request->pricing_type === 'fixed' ? $request->price : null,
        'duration'          => $request->pricing_type === 'fixed' ? $request->duration : null,

        // Flexible
        'base_duration'     => $request->pricing_type === 'flexible' ? $request->base_duration : null,
        'base_price'        => $request->pricing_type === 'flexible' ? $request->base_price : null,
        'increment_minutes' => $request->pricing_type === 'flexible' ? $request->increment_minutes : null,
        'increment_price'   => $request->pricing_type === 'flexible' ? $request->increment_price : null,
        'max_duration'      => $request->pricing_type === 'flexible' ? $request->max_duration : null,

        'details'           => $request->details,
        'status'            => $request->status ?? true,
        'order'             => $request->order ?? 0,
    ]);

    return redirect()
        ->route('admin.packages.index')
        ->with('success', 'Package created successfully.');
}
    /**
     * Show edit form
     */
    public function edit(Package $package)
    {
        // Single package
        return view('admin.packages.edit', compact('package'));
    }


    /**
     * Update package
     */
   public function update(Request $request, Package $package)
{
    $request->validate([
        'name'              => 'required|string|max:255',
        'short_description' => 'required|string|max:500',
        'pricing_type'      => 'required|in:fixed,flexible',
        'details'           => 'required',
        'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->pricing_type === 'fixed') {

        $request->validate([
            'price'    => 'required|integer|min:1',
            'duration' => [
                'required',
                'integer',
                'min:30',
                function ($attribute, $value, $fail) {
                    if ($value % 30 !== 0) {
                        $fail('Duration must be a multiple of 30 minutes.');
                    }
                },
            ],
        ]);

    } else {

        $request->validate([

            'base_duration' => [
                'required',
                'integer',
                'min:30',
                function ($attribute, $value, $fail) {
                    if ($value % 30 !== 0) {
                        $fail('Base duration must be multiple of 30 minutes.');
                    }
                },
            ],

            'increment_minutes' => [
                'required',
                'integer',
                'min:30',
                function ($attribute, $value, $fail) {
                    if ($value % 30 !== 0) {
                        $fail('Increment minutes must be multiple of 30.');
                    }
                },
            ],

            'max_duration' => [
                'required',
                'integer',
                function ($attribute, $value, $fail) use ($request) {

                    if ($value % 30 !== 0) {
                        $fail('Maximum duration must be multiple of 30 minutes.');
                    }

                    if ($value < $request->base_duration) {
                        $fail('Maximum duration must be greater than or equal to base duration.');
                    }

                    if (($value - $request->base_duration) % $request->increment_minutes !== 0) {
                        $fail('Max duration must follow increment rule.');
                    }
                },
            ],

            'base_price'      => 'required|integer|min:1',
            'increment_price' => 'required|integer|min:1',
        ]);
    }

    $imagePath = $package->image;

    if ($request->hasFile('image')) {
        if ($package->image) {
            Storage::disk('public')->delete($package->image);
        }

        $imagePath = $request->file('image')->store('packages', 'public');
    }

    $package->update([
        'name'              => $request->name,
        'short_description' => $request->short_description,
        'image'             => $imagePath,
        'image_alt'         => $request->image_alt,
        'pricing_type'      => $request->pricing_type,

        // Fixed
        'price'             => $request->pricing_type === 'fixed' ? $request->price : null,
        'duration'          => $request->pricing_type === 'fixed' ? $request->duration : null,

        // Flexible
        'base_duration'     => $request->pricing_type === 'flexible' ? $request->base_duration : null,
        'base_price'        => $request->pricing_type === 'flexible' ? $request->base_price : null,
        'increment_minutes' => $request->pricing_type === 'flexible' ? $request->increment_minutes : null,
        'increment_price'   => $request->pricing_type === 'flexible' ? $request->increment_price : null,
        'max_duration'      => $request->pricing_type === 'flexible' ? $request->max_duration : null,

        'details'           => $request->details,
        'status'            => $request->status ?? false,
        'order'             => $request->order ?? 0,
    ]);

    return redirect()
        ->route('admin.packages.index')
        ->with('success', 'Package updated successfully.');
}
    /**
     * Delete package
     */
    public function destroy(Package $package)
    {
        if ($package->image) {
            Storage::disk('public')->delete($package->image);
        }

        $package->delete();


        return redirect()
            ->route('admin.packages.index')
            ->with('success', 'Package deleted successfully.');
    }
}