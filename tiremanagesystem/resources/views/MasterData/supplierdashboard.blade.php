<!-- filepath: resources/views/MasterData/supplierdashboard.blade.php -->
<x-app-layout>
<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">
  <!-- Header -->
  @include('layouts.header')

  <!-- Main Layout -->
  <div class="flex flex-col md:flex-row flex-1 overflow-hidden">

    <!-- Sidebar -->
    @include('layouts.side2')

    <!-- Main Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]" style="background-image: url('{{ asset('assets/images/tire13.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
      <div class="bg-white rounded-[30px] shadow p-4 sm:p-6">

        <!-- Title, Search & Add Button -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
          <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 mb-4 md:mb-0">Supplier Details</h2>
          <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
            <div class="relative w-full sm:w-80">
              <input id="supplierSearchInput" onkeyup="filterTable('supplierTable', 'supplierSearchInput')" placeholder="Search by any field..." class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 6.65a7.5 7.5 0 010 10.6z" />
                </svg>
              </div>
            </div>
            <button onclick="toggleForm()" type="button" class="bg-green-700 text-white px-10 py-2 rounded-full hover:bg-green-800 text-sm sm:text-base shadow">
              + Add Supplier
            </button>
          </div>
        </div>
        @if(session('success'))
          <div class="mb-4 text-green-700 bg-green-100 border border-green-400 rounded px-4 py-2">
            {{ session('success') }}
          </div>
        @endif

        <!-- Supplier Form (Initially Hidden) -->
        <div id="tireForm" class="hidden bg-gray-100 p-4 rounded-xl mb-6 border border-gray-300">
          <form method="POST" action="{{ route('supplier.store') }}">
            @csrf
            <h3 class="text-lg font-bold mb-4 text-blue-900 ">Add Supplier Details</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
              <input type="text" name="name" placeholder="Supplier Name" class="border p-2 rounded w-full" required />
              <input type="text" name="tire_size" placeholder="Tire Size" class="border p-2 rounded w-full" required />
              <input type="text" name="brand" placeholder="Brand" class="border p-2 rounded w-full" required />
              <input type="text" name="address" placeholder="Address" class="border p-2 rounded w-full" />
              <input type="text" name="country" placeholder="Country" class="border p-2 rounded w-full" required />
              <input type="text" name="phone_number" placeholder="Phone No" class="border p-2 rounded w-full" required />
              <input type="email" name="email" placeholder="Email" class="border p-2 rounded w-full" required />
              <input type="text" name="comment" placeholder="Comment" class="border p-2 rounded" />
            </div>
            <div class="mt-4 flex justify-end">
              <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Submit</button>
            </div>
          </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
          <table id="supplierTable" class="min-w-full border border-gray-200">
            <thead>
              <tr class="bg-blue-800 text-white text-left">
                <th class="px-4 py-2 border">Supplier ID</th>
                <th class="px-4 py-2 border">Supplier Name </th>
                <th class="px-4 py-2 border">Tire Size</th>
                <th class="px-4 py-2 border">Brand </th>
                <th class="px-4 py-2 border">Address</th> 
                <th class="px-4 py-2 border">Country</th>
                <th class="px-4 py-2 border">Phone No</th>   
                <th class="px-4 py-2 border">Email</th>
                <th class="px-4 py-2 border">Comment</th>
                <th class="px-4 py-2 border">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($suppliers as $supplier)
                <tr class="text-gray-700">
                  <td class="px-4 py-2 border">{{ $supplier->id }}</td>
                  <td class="px-4 py-2 border">{{ $supplier->name }}</td>
                  <td class="px-4 py-2 border">{{ $supplier->tire_size }}</td>
                  <td class="px-4 py-2 border">{{ $supplier->brand }}</td>
                  <td class="px-4 py-2 border">{{ $supplier->address }}</td>
                  <td class="px-4 py-2 border">{{ $supplier->country }}</td>
                  <td class="px-4 py-2 border">{{ $supplier->phone_number }}</td>
                  <td class="px-4 py-2 border">{{ $supplier->email }}</td>
                  <td class="px-4 py-2 border">{{ $supplier->comment }}</td>
                  <td class="px-4 py-2 border">
                    <form method="POST" action="{{ route('supplier.destroy', $supplier->id) }}" onsubmit="return confirm('Are you sure?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600 text-sm">Delete</button>
                    </form>
                    <a href="" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600 text-sm">Edit</a>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="10" class="text-center py-4">No suppliers found.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</x-app-layout>