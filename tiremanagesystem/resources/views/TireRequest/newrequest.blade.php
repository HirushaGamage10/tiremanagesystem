<x-app-layout>

<body class="flex flex-col h-screen overflow-hidden bg-gray-100">

  <!-- Header -->
  @include('layouts.header')

  <!-- Main Wrapper -->
  <div class="flex flex-col flex-1 overflow-hidden sm:flex-row">

     <!-- Sidebar -->
     @include('layouts.side1')

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]">

      <div class="bg-white rounded-[30px] shadow p-4 sm:p-6 sm:px-16">
        <h2 class="mt-2 mb-6 text-xl font-extrabold text-blue-800 sm:text-2xl">New Tire Requests</h2>

        <form class="space-y-4">
          <div class="grid grid-cols-1 gap-4">

            <!-- Each input field in vertical layout -->
            
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Vehicle Number</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Vehicle Type</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Vehicle Brand</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Vehicle Model</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">User Section</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Delivery place - Name of the office</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Delivery place - Street name</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Delivery place - Town</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Last Tire Replacement Date</label>
              <input type="date" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Make of Existing Tire</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Tire Size Required</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Tire Brand Required</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Total Price</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Warranty Distance</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">No. of Tires Required</label>
              <input type="number" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">No. of Tubes Required</label>
              <input type="number" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Cost Centre</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Present km Reading</label>
              <input type="number" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Km at previous tire replacement</label>
              <input type="number" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <!-- Radio: Wire Indicator -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Tire Wire Indicator Appeared</label>
              <div class="flex flex-1 px-4 py-2 space-x-6 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300">
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="yes" class="mr-2" /> Yes</label>
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="no" class="mr-2" /> No</label>
              </div>
            </div>

            <!-- Radio: Wear Pattern -->
            <div class="flex flex-col sm:flex-row sm:items-start sm:space-x-4">
              <label class="mb-2 text-sm font-medium sm:w-1/3 sm:mb-0">Tire Wear Pattern</label>
              <div class="grid flex-1 grid-cols-1 gap-2 px-4 py-2 bg-gray-200 sm:grid-cols-3 rounded-2xl">
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
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Approving Officer Service no</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <!--Comments-->
            <div class="flex flex-col space-y-2 md:flex-row md:items-start md:space-x-4 md:space-y-0">
                <label class="mt-1 text-sm font-medium md:w-1/3">Comments</label>
                <textarea class="flex-1 px-4 py-2 bg-gray-200 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" rows="3"></textarea>
            </div>

            

            <!-- Upload 6 Images -->
            <div class="flex flex-col space-y-2 md:flex-row md:items-start md:space-x-4 md:space-y-0">
                <label class="mt-1 text-sm font-medium md:w-1/3">Upload 6 Images</label>
                <div class="flex-1 ">
                  <div 
                  class="p-6 text-center border-2 border-gray-300 border-dashed rounded-lg cursor-pointer hover:bg-gray-50 "
                  onclick="document.getElementById('imageInput').click()">
                  Drag and drop or click here
                </div>
                <input id="imageInput" type="file" accept="image/*" multiple class="hidden " onchange="handleImageUpload(event)" />
                <div id="imagePreview" class="grid grid-cols-6 gap-2 mt-4"></div>
                <div id="imagePreview" class="grid flex-1 grid-cols-2 gap-2 sm:grid-cols-3 md:grid-cols-6">
                <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 1</div>
                <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 2</div>
                <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 3</div>
                <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 4</div>
                <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 5</div>
                <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 6</div>
                </div>
                </div>
            </div>
          </div>

          <div class="flex justify-end pt-6 space-x-4">
                <button type="button"
                class="px-6 py-2 font-semibold text-white bg-green-600 rounded-full hover:bg-green-700">
                Sent Request
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