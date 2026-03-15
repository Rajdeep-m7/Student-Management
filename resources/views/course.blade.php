@extends('app')

@section('content')

<div class="p-6 min-h-screen bg-gray-50">

  <div class="max-w-6xl mx-auto">

    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold text-gray-700">
        Course Management
      </h2>

      <a href="/add-course"
        class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
        + Add Course
      </a>
    </div>

    <div class="bg-white shadow-lg rounded-xl overflow-hidden">

      <table class="w-full text-sm text-left">

        <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
          <tr>
            <th class="px-6 py-4">Code</th>
            <th class="px-6 py-4">Name</th>
            <th class="px-6 py-4">Description</th>
            <th class="px-6 py-4">Students</th>
            <th class="px-6 py-4 text-center">Actions</th>
          </tr>
        </thead>

        <tbody class="divide-y">

          @foreach($courses as $course)

          <tr class="hover:bg-gray-50 transition">

            <td class="px-6 py-4 font-medium">
              {{ $course->code }}
            </td>

            <td class="px-6 py-4">
              {{ $course->name }}
            </td>

            <td class="px-6 py-4 text-gray-500">
              {{ $course->description }}
            </td>

            <td class="px-6 py-4 font-semibold text-indigo-600">
              {{ $course->students_count }}
            </td>

            <td class="px-6 py-4 flex justify-center gap-3">

              <a href="{{ route('courses.edit', $course->id) }}"
                class="bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600 transition text-sm">
                Edit
              </a>

              <form action="{{ route('courses.destroy',$course->id) }}"
                method="POST"
                onsubmit="return confirm('Are you sure you want to delete this course?')">

                @csrf
                @method('DELETE')

                <button
                  class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600 transition text-sm">
                  Delete
                </button>

              </form>

            </td>

          </tr>

          @endforeach

        </tbody>

      </table>

    </div>

  </div>

</div>

@endsection