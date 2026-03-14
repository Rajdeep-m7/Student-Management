@extends('app')
@section('content')

 <!-- Page Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4">

            <h2 class="text-2xl font-semibold text-gray-800">
                Dashboard
            </h2>

        </div>
    </header>

    <!-- Page Content -->
    <main class="max-w-7xl mx-auto py-6 px-4">

        <div class="grid grid-cols-3 gap-6">

            <!-- Card -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-gray-500 text-sm">Total Students</h3>
                <p class="text-3xl font-bold mt-2">120</p>
            </div>

            <!-- Card -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-gray-500 text-sm">Total Courses</h3>
                <p class="text-3xl font-bold mt-2">10</p>
            </div>

            <!-- Card -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-gray-500 text-sm">Latest Students</h3>
                <p class="text-sm mt-2">John, David, Alex</p>
            </div>

        </div>

    </main>

@endsection