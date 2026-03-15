@extends('app')
@section('content')



<main class="max-w-7xl mx-auto py-6 px-4 min-h-screen">
    <h1 class="text-2xl font-semibold mb-5">Dashboard</h1>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500 font-semibold">Total Students</h3>
            <p class="text-3xl font-bold mt-2">
                {{ $totalStudents }}
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500 font-semibold">Total Courses</h3>
            <p class="text-3xl font-bold mt-2">
                {{ $totalCourses }}
            </p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow">
            <h3 class="text-gray-500 font-semibold">Latest Students</h3>

            <ul class="text-sm mt-2">
                @foreach($latestStudents as $student)
                    <li>{{ $student->name }}</li>
                @endforeach
            </ul>
        </div>

    </div>


    <div class="bg-white shadow rounded-lg overflow-x-auto">

        <h3 class="text-lg font-semibold p-4 border-b">
            Latest Students
        </h3>

        <table class="min-w-full text-center">

            <thead class="bg-gray-200">

                <tr>
                    <th class="p-3">ID</th>
                    <th class="p-3">Name</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Course</th>
                    <th class="p-3">Enrollment Date</th>
                </tr>

            </thead>

            <tbody>

                @foreach($latestStudents as $student)

                <tr class="border-b hover:bg-gray-50">

                    <td class="p-3">{{ $student->id }}</td>

                    <td class="p-3">{{ $student->name }}</td>

                    <td class="p-3">{{ $student->email }}</td>

                    <td class="p-3">
                        {{ $student->course->name ?? 'N/A' }}
                    </td>

                    <td class="p-3">
                        {{ $student->enrollment_date }}
                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</main>

@endsection