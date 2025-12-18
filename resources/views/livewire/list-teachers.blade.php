<div class="bg-[#262c45] p-6 rounded-xl shadow-lg">
    <h2 class="text-xl font-semibold mb-4 text-teal-400">All Teachers</h2>

    <table class="min-w-full divide-y divide-gray-700">
        <thead>
            <tr>
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
                course
                </th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                edite
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-800">
            @forelse ($teachers as $teacher)
                <tr class="hover:bg-[#2a304b]">
                    <td class="px-4 py-4 whitespace-nowrap">
                        @if ($teacher->img)
                            <img src="{{ asset('storage/' . $teacher->img) }}" class="h-10 w-10 rounded-full object-cover" alt="{{ $teacher->name }}">
                        @else
                            <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center text-sm">N/A</div>
                        @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $teacher->name }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $teacher->email }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $teacher->phone }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $teacher->courses->title ?? 'Not specified'}}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
                       <div class="relative">
    <button class="peer p-2 hover:bg-gray-700 rounded-full text-white">
        ⋮
    </button>

    <div
        class="absolute right-0 mt-2 w-32 bg-[#1f2937] rounded-lg shadow-lg
               opacity-0 scale-95 peer-focus:opacity-100 peer-focus:scale-100
               transition pointer-events-none peer-focus:pointer-events-auto"
    >
        <div class="px-4 py-2 hover:bg-gray-600 text-white cursor-pointer">
            Edit
        </div>
        <div class="px-4 py-2 hover:bg-gray-600 text-red-400 cursor-pointer">
            Delete
        </div>
    </div>
</div>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-4 text-center text-gray-500">Non teachers</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
