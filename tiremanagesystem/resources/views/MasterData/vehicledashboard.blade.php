<!-- filepath: resources/views/MasterData/vehicledashboard.blade.php -->
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
          <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 mb-4 md:mb-0">Vehicle Details</h2>
          <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">
            <div class="relative w-full sm:w-80">
              <input type="text" id="vehicleSearchInput" onkeyup="filterTable('vehicleTable', 'vehicleSearchInput')" placeholder="Search by any field..." class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 6.65a7.5 7.5 0 010 10.6z" />
                </svg>
              </div>
            </div>
            <button onclick="toggleForm()" class="bg-green-700 text-white px-10 py-2 rounded-full hover:bg-green-800 text-sm sm:text-base shadow">
              + Add Vehicle
            </button>
          </div>
        </div>

        <!-- Success Message -->
        @if(session('success'))
          <div class="mb-4 text-green-700 bg-green-100 border border-green-400 rounded px-4 py-2">
            {{ session('success') }}
          </div>
        @endif

        <!-- Error Messages -->
        @if($errors->any())
          <div class="mb-4 text-red-700 bg-red-100 border border-red-400 rounded px-4 py-2">
            <ul class="list-disc pl-5">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <!-- Vehicle Form (Initially Hidden) -->
        <div id="tireForm" class="hidden bg-gray-100 p-4 rounded-xl mb-6 border border-gray-300">
          <form method="POST" action="{{ route('vehicle.store') }}">
            @csrf
            <h3 class="text-lg font-bold mb-4 text-blue-900 ">Add Vehicle Details</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
              <input type="text" name="vehicle_number" value="{{ old('vehicle_number') }}" placeholder="Vehicle Number" class="border p-2 rounded w-full" required />
              <input type="text" name="model" value="{{ old('model') }}" placeholder="Vehicle Model" class="border p-2 rounded w-full" required />
              <input type="text" name="brand" value="{{ old('brand') }}" placeholder="Vehicle Brand" class="border p-2 rounded w-full" required />
              <input type="number" name="register_year" value="{{ old('register_year') }}" placeholder="Register Year" class="border p-2 rounded w-full" min="1900" max="{{ date('Y') }}" />
              <input type="text" name="engine_number" value="{{ old('engine_number') }}" placeholder="Engine Number" class="border p-2 rounded w-full" />
              <input type="text" name="chassis_number" value="{{ old('chassis_number') }}" placeholder="Chassis Number" class="border p-2 rounded w-full" />
              <input type="text" name="branch" value="{{ old('branch') }}" placeholder="Branch" class="border p-2 rounded w-full" required />
              <input type="text" name="department" value="{{ old('department') }}" placeholder="Department" class="border p-2 rounded w-full" />
            </div>
            <div class="mt-4 flex justify-end">
              <button type="submit" class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Submit</button>
            </div>
          </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
          <table id="vehicleTable" class="min-w-full border border-gray-200">
            <thead>
              <tr class="bg-blue-800 text-white text-left">
                <th class="px-4 py-2 border">Vehicle Number</th>
                <th class="px-4 py-2 border">Vehicle Model</th>
                <th class="px-4 py-2 border">Vehicle Brand</th>
                <th class="px-4 py-2 border">Register Year</th>
                <th class="px-4 py-2 border">Engine Number</th>
                <th class="px-4 py-2 border">Chassis Number</th>
                <th class="px-4 py-2 border">Branch</th>
                <th class="px-4 py-2 border">Department</th>
                <th class="px-4 py-2 border">Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse($vehicles as $vehicle)
                <tr class="text-gray-700">
                  <td class="px-4 py-2 border">{{ $vehicle->vehicle_number }}</td>
                  <td class="px-4 py-2 border">{{ $vehicle->model }}</td>
                  <td class="px-4 py-2 border">{{ $vehicle->brand }}</td>
                  <td class="px-4 py-2 border">{{ $vehicle->register_year }}</td>
                  <td class="px-4 py-2 border">{{ $vehicle->engine_number }}</td>
                  <td class="px-4 py-2 border">{{ $vehicle->chassis_number }}</td>
                  <td class="px-4 py-2 border">{{ $vehicle->branch }}</td>
                  <td class="px-4 py-2 border">{{ $vehicle->department }}</td>
                  <td class="px-4 py-2 border">
                    <form method="POST" action="{{ route('vehicle.destroy', $vehicle->id) }}" onsubmit="return confirm('Are you sure?');">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="bg-red-600 text-white px-2 py-1 rounded text-sm">Delete</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="9" class="text-center py-4">No vehicles found.</td>
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