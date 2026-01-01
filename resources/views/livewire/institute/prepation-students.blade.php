<!-- resources/views/livewire/institute/prepation-students.blade.php -->
<div class="bg-[#262c45] p-6 rounded-xl shadow-lg">
    @if(isset($course))
        <h2 class="text-xl font-semibold mb-4 text-teal-400">
            Students in: {{ $course->title ?? 'Course' }}
        </h2>
    @else
        <h2 class="text-xl font-semibold mb-4 text-teal-400">All Students</h2>
    @endif
    <!-- اختيار الكورس -->
<div class="mb-6">
    <label class="block text-sm font-medium text-gray-300 mb-2">Choose the course :</label>
    <select
        wire:model.live="cours_id"
        class="w-full md:w-1/3 px-4 py-2 bg-[#1d2237] border border-gray-700 rounded-lg text-white focus:ring-teal-500 focus:border-teal-500"
    >
        <option value="">-- Choose the course--</option>
        @foreach($allCourses as $course)
            <option value="{{ $course->id }}">{{ $course->title }}</option>
        @endforeach
    </select>
</div>

    <table class="min-w-full divide-y divide-gray-700">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase">ID</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase">Img</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase">Name</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase">Cours</th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase">Attendance</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-800">
            @forelse($students as $student)
                <tr>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $student->id }}</td>
                    <td class="px-4 py-4 whitespace-nowrap">
                        @if ($student->img)
                            <img src="{{ asset('storage/' . $student->img) }}" class="h-10 w-10 rounded-full object-cover" alt="{{ $student->name }}">
                        @else
                            <div class="h-10 w-10 rounded-full bg-gray-600 flex items-center justify-center text-sm">N/A</div>
                        @endif
                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $student->name }}</td>
                    <td class="px-4 py-4">
                        {{ $course->title ?? '—' }}
                    </td>
                    <td class="px-4 py-4">
                        <div class="flex gap-2">
                            <button
                                wire:click="saveAttendance({{ $student->id }}, 'present')"
                                class="bg-green-600 hover:bg-green-700 transition px-3 py-1 rounded-lg text-white text-sm">
                                present
                            </button>
                            <button
                                wire:click="saveAttendance({{ $student->id }}, 'absent')"
                                class="bg-red-600 hover:bg-red-700 transition px-3 py-1 rounded-lg text-white text-sm">
                                absent
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-400">
                      There are no students registered for this course
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
