@extends('app')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Management System</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-gray-100">

    <!-- HERO SECTION -->
    <div class="container mx-auto px-6 py-20">
        <div class="text-center max-w-3xl mx-auto">

            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-100 text-blue-600 text-sm font-medium mb-6">
                🎓 Student Management System
            </div>

            <h1 class="text-5xl font-bold tracking-tight mb-6">
                Manage Your <span class="text-blue-600">Students</span> &
                <span class="text-blue-600">Courses</span>
            </h1>

            <p class="text-xl text-gray-500 mb-8 leading-relaxed">
                A simple and efficient way to organize student data, track enrollments,
                and manage academic courses all in one place.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">

                <a href="/login"
                    class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                    Get Started →
                </a>

                <a href="/dashboard"
                    class="border border-gray-300 px-6 py-3 rounded-lg hover:bg-gray-100 transition">
                    View Dashboard
                </a>

            </div>
        </div>
    </div>


    <!-- FEATURES -->
    <div class="container mx-auto px-6 py-16">

        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Key Features</h2>
            <p class="text-gray-500">Everything you need to manage your educational institution</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <div class="border rounded-xl p-6 text-center hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-blue-100 flex items-center justify-center rounded-lg mx-auto mb-4">
                    👨‍🎓
                </div>
                <h3 class="font-semibold mb-2">Student Management</h3>
                <p class="text-sm text-gray-500">Easily add, edit, and track all student records</p>
            </div>

            <div class="border rounded-xl p-6 text-center hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-blue-100 flex items-center justify-center rounded-lg mx-auto mb-4">
                    📚
                </div>
                <h3 class="font-semibold mb-2">Course Organization</h3>
                <p class="text-sm text-gray-500">Manage courses and student enrollments</p>
            </div>

            <div class="border rounded-xl p-6 text-center hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-blue-100 flex items-center justify-center rounded-lg mx-auto mb-4">
                    📊
                </div>
                <h3 class="font-semibold mb-2">Dashboard Insights</h3>
                <p class="text-sm text-gray-500">View statistics and recent activity at a glance</p>
            </div>

            <div class="border rounded-xl p-6 text-center hover:border-blue-500 transition">
                <div class="w-12 h-12 bg-blue-100 flex items-center justify-center rounded-lg mx-auto mb-4">
                    🎓
                </div>
                <h3 class="font-semibold mb-2">Academic Tracking</h3>
                <p class="text-sm text-gray-500">Monitor enrollment dates and course progress</p>
            </div>

        </div>
    </div>


    <!-- STATS -->
    <div class="container mx-auto px-6 py-16">

        <div class="bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-2xl p-12">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

                <div>
                    <div class="text-4xl font-bold mb-2">500+</div>
                    <div class="opacity-80">Students Managed</div>
                </div>

                <div>
                    <div class="text-4xl font-bold mb-2">50+</div>
                    <div class="opacity-80">Active Courses</div>
                </div>

                <div>
                    <div class="text-4xl font-bold mb-2">99%</div>
                    <div class="opacity-80">Satisfaction Rate</div>
                </div>

            </div>

        </div>

    </div>


    <!-- BENEFITS -->
    <div class="container mx-auto px-6 py-16">

        <div class="max-w-2xl mx-auto">

            <h2 class="text-3xl font-bold text-center mb-8">
                Why Choose This System?
            </h2>

            <div class="space-y-4">

                <div class="flex items-center gap-3 p-4 border rounded-lg">
                    ✔ Simple and intuitive user interface
                </div>

                <div class="flex items-center gap-3 p-4 border rounded-lg">
                    ✔ Quick student registration and enrollment
                </div>

                <div class="flex items-center gap-3 p-4 border rounded-lg">
                    ✔ Real-time dashboard statistics
                </div>

                <div class="flex items-center gap-3 p-4 border rounded-lg">
                    ✔ Easy course management and tracking
                </div>

                <div class="flex items-center gap-3 p-4 border rounded-lg">
                    ✔ Secure data storage and management
                </div>

            </div>

        </div>

    </div>


    <!-- CTA -->
    <div class="container mx-auto px-6 py-16 text-center">

        <h2 class="text-3xl font-bold mb-4">
            Ready to Get Started?
        </h2>

        <p class="text-gray-500 mb-8 max-w-md mx-auto">
            Begin managing your students and courses efficiently today.
        </p>

        <a href="/login"
            class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
            Sign In to Continue
        </a>

    </div>


</body>

</html>
@endsection