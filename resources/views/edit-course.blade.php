@extends('app')

@section('content')

<div class="min-h-screen bg-gray-50 py-8">

    <div class="max-w-xl mx-auto bg-white shadow-lg rounded-lg p-6">

        <h2 class="text-2xl font-semibold mb-6 text-gray-700">
            Edit Course
        </h2>

        <form action="{{ route('courses.update',$course->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-gray-600 mb-2 font-medium">
                    Course Code
                </label>

                <input
                    type="text"
                    name="code"
                    value="{{ old('code',$course->code) }}"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required
                >
            </div>

            <div class="mb-4">
                <label class="block text-gray-600 mb-2 font-medium">
                    Course Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name',$course->name) }}"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                    required
                >
            </div>

            <div class="mb-6">
                <label class="block text-gray-600 mb-2 font-medium">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="4"
                    class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
                >{{ old('description',$course->description) }}</textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between">

                <a href="/course"
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                   Cancel
                </a>

                <button
                    type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Update Course
                </button>

            </div>

        </form>

    </div>

</div>

@endsection