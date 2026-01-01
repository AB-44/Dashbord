<div class="bg-[#262c45] p-6 rounded-xl shadow-lg">
    <h2 class="text-xl font-semibold mb-4 text-teal-400">All students</h2>


    <table class="min-w-full divide-y divide-gray-700">
        <thead>
            <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    id
                </th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    img
                </th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    name
                </th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    email
                </th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                 phone
                </th>

                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                address
                </th>

                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                course
                </th>


                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                edit
                </th>

            </tr>
        </thead>
        <tbody class="divide-y divide-gray-800">
            @forelse ($students as $student)
                <tr class="hover:bg-[#2a304b]">

                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $student->id }}</td>
                          <td class="px-4 py-4 whitespace-nowrap">
                        @if ($student->img)
                            <img src="{{ asset('storage/' . $student->img) }}" class="h-10 w-10 rounded-full object-cover" alt="{{ $student->name }}">
                        @else
                            <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center text-sm">N/A</div>
                        @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $student->name }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $student->email }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $student->phone }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $student->address }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $student->course_students->cours_id ?? 'Not specified'}}</td>
<td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
  <div class="flex gap-2">
    <div
      class="px-4 py-2 hover:bg-gray-600 cursor-pointer"
      wire:click="editstudent({{ $student->id }})"
    >
      <i class="fa-solid fa-pen-to-square"></i>
    </div>

    <div
      class="px-4 py-2 hover:bg-gray-600 text-red-400 cursor-pointer"
      wire:click="deleteStudent({{ $student->id }})"
      wire:confirm="Are you sure you want to delete this parameter?"
    >
      <i class="fa-regular fa-trash-can"></i>
    </div>
  </div>
</td>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">Non students</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>
