@extends('layouts.admin')
@section('title', 'Edit Package')

@section('content')
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
  <div class="p-6 bg-white border-b border-gray-200">

    <h2 class="text-xl font-bold mb-4">Edit Package</h2>

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('admin.packages.update', $package->id) }}" 
          method="POST" 
          enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <!-- Image -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>

        <div class="mb-3">
          @if($package->image)
          <img id="previewImage"
               src="{{ asset('storage/' . $package->image) }}"
               alt="Package Image"
               class="w-32 h-32 object-cover rounded border">
          @else
          <img id="previewImage"
               src="{{ asset('images/no-image.png') }}"
               alt="No Image"
               class="w-32 h-32 object-cover rounded border">
          @endif
        </div>

        <input type="file"
               name="image"
               id="imageInput"
               accept="image/*"
               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">

        <p class="text-xs text-gray-500 mt-1">
          Leave empty to keep old image
        </p>
      </div>

      <!-- Image Alt -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Image Alt Text</label>
        <input type="text"
               name="image_alt"
               value="{{ $package->image_alt }}"
               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
      </div>

      <!-- Name -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Package Name</label>
        <input type="text"
               name="name"
               value="{{ $package->name }}"
               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
      </div>

      <!-- Short Description -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Short Description</label>
        <textarea name="short_description"
                  rows="3"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">{{ $package->short_description }}</textarea>
      </div>

      <!-- Pricing Type -->
<div class="mb-4">
  <label class="block text-gray-700 text-sm font-bold mb-2">Pricing Type</label>

  <div class="flex items-center space-x-6">
    <label class="flex items-center">
      <input type="radio"
             name="pricing_type"
             value="fixed"
             {{ $package->pricing_type === 'fixed' ? 'checked' : '' }}
             class="mr-2 pricingType">
      Fixed
    </label>

    <label class="flex items-center">
      <input type="radio"
             name="pricing_type"
             value="flexible"
             {{ $package->pricing_type === 'flexible' ? 'checked' : '' }}
             class="mr-2 pricingType">
      Flexible
    </label>
  </div>
</div>

<!-- Fixed Section -->
<div id="fixedSection" class="mb-4">

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Price</label>
    <input type="number"
           name="price"
           value="{{ $package->price }}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
  </div>

  <div>
    <label class="block text-gray-700 text-sm font-bold mb-2">Duration (Minutes)</label>
    <input type="number"
           name="duration"
           value="{{ $package->duration }}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
  </div>

</div>

<!-- Flexible Section -->
<div id="flexibleSection" class="mb-4">

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Base Duration (Minutes)</label>
    <input type="number"
           name="base_duration"
           value="{{ $package->base_duration }}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
  </div>

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Base Price</label>
    <input type="number"
           name="base_price"
           value="{{ $package->base_price }}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
  </div>

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Increment Minutes</label>
    <input type="number"
           name="increment_minutes"
           value="{{ $package->increment_minutes }}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
  </div>

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2">Increment Price</label>
    <input type="number"
           name="increment_price"
           value="{{ $package->increment_price }}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
  </div>

  <div>
    <label class="block text-gray-700 text-sm font-bold mb-2">Maximum Duration (Minutes)</label>
    <input type="number"
           name="max_duration"
           value="{{ $package->max_duration }}"
           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">
  </div>

</div>

      <!-- Details -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">Details</label>
        <textarea name="details"
                  rows="4"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline">{{ $package->details }}</textarea>
      </div>

      <!-- Order -->
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Order
        </label>
        <input type="number"
               name="order"
               value="{{ $package->order }}"
               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline"
               placeholder="Order">
      </div>

      <!-- Status -->
      <div class="mb-4 flex items-center">
        <input type="hidden" name="status" value="0">
        <input type="checkbox"
               name="status"
               value="1"
               class="mr-2"
               {{ $package->status ? 'checked' : '' }}>
        <label class="text-gray-700 text-sm font-bold">Active</label>
      </div>

      <div class="flex justify-between">
        <a href="{{ route('admin.packages.index') }}" class="text-blue-500">Back</a>
        <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">
          Update
        </button>
      </div>

    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>
document.getElementById('imageInput').addEventListener('change', function (event) {

    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (image) {
            document.getElementById('previewImage').src = image.target.result;
        };

        reader.readAsDataURL(file);
    }

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const pricingRadios = document.querySelectorAll('.pricingType');
    const fixedSection = document.getElementById('fixedSection');
    const flexibleSection = document.getElementById('flexibleSection');

    function toggleSections() {
        const selected = document.querySelector('input[name="pricing_type"]:checked');

        if (!selected) return;

        if (selected.value === 'fixed') {
            fixedSection.classList.remove('hidden');
            flexibleSection.classList.add('hidden');
        } else {
            fixedSection.classList.add('hidden');
            flexibleSection.classList.remove('hidden');
        }
    }

    pricingRadios.forEach(radio => {
        radio.addEventListener('change', toggleSections);
    });

    toggleSections(); // run on page load
});
</script>
@endpush