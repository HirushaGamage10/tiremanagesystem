<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>New Tire Requests</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex flex-col overflow-hidden">

  <!-- Header -->
  <header class="flex justify-between items-center p-2 bg-[#0F1E36] shadow-md z-10">
    <div class="flex items-center space-x-3">
      <a href="index.html">
        <img src="assets/images/logo2.png" class="h-[60px] sm:h-[80px]" alt="SLTMobitel Logo">
      </a>
    </div>
    <div class="relative">
      <div onclick="toggleDropdown('profileMenu')" class="cursor-pointer flex items-center space-x-2">
        <span class="text-white text-sm sm:text-base font-medium">Mr. Sadun Kumara</span>
        <img src="https://i.pravatar.cc/40?img=3" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full border-2 border-white" alt="Profile Picture">
      </div>
      <div id="profileMenu" class="hidden absolute right-0 mt-2 w-48 bg-white text-black rounded-xl shadow-lg z-20">
        <a href="profile.html" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
        <a href="login.html" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  </header>

  <!-- Main Wrapper -->
  <div class="flex flex-1 overflow-hidden flex-col sm:flex-row">

    <!-- Sidebar -->
    <aside class="w-full sm:w-64 p-4 bg-white relative shadow z-10">
      <div class="absolute inset-0 bg-cover bg-center opacity-40 blur-sm" style="background-image: url('assets/images/background3.png');"></div>
      <div class="relative z-10 mt-4 sm:mt-8 flex flex-col sm:items-center space-y-4 sm:space-y-6">
        <a href="NewTireRequest.html" class="block w-full text-center bg-green-600 text-white py-2 rounded-[10px] hover:bg-green-700 text-sm sm:text-base">Approval</a>
        <a href="approvalRequest.html" class="block w-full text-center bg-blue-700 text-white py-2 rounded-[10px] hover:bg-blue-800 text-sm sm:text-base">Approval Requests</a>
      </div>
    </aside>

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

            <!-- Radio: Warranty State -->
             <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Warranty State</label>
              <div class="flex space-x-6 bg-gray-200 px-4 py-2 rounded-full flex-1 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200">
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="yes" class="mr-2" /> Yes</label>
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="no" class="mr-2" /> No</label>
              </div>
            </div>

            

            <!-- Radio: Incorrect Alignment -->
             <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Incorrect aignment</label>
              <div class="flex space-x-6 bg-gray-200 px-4 py-2 rounded-full flex-1 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200">
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="yes" class="mr-2" /> Yes</label>
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="no" class="mr-2" /> No</label>
              </div>
            </div>

            <!-- Radio: Detective Steering System -->
             <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Detective Steering System</label>
              <div class="flex space-x-6 bg-gray-200 px-4 py-2 rounded-full flex-1 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200">
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="yes" class="mr-2" /> Yes</label>
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="no" class="mr-2" /> No</label>
              </div>
            </div>

            
            <!-- Radio: Detective Suspension -->
             <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Detective Suspension</label>
              <div class="flex space-x-6 bg-gray-200 px-4 py-2 rounded-full flex-1 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200">
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="yes" class="mr-2" /> Yes</label>
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="no" class="mr-2" /> No</label>
              </div>
            </div>

            <!-- Radio: Purchase Tires -->
             <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4">
              <label class="sm:w-1/3 text-sm font-medium mb-1 sm:mb-0">Purchase Tires</label>
              <div class="flex space-x-6 bg-gray-200 px-4 py-2 rounded-full flex-1 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200">
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="yes" class="mr-2" /> Yes</label>
                <label class="flex items-center text-sm"><input type="radio" name="wire_indicator" value="no" class="mr-2" /> No</label>
              </div>
            </div>

            <!-- Transport Officer Comments -->
            <div class="flex flex-col md:flex-row md:items-start md:space-x-4 space-y-2 md:space-y-0">
                <label class="md:w-1/3 font-medium text-sm mt-1">Transport Officer Comments</label>
                <textarea class="flex-1 border rounded-lg px-4 py-2 focus:outline-none focus:ring focus:border-blue-300 bg-gray-200" rows="3"></textarea>
            </div>

            <!-- Approve Service No -->
            <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-2 md:space-y-0">
                <label class="md:w-1/3 font-medium text-sm">Approve Transport Officer Service No</label>
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