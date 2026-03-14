@extends('app')
@section('content')

<div class="min-h-lvh">
    <div class="p-4 sm:p-6 flex justify-center">

        <div class="bg-white shadow-md rounded-lg w-full max-w-2xl p-6">

            <h2 class="text-xl sm:text-2xl font-semibold mb-6">
                Add Course
            </h2>

            <form action="/courses/store" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Course Code</label>
                    <input
                        type="text"
                        name="code"
                        placeholder="Enter course code"
                        class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Course Name</label>
                    <input
                        type="text"
                        name="name"
                        placeholder="Enter course name"
                        class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Description</label>
                    <textarea
                        name="description"
                        rows="3"
                        placeholder="Enter course description"
                        class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <div class="flex flex-col sm:flex-row gap-3 sm:justify-end">

                    <a href="/courses"
                        class="bg-gray-400 text-white px-4 py-2 rounded text-center hover:bg-gray-500">
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Save Course
                    </button>

                </div>

            </form>

        </div>

    </div>
</div>

@endsection