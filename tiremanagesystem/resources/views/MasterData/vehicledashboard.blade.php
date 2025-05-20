<x-app-layout>

<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

   <!-- Header -->
    @include('layouts.header')


  <!-- Main Layout -->
  <div class="flex flex-col md:flex-row flex-1 overflow-hidden">
    
    <!-- Sidebar -->
    @include('layouts.side2')

    <!-- Main Content -->
    <div class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]" style="background-image: url('assets/images/tire13.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
      <div class="bg-white rounded-[30px] shadow p-4 sm:p-6">

        <!-- Title, Search & Add Button -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-6">
          <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 mb-4 md:mb-0">Vehicle Details</h2>
          <div class="flex flex-col sm:flex-row gap-2 w-full sm:w-auto">

            <div class="relative w-full sm:w-80">
              <input type="text" id="searchInput" placeholder="Search by Vehicle No, Driver..." class="w-full pl-10 pr-4 py-2 rounded-full border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
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

        <!-- Tire Form (Initially Hidden) -->
        <div id="tireForm" class="hidden bg-gray-100 p-4 rounded-xl mb-6 border border-gray-300">
          <h3 class="text-lg font-bold mb-4 text-blue-900 ">Add Vehicle Details</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <input type="text" placeholder="Vehicle Number" class="border p-2 rounded w-full" />
            <input type="text" placeholder="Vehicle Type" class="border p-2 rounded w-full" />
            <input type="text" placeholder="Vehicle Brand" class="border p-2 rounded w-full" />
            <input type="text" placeholder="Vehicle Model" class="border p-2 rounded w-full" />
            <input type="text" placeholder="Section" class="border p-2 rounded w-full" />
            
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-blue-700 text-white px-4 py-2 rounded hover:bg-blue-800">Submit</button>
          </div>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
          <table class="min-w-full border border-gray-200">
            <thead>
              <tr class="bg-blue-800 text-white text-left">
                <th class="px-4 py-2 border">Vehicle Number</th>
                <th class="px-4 py-2 border">Vehicle Type</th>
                <th class="px-4 py-2 border">Vehicle Brand</th>
                <th class="px-4 py-2 border">Vehicle Model</th>  
                <th class="px-4 py-2 border">Section</th>   
                <th class="px-4 py-2 border">Status</th>
              </tr>
            </thead>
            <tbody id="tableBody">
              <tr class="text-gray-700">
                <td class="px-4 py-2 border">CAB-2345</td>
                <td class="px-4 py-2 border">Jeep</td>
                <td class="px-4 py-2 border">Toyota</td>
                <td class="px-4 py-2 border">leep</td>
                <td class="px-4 py-2 border">Transport</td>
                <td class="px-4 py-2 border">
                  <a href="Approval view.html" class="bg-red-600 text-white px-2 py-1 rounded text-sm inline-block">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/script.js') }}"></script>


  
</body>

</x-app-layout>
