<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> New Tire Requests</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400&display=swap" rel="stylesheet">
</head>
<body class="flex flex-col h-screen overflow-hidden bg-gray-100">

  <!-- Header -->
  <header class="flex justify-between items-center p-2 bg-[#0F1E36] shadow-md z-10">
    <div class="flex items-center space-x-3">
      <a href="index.html" >
        <img src="assets/images/logo2.png" class="h-[80px]" alt="SLTMobitel Logo">
      </a>
    </div>
    <div class="relative">
      <div onclick="toggleDropdown('profileMenu')" class="flex items-center space-x-3 cursor-pointer">
        <span class="font-medium text-white">Mr. Sadun Kumara</span>
        <img src="https://i.pravatar.cc/40?img=3" class="w-10 h-10 border-2 border-white rounded-full" alt="Profile Picture">
      </div>
      <!-- Profile Dropdown -->
      <div id="profileMenu" class="absolute right-0 z-20 hidden w-48 mt-2 text-black bg-white shadow-lg rounded-xl">
        <a href="profile.html" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
        <a href="login.html" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  </header>

  <!-- Main Content Wrapper -->
  <div class="flex flex-1 overflow-hidden">

    <!-- Sidebar -->
    <div class="relative flex flex-col w-64 p-4 overflow-hidden bg-white shadow">

      <!-- Background Image -->
      <div class="absolute inset-0 bg-center bg-cover"
           style="background-image: url('assets/images/background3.png'); 
                  filter: blur(2px); opacity: 0.47;"></div>

      <!-- Sidebar Content -->
      <div class="relative z-10 flex flex-col items-center mt-8 space-y-6">
        <button class="w-full bg-green-600 text-white py-2 rounded-[10px] hover:bg-green-700">
          <a href="NewTireRequest.html">Approval</a>
        </button>
        <button class="w-full bg-blue-700 text-white py-2 rounded-[10px] hover:bg-blue-800">
          <a href="approvalRequest.html">Approval Requests</a>
        </button>
      </div>
    </div>


    <!-- Main Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-8 bg-[#999999]">

        <button class="flex items-center px-4 py-2 mb-4 space-x-2 text-white bg-blue-600 rounded-lg hover:bg-blue-700">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span><a href="approval.html"> Back</span></a>
        </button>
        
      <div class="bg-white rounded-[30px] shadow p-6 px-16">
        <h2 class="mt-2 mb-6 text-2xl font-extrabold text-blue-800 ">Tire Request Approval</h2>
        <div class="overflow-x-auto">

          <form class="space-y-4">

            <!-- Reusable row structure -->
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Serial No</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
            <!-- Reusable row structure -->
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Vehicle Number</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Vehicle Type</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
          </div>
    
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Vehicle Brand</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Vehicle Model</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">User Section</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Last Tire Replacement Date</label>
              <input type="date" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
             </div>
    
             <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Make of Existing Tire</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
        
            <div class="flex items-center space-x-4">
                 <label class="w-1/3 text-sm font-medium">Tire Size Required</label>
                 <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
             </div>
    
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Tire Brand Required</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Tire Brand Required</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">No. of Tires Required</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">No. of Tubes Required</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Cost Centre</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Present km Reading</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Km reading at previous tire replacement</label>
                <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

             <div class="flex items-center space-x-4">
                <label class="w-1/3 text-sm font-medium">Tire Wire indicator appeared</label>
                <div class="flex flex-1 px-4 py-2 space-x-6 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300">
                    <label class="flex items-center text-sm">
                        <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> Yes
                    </label>
                    <label class="flex items-center text-sm">
                        <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> No
                    </label>
                </div>
            </div>
    
            <div class="flex items-start space-x-4">
                <label class="w-1/3 mt-2 text-sm font-medium">Tire Wear pattern</label>
                <div class="grid flex-1 grid-cols-3 gap-2 px-4 py-2 bg-gray-200 border focus:outline-none focus:ring focus:border-blue-300 rounded-2xl">
                    <label class="flex items-center text-sm">
                        <input type="radio" name="wear_pattern" class="mr-2 rounded-full" /> One edge
                    </label>
                    <label class="flex items-center text-sm">
                        <input type="radio" name="wear_pattern" class="mr-2 rounded-full" /> Middle
                    </label>
                    <label class="flex items-center text-sm">
                        <input type="radio" name="wear_pattern" class="mr-2 rounded-full" /> Both edge
                    </label>
                    <label class="flex items-center text-sm">
                        <input type="radio" name="wear_pattern" class="mr-2 rounded-full" /> Middle Crack
                    </label>
                    <label class="flex items-center text-sm">
                        <input type="radio" name="wear_pattern" class="mr-2 rounded-full" /> Sidewall Crack
                    </label>
                    <label class="flex items-center text-sm">
                        <input type="radio" name="wear_pattern" class="mr-2 rounded-full" /> Normal Wear
                    </label>
                </div>
            </div>
    
            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Approving Officer Service no</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>
    
            <div class="flex items-start space-x-4">
                <label class="w-1/3 mt-2 text-sm font-medium">Comments</label>
                <textarea class="flex-1 px-4 py-2 bg-gray-200 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" rows="3"></textarea>
            </div>

            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Warranty State</label>
              <div class="flex flex-1 px-4 py-2 space-x-6 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300">
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> Yes
                  </label>
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> No
                  </label>
              </div>
            </div>

            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Incorrect aignment</label>
              <div class="flex flex-1 px-4 py-2 space-x-6 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300">
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> Yes
                  </label>
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> No
                  </label>
              </div>
            </div>
            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Detective Steering System</label>
              <div class="flex flex-1 px-4 py-2 space-x-6 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300">
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> Yes
                  </label>
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> No
                  </label>
              </div>
            </div>

            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Detective Suspension</label>
              <div class="flex flex-1 px-4 py-2 space-x-6 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300">
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> Yes
                  </label>
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> No
                  </label>
              </div>
            </div>

            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Purchase Tires</label>
              <div class="flex flex-1 px-4 py-2 space-x-6 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300">
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> Yes
                  </label>
                  <label class="flex items-center text-sm">
                      <input type="radio" name="wire_indicator" class="mr-2 rounded-full" /> No
                  </label>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <label class="w-1/3 mt-2 text-sm font-medium">Transport officer Comments</label>
              <textarea class="flex-1 px-4 py-2 bg-gray-200 border rounded-lg focus:outline-none focus:ring focus:border-blue-300" rows="3"></textarea>
            </div>

            <div class="flex items-center space-x-4">
              <label class="w-1/3 text-sm font-medium">Approve transpost officer service no</label>
              <input type="text" class="flex-1 px-4 py-2 bg-gray-200 border rounded-full focus:outline-none focus:ring focus:border-blue-300" />
            </div>

            <div class="flex items-start space-x-4">
                <label class="w-1/3 mt-2 text-sm font-medium">Upload 6 Images</label>
                <div id="imagePreview" class="grid grid-cols-6 gap-2 mt-4">
                  <!-- Image preview boxes -->
                  <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 1</div>
                  <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 2</div>
                  <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 3</div>
                  <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 4</div>
                  <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 5</div>
                  <div class="p-4 text-xs text-center text-gray-600 bg-gray-100 border rounded-lg">Image 6</div>
                </div>
                </div>
            </div>
    
            <div class="flex justify-end pt-6 space-x-4">
                <button type="button"
                class="px-6 py-2 text-sm font-medium text-white bg-green-600 rounded-full hover:bg-green-700">
                Approval
              </button>
              <button type="button"
                class="px-6 py-2 text-sm font-medium text-white bg-red-500 rounded-full hover:bg-yellow-600">
                Reject
              </button>
            </div>
        </form>
          
        </div>
      </div>
    </div>
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
