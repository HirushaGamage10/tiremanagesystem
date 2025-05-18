
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Tire Requests</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400&display=swap" rel="stylesheet">
</head>
<body class="flex flex-col h-screen overflow-hidden bg-gray-100">

  <!-- Header -->
  <header class="flex justify-between items-center p-2 bg-[#0F1E36] shadow-md z-10">
    <div class="flex items-center space-x-3">
      <a href="index.html">
        <img src="assets/images/logo2.png" class="h-[60px] sm:h-[80px]" alt="SLTMobitel Logo">
      </a>
    </div>
    <div class="relative">
      <div onclick="toggleDropdown('profileMenu')" class="flex items-center space-x-2 cursor-pointer">
        <span class="text-sm font-medium text-white sm:text-base">Mr. Sadun Kumara</span>
        <img src="https://i.pravatar.cc/40?img=3" class="border-2 border-white rounded-full w-9 h-9 sm:w-10 sm:h-10" alt="Profile Picture">
      </div>
      <div id="profileMenu" class="absolute right-0 z-20 hidden w-48 mt-2 text-black bg-white shadow-lg rounded-xl">
        <a href="profile.html" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
        <a href="login.html" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  </header>

  <!-- Main Wrapper -->
  <div class="flex flex-col flex-1 overflow-hidden sm:flex-row">

     <!-- Sidebar -->
    <aside class="relative z-10 w-full p-4 bg-white shadow sm:w-64">
      <div class="absolute inset-0 bg-center bg-cover opacity-40 blur-sm" style="background-image: url('assets/images/background3.png');"></div>
      <div class="relative z-10 flex flex-col mt-4 space-y-4 sm:mt-8 sm:items-center sm:space-y-6">
        <a href="NewTireRequest.html" class="block w-full text-center bg-green-600 text-white py-2 rounded-[10px] hover:bg-green-700 text-sm sm:text-base">Submit Request</a>
        <a href="approvalRequest.html" class="block w-full text-center bg-blue-700 text-white py-2 rounded-[10px] hover:bg-blue-800 text-sm sm:text-base">View Requests</a>
      </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto p-4 sm:p-8 bg-[#999999]">

      <div class="bg-white rounded-[30px] shadow p-4 sm:p-6 sm:px-16">
        <h2 class="mt-2 mb-6 text-xl font-extrabold text-blue-800 sm:text-2xl">New Tire Requests</h2>

        <form class="space-y-4">
          <div class="grid grid-cols-1 gap-4">

            <!-- Each input field in vertical layout -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="mb-1 text-sm font-medium sm:w-1/3 sm:mb-0">Serial No</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

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
                Approval
              </button>
              <button type="button"
                class="px-6 py-2 font-semibold text-white bg-red-500 rounded-full hover:bg-red-700">
                Reject
              </button>
            </div>
        </form>
      </div>
    </main>
  </div>

  <!-- Dropdown Toggle Script -->
  <script>
    function toggleDropdown(id) {
      document.querySelectorAll('[id$="Dropdown"], #profileMenu').forEach(dropdown => {
        if (dropdown.id !== id) dropdown.classList.add('hidden');
      });
      const element = document.getElementById(id);
      element.classList.toggle('hidden');
    }

    window.addEventListener('click', function (e) {
      if (!e.target.closest('[onclick]') && !e.target.closest('#profileMenu')) {
        document.querySelectorAll('[id$="Dropdown"], #profileMenu').forEach(dropdown => {
          dropdown.classList.add('hidden');
        });
      }
    });
  </script>

</body>
</html>