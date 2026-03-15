@extends('app')
@section('content')

<div class="p-6 flex justify-center">

    <div class="bg-white shadow-md rounded-lg w-full max-w-xl p-6">

        <h2 class="text-2xl font-semibold mb-6">Edit Student</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1 font-medium">Student Name</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $student->name) }}"
                    class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Email</label>
                <input
                    type="email"
                    name="email"
                    value="{{ old('email', $student->email) }}"
                    class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="mb-4">
                <label class="block mb-2 font-medium text-gray-700">Course</label>

                <select name="course_id"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">

                    <option value="">Select Course</option>

                    @foreach($courses as $course)

                    <option
                        value="{{ $course->id }}"
                        {{ $student->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>

                    @endforeach

                </select>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Enrollment Date</label>
                <input
                    type="date"
                    name="enrollment_date"
                    value="{{ old('enrollment_date', $student->enrollment_date) }}"
                    class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-blue-400">
            </div>

            <div class="flex justify-end space-x-2">

                <a href="/student"
                    class="bg-gray-400 text-white px-4 py-2 rounded">
                    Cancel
                </a>

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Update Student
                </button>

            </div>

        </form>

    </div>

</div>

@endsection