<div class="bg-[#262c45] p-6 rounded-xl shadow-lg">
    <h2 class="text-xl font-semibold mb-4 text-teal-400">All Students</h2>


    <table class="min-w-full divide-y divide-gray-700">
        <thead>
            <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    id
                </th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    name
                </th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    cours

                </th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                    class
                </th>
                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                 attendance status
                </th>

                <th class="px-4 py-2 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">
                absence_reason
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-800">
            @forelse ($students as $student)
                <tr class="hover:bg-[#2a304b]">

                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $student->id }}</td>

                    </td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $student->name }}</td>
                    @endforeach
                    @foreach ($courses as $cours )
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $cours->courses->title ?? 'Not specified'}}</td>
                    @endforeach
                    @foreach ($clases as $student_class )
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $student_class->clases->class_name ?? 'Not specified' }}</td>
                    @endforeach

                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300 cusror pointer"
                    <button wire:click="$set('attendance_status', 'present'); SavePrepationStudent()">حاضر</button>
<button wire:click="$set('attendance_status', 'absent'); SavePrepationStudent()">غائب</button>
<button wire:click="$set('attendance_status', 'late'); SavePrepationStudent()">متأخر</button>
                    >

                    </td>
