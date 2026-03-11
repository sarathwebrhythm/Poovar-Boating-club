<?php

namespace App\Http\Controllers\User;
use App\Models\Package;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function show($id)
    {
        $package = Package::findOrFail($id);

        return view('user.package-detail', compact('package'));
    }
}