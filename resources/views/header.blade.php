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
                    <a href="/dashboard" class="text-gray-700 hover:text-blue-600 font-semibold">
                        Dashboard
                    </a>

                    <a href="/student" class="text-gray-700 hover:text-blue-600 font-semibold">
                        Students
                    </a>

                    <a href="/course" class="text-gray-700 hover:text-blue-600 font-semibold">
                        Courses
                    </a>
                    <a href="/profile" class="text-gray-700 hover:text-blue-600 font-semibold">
                        Profile
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="font-semibold bg-red-500 p-1 px-2 rounded text-white">
                            Logout
                        </button>
                    </form>
                </div>
                @endauth

            </div>

        </div>
        @auth
        <div class="md:hidden w-full flex justify-around gap-3 pb-5">
            <a href="/dashboard" class="text-gray-700 hover:text-blue-600">
                Dashboard
            </a>

            <a href="/students" class="text-gray-700 hover:text-blue-600">
                Students
            </a>

            <a href="/course" class="text-gray-700 hover:text-blue-600">
                Courses
            </a>

            <a href="/profile" class="text-gray-700 hover:text-blue-600">
                Profile
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="font-semibold">
                    Logout
                </button>
            </form>
        </div>
        @endauth

    </div>
</nav>