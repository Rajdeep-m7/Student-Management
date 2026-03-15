@extends('app')
@section('content')

<div class="p-4 sm:p-6 min-h-screen">

  <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 mb-6">

    <h2 class="text-xl sm:text-2xl font-semibold">
      Student Dashboard
    </h2>

    <a href="/add-student"
      class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 font-semibold w-full sm:w-auto text-center">
      + Add Student
    </a>

  </div>

  <div class="bg-white shadow-md rounded-lg overflow-x-auto max-w-6xl mx-auto mt-10">

    <table class="min-w-full text-left text-sm sm:text-base ">

      <thead class="bg-gray-200">
        <tr>
          <th class="p-3 whitespace-nowrap">ID</th>
          <th class="p-3 whitespace-nowrap">Name</th>
          <th class="p-3 whitespace-nowrap">Email</th>
          <th class="p-3 whitespace-nowrap">Course</th>
          <th class="p-3 whitespace-nowrap">Enrollment Date</th>
          <th class="p-3 whitespace-nowrap">Actions</th>
        </tr>
      </thead>

      <tbody>
        @foreach($students as $student)

        <tr class="border-b hover:bg-gray-50">
          <td class="p-3 whitespace-nowrap">{{ $student->id }}</td>
          <td class="p-3 whitespace-nowrap">{{ $student->name }}</td>
          <td class="p-3 whitespace-nowrap break-all">{{ $student->email }}</td>
          <td class="p-3 whitespace-nowrap">{{ $student->course->name ?? 'No Course' }}</td>
          <td class="p-3 whitespace-nowrap">{{ $student->enrollment_date }}</td>

          <td class="p-3 flex items-center gap-2">

            <!-- Edit Button -->
            <a href="{{ route('students.edit', $student->id) }}"
              class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 text-sm">
              Edit
            </a>

            <!-- Delete Button -->
            <form action="{{ route('students.destroy', $student->id) }}"
              method="POST"
              onsubmit="return confirm('Are you sure you want to delete this student?')">

              @csrf
              @method('DELETE')

              <button type="submit"
                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
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

@endsection