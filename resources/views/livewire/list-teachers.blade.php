<div class="bg-[#262c45] p-6 rounded-xl shadow-lg">
    <h2 class="text-xl font-semibold mb-4 text-teal-400">All Teachers</h2>


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
                edite
                </th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-800">
            @forelse ($teachers as $teacher)
                <tr class="hover:bg-[#2a304b]">

                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">{{ $teacher->id }}</td>
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
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $teacher->address }}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-300">{{ $teacher->courses->title ?? 'Not specified'}}</td>
                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
<td class="px-4 py-4 whitespace-nowrap text-sm font-medium  relative overflow-visible">

    <!-- زر الثلاث نقاط -->
    <button
        class="p-2 hover:bg-gray-700 rounded-full text-white focus:outline-none focus:ring-0 menu-btn"
        data-id="{{ $teacher->id }}"
        type="button"
    >
        ⋮
    </button>

    <!-- القائمة -->
    <div
        class="hidden absolute right-0 mt-2 w-32 bg-[#1f2937] rounded-lg shadow-lg z-50 menu-box"
        data-id="{{ $teacher->id }}"
    >
<a
    class="p-2 text-sm hover:text-teal-400 cursor-pointer"
    onclick="Livewire.dispatch('show-edit-teacher-form', { id: {{ $teacher->id }} })"
>
    Edit
</a>


<div
    class="px-4 py-2 hover:bg-gray-600 text-red-400 cursor-pointer"
    wire:click="deleteTeacher({{ $teacher->id }})"
    wire:confirm="هل أنت متأكد من حذف هذا المعلم؟"
>
    Delete
</div>
    </div>

</td>


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
{{-- فتح و اغلاق قوائم الحذف و التعديل --}}
{{-- <script>
document.addEventListener('click', function (e) {

    // فتح / إغلاق القائمة
    if (e.target.classList.contains('menu-btn')) {
        e.stopPropagation();

        const id = e.target.dataset.id;

        // اغلق كل القوائم
        document.querySelectorAll('.menu-box').forEach(menu => {
            if (menu.dataset.id !== id) {
                menu.classList.add('hidden');
            }
        });

        // افتح / اقفل القائمة الحالية
        const currentMenu = document.querySelector('.menu-box[data-id="' + id + '"]');
        currentMenu.classList.toggle('hidden');
        return;
    }

    // زر الحذف
    if (e.target.classList.contains('delete-btn')) {
        e.stopPropagation();

        const id = e.target.dataset.id;

        if (confirm('هل أنت متأكد من حذف المعلم؟')) {
            Livewire.dispatch('deleteTeacher', { id: id });
        }

        // اغلق القائمة بعد الحذف
        document.querySelectorAll('.menu-box').forEach(menu => {
            menu.classList.add('hidden');
        });
        return;
    }

    // اغلاق القوائم عند الضغط خارجها
    document.querySelectorAll('.menu-box').forEach(menu => {
        menu.classList.add('hidden');
    });
});
</script> --}}
