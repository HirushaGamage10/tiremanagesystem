<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tire Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400&display=swap" rel="stylesheet">
</head>
<body class="flex flex-col h-screen overflow-hidden bg-gray-100">

    <!-- Header -->
    <header class="flex justify-between items-center p-2 bg-[#0F1E36] shadow-md z-10">
        <div class="flex items-center space-x-3">
            <a href="index.html">
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
            <div class="bg-white rounded-[30px] shadow p-6 px-6">

                <!-- Title + Search Bar -->
                <div class="flex flex-col justify-between mb-6 md:flex-row md:items-center">
                    <h2 class="mb-4 text-2xl font-extrabold text-blue-800 md:mb-0">Approval Requests</h2>

                    <!-- Search Bar -->
                    <div class="relative w-full md:w-80">
                        <input
                            type="text"
                            id="searchInput"
                            placeholder="Search by Vehicle No, Driver..."
                            class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" stroke-width="2"
                                     viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1116.65 6.65a7.5 7.5 0 010 10.6z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-200">
                        <thead>
                            <tr class="text-left text-white bg-blue-800">
                                <th class="px-4 py-2 border">Vehicle No</th>
                                <th class="px-4 py-2 border">Driver</th>
                                <th class="px-4 py-2 border">Tire Size</th>
                                <th class="px-4 py-2 border">Type</th>
                                <th class="px-4 py-2 border">Position</th>
                                <th class="px-4 py-2 border">Date</th>
                                <th class="px-4 py-2 border">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="text-gray-700">
                                <td class="px-4 py-2 border">WP-CAD-4567</td>
                                <td class="px-4 py-2 border">DVR0003</td>
                                <td class="px-4 py-2 border">195/65R15</td>
                                <td class="px-4 py-2 border">Radial</td>
                                <td class="px-4 py-2 border">Front Left</td>
                                <td class="px-4 py-2 border">2025-04-29</td>
                                <td class="px-4 py-2 border">

                                    <span class="px-2 py-1 text-sm bg-green-800 rounded text-sky-50">
                                       <a href="Approval view.html"> View</span></a>
                                </td>

                            </tr>
                        </tbody>
                    </table>
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

        const searchInput = document.getElementById("searchInput");
        const tableBody = document.getElementById("tableBody");

        searchInput.addEventListener("input", function () {
            const filter = searchInput.value.toLowerCase();
            const rows = tableBody.getElementsByTagName("tr");

            for (let row of rows) {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
            }
        });
    </script>
</body>
</html>
