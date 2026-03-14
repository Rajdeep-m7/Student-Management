@extends('app')
@section('content')

<div class="p-4 sm:p-6 min-h-screen">

  <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 mb-6">

    <h2 class="text-xl sm:text-2xl font-semibold">
      Courses
    </h2>

    <a href="/add-course"
       class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 font-semibold w-full sm:w-auto text-center">
       + Add Course
    </a>

  </div>

  <div class="bg-white shadow-md rounded-lg overflow-x-auto">

    <table class="min-w-full text-center text-sm sm:text-base">

      <thead class="bg-gray-200">
        <tr>
          <th class="p-3 whitespace-nowrap">Code</th>
          <th class="p-3 whitespace-nowrap">Name</th>
          <th class="p-3 whitespace-nowrap">Description</th>
          <th class="p-3 whitespace-nowrap">Students</th>
          <th class="p-3 whitespace-nowrap">Actions</th>
        </tr>
      </thead>

      <tbody>

        <tr class="border-b hover:bg-gray-50">
          <td class="p-3 whitespace-nowrap">101</td>
          <td class="p-3 whitespace-nowrap">BCA</td>
          <td class="p-3 whitespace-nowrap">Computer Application</td>
          <td class="p-3 whitespace-nowrap">5</td>

          <td class="p-3 flex justify-center gap-2">

            <button class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">
              Edit
            </button>

            <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
              Delete
            </button>

          </td>
        </tr>

      </tbody>

    </table>

  </div>

</div>

@endsection