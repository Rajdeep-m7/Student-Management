<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16 items-center">

            <div class="text-xl font-bold">
                <a href='/'>
                    Student Management
                </a>
            </div>

            <div class="space-x-6">
                @guest
                <a href='/login' class="font-semibold hover:text-blue-600">Login</a>
                <a href="/register" class="font-semibold hover:text-blue-600">Sign Up</a>
                @endguest
                @auth
                <div class="hidden md:flex gap-5">
                    <a href="/dashboard" class="text-gray-700 hover:text-blue-600">
                        Dashboard
                    </a>

                    <a href="/students" class="text-gray-700 hover:text-blue-600">
                        Students
                    </a>

                    <a href="/course" class="text-gray-700 hover:text-blue-600">
                        Courses
                    </a>

                    <a href="#" class="text-red-500 hover:text-red-700">
                        Logout
                    </a>
                </div>
                @endauth

            </div>

        </div>
            @auth
                <div class="md:hidden flex justify-between space-x-4 pb-5">
                    <a href="/dashboard" class="text-gray-700 hover:text-blue-600">
                        Dashboard
                    </a>

                    <a href="/students" class="text-gray-700 hover:text-blue-600">
                        Students
                    </a>

                    <a href="/course" class="text-gray-700 hover:text-blue-600">
                        Courses
                    </a>

                    <a href="#" class="text-red-500 hover:text-red-700">
                        Logout
                    </a>
                </div>
                @endauth

    </div>
</nav>