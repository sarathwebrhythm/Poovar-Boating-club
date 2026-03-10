@extends('layouts.admin')

@section('title', 'Package Management')

@section('content')

<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg min-h-[70vh]">

    <div class="p-6 border-b border-gray-200">

        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold">Package Management</h2>

            <a href="{{ route('admin.packages.create') }}"
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">

                 Create Package
            </a>
        </div>


        <!-- Success Message -->
        @if ($message = Session::get('success'))

            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>

        @endif


        <!-- Table -->
        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50">

            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    No
                </th>

                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    Image
                </th>

                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    Name
                </th>

                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    Price
                </th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    Order
                </th>

                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                    Status
                </th>

                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase w-[200px]">
                    Action
                </th>
            </tr>

            </thead>


            <tbody class="bg-white divide-y divide-gray-200">

            @foreach($packages as $i => $item)

                <tr>

                    <!-- No -->
                    <td class="px-6 py-4 whitespace-nowrap">
                        {{ $packages->firstItem() + $i }}
                    </td>


                    <!-- Image -->
                    <td class="px-6 py-4">

                        @if($item->image)

                            <img src="{{ asset('storage/'.$item->image) }}"
                                 class="h-12 w-12 object-cover rounded">

                        @else

                            <span class="text-gray-400">No Image</span>

                        @endif

                    </td>


                    <!-- Name -->
                    <td class="px-6 py-4">
                        {{ $item->name }}
                    </td>


                    <!-- Price -->
                  <td class="px-6 py-4">

                  @if($item->pricing_type === 'fixed')
                  ₹{{ number_format($item->price, 2) }}
                  @else
                  ₹{{ number_format($item->base_price, 2) }}
                  @endif

                 </td>

                    <!-- order -->
                         <td class="px-6 py-4">
                        {{ $item->order }}
                    </td>
                    <!-- Status -->
                    <td class="px-6 py-4 whitespace-nowrap">

                        <span
                            class="px-2 inline-flex text-xs font-semibold rounded-full
                            {{ $item->status ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">

                            {{ $item->status ? 'Active' : 'Inactive' }}

                        </span>

                    </td>


                    <!-- Action -->
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">

                        <a href="{{ route('admin.packages.edit', $item->id) }}"
                           class="text-indigo-600 hover:text-indigo-900 mr-2">

                            Edit
                        </a>


                        <form action="{{ route('admin.packages.destroy', $item->id) }}"
                              method="POST"
                              class="inline"
                              onsubmit="return confirm('Delete this package?');">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="text-red-600 hover:text-red-900">

                                Delete
                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

            </tbody>

        </table>


        <!-- Pagination -->
        <div class="mt-4">

            {!! $packages->links() !!}

        </div>
            <div class="flex justify-between">
        <a href="{{ route('admin.dashboard') }}" class="text-blue-500">Back</a>
  
      </div>

    </div>
  

</div>
    

@endsection