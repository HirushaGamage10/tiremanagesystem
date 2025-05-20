<x-app-layout>

<body class="relative flex items-center justify-center w-full h-full min-h-screen px-4 py-8 overflow-hidden bg-center bg-cover" style="background-image: url('assets/images/background1.png');">
    
  <!-- ✅ LOGO TOP-LEFT -->
  <div class="absolute z-10 flex flex-col items-start top-6 left-6">
    <img src="assets/images/logo2.png" class="h-[100px]" alt="Logo" />
  </div>

  <!-- ✅ BLUR OVERLAY -->
  <div class="absolute inset-0 z-0 backdrop-blur bg-black/30"></div>

    <!-- ✅ MAIN LOGIN WRAPPER -->
    <div class="relative z-10 grid w-full max-w-4xl overflow-hidden bg-white shadow-2xl md:grid-cols-2 rounded-2xl fade-in bg-opacity-10 ">

        <!-- ✅ LEFT PANEL: CENTERED USER LOGIN CONTENT -->
        <div class="relative flex flex-col items-center p-6 text-white bg-center bg-cover " style="background-image: url('assets/images/tire1.jpg');">
            <!-- Dark overlay -->
            <div class="absolute inset-0 bg-black bg-opacity-10"></div>
        
            <!-- Centered content -->
            <div class="relative z-10 max-w-md p-6 shadow-md rounded-xl">
                <h2 class="pt-4 mb-12 text-4xl font-bold text-center">Admin Login</h2>
                <h4 class="mb-6 text-xl font-semibold">Vehicle Tire Management System</h4>
                <p class="text-sm leading-relaxed text-gray-200">
                    Efficient tire request, approval, and management for company vehicles.
                    Empowering drivers, section managers, machine approvers and transport teams
                    with the best tools.
                </p>
            </div>
        </div>

        <!-- RIGHT PANEL -->
        <div class="flex flex-col justify-center p-10 bg-white bg-opacity-90">
            <form class="space-y-6">
                <div>
                    <label class="block mb-1 font-medium text-gray-700">Username</label>
                    <input type="text" placeholder="Enter username" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label class="block mb-1 font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input id="password" type="password" placeholder="Enter password" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <button type="button" onclick="togglePassword()" class="absolute text-lg text-gray-500 transform -translate-y-1/2 right-3 top-1/2">
                            <i id="eye-icon" class="text-gray-600 fas fa-eye fa-sm"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="remember" class="w-4 h-4">
                    <label for="remember" class="text-sm font-medium text-gray-700">Remember Me</label>
                </div>

                <button type="submit" class="w-full py-3 font-semibold text-white transition-all duration-300 bg-blue-700 rounded-lg hover:bg-blue-800">
                  <a href="index.html">Login</a>
                </button>

                <p class="mt-4 text-sm text-gray-500">Forgot Password? <a href="forgot_password.html" class="text-blue-700 hover:underline">Reset</a></p>

            </form>
        </div>
    </div>

     <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</x-app-layout>
