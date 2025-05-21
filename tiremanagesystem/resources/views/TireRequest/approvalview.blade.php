<x-app-layout>

<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

  <!-- Header -->
  @include('layouts.header')
   

  <!-- Main Wrapper -->
  <div class="flex flex-1 overflow-hidden flex-col sm:flex-row">

    <!-- Sidebar -->
    @include('layouts.side3')

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]">

      <button class="flex items-center space-x-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 mb-4">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
        </svg>
        <a href="approval.html">Back</a>
      </button>

      <div class="bg-white rounded-[30px] shadow p-4 sm:p-6 sm:px-16">
        <h2 class="text-xl sm:text-2xl font-extrabold mb-6 mt-2 text-blue-800">Tire Request Approval</h2>

        <form class="space-y-4">
          <div class="grid grid-cols-1 gap-4">

            

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Vehicle Number</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Vehicle Type</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Vehicle Brand</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Vehicle Model</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">User Section</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Delivery place -Name of the office</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Delivery place -Street Name</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Delivery place -Town</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Last Tire Replacement Date</label>
              <input type="date" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Make of Existing Tire</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Tire Size Required</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Tire Brand Required</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Total Price</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Warranty Distance</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">No. of Tires Required</label>
              <input type="number" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">No. of Tubes Required</label>
              <input type="number" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Cost Centre</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Present km Reading</label>
              <input type="number" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Km at previous tire replacement</label>
              <input type="number" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <!-- Radio: Wire Indicator -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Tire Wire Indicator Appeared</label>
              <div class="flex space-x-6 bg-gray-200 px-4 py-2 rounded-full flex-1 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200">
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="yes" class="mr-2" /> Yes</label>
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="no" class="mr-2" /> No</label>
              </div>
            </div>

            <!-- Radio: Wear Pattern -->
            <div class="flex flex-col sm:flex-row sm:items-start sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-2 sm:mb-0">Tire Wear Pattern</label>
              <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 bg-gray-200 px-4 py-2 rounded-2xl flex-1">
                <label class="flex items-center text-sm"><input type="radio" name="wear_pattern" value="one_edge" class="mr-2" /> One edge</label>
                <label class="flex items-center text-sm"><input type="radio" name="wear_pattern" value="middle" class="mr-2" /> Middle</label>
                <label class="flex items-center text-sm"><input type="radio" name="wear_pattern" value="both_edges" class="mr-2" /> Both edges</label>
                <label class="flex items-center text-sm"><input type="radio" name="wear_pattern" value="middle_crack" class="mr-2" />  Middle Crack</label>
                <label class="flex items-center text-sm"><input type="radio" name="wear_pattern" value="sidewall_crack" class="mr-2" /> Sidewall Crack</label>
                <label class="flex items-center text-sm"><input type="radio" name="wear_pattern" value="normal_wear" class="mr-2" /> Normal Wear</label>
              </div>
            </div>

            <!--Approving officer service no-->
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Approving Officer Service no</label>
              <input type="text" class="flex-1 rounded-full bg-gray-200 px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>
    
            <!--Comments-->
            <div class="flex flex-col md:flex-row md:items-start md:space-x-4 space-y-2 md:space-y-0">
                <label class="md:w-1/3 font-medium text-sm mt-1">Comments</label>
                <textarea class="flex-1 border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" rows="3"></textarea>
            </div>

           

            <!-- Section Officer Comments -->
            <div class="flex flex-col md:flex-row md:items-start md:space-x-4 space-y-2 md:space-y-0">
                <label class="md:w-1/3 font-medium text-sm mt-1">Section Officer Comments</label>
                <textarea class="flex-1 border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" rows="3"></textarea>
            </div>

            <!-- Approve Service No -->
            <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-2 md:space-y-0">
                <label class="md:w-1/3 font-medium text-sm">Approve Section Officer Service No</label>
                <input type="text" class="flex-1 border rounded-full px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" />
            </div>

            <!-- Upload 6 Images -->
            <div class="flex flex-col md:flex-row md:items-start md:space-x-4 space-y-2 md:space-y-0">
                <label class="md:w-1/3 font-medium text-sm mt-1">Upload 6 Images</label>
                <div id="imagePreview" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-2 flex-1">
                <div class="border rounded-lg p-4 text-center text-xs text-gray-600 bg-gray-100">Image 1</div>
                <div class="border rounded-lg p-4 text-center text-xs text-gray-600 bg-gray-100">Image 2</div>
                <div class="border rounded-lg p-4 text-center text-xs text-gray-600 bg-gray-100">Image 3</div>
                <div class="border rounded-lg p-4 text-center text-xs text-gray-600 bg-gray-100">Image 4</div>
                <div class="border rounded-lg p-4 text-center text-xs text-gray-600 bg-gray-100">Image 5</div>
                <div class="border rounded-lg p-4 text-center text-xs text-gray-600 bg-gray-100">Image 6</div>
                </div>
            </div>
          </div>

          <div class="flex justify-end space-x-4 pt-6">
                <button type="button"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-2 rounded-full">
                Approval
              </button>
              <button type="button"
                class="bg-red-500  hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-full">
                Reject
              </button>
            </div>
        </form>
      </div>
    </main>
  </div>

    <!-- Custom JavaScript -->
  <script src="{{ asset('assets/js/script.js') }}"></script>
 

</body>

</x-app-layout>