<div>
    {{-- 1. الشرط الأساسي: عرض لوحة القيادة عندما تكون الحالة 'dashboard' --}}
    @if ($currentView === 'dashboard')
    

        <h1 class="text-3xl font-semibold mb-1">Dashboard</h1>
        <p class="text-gray-400 mb-8">Teacher</p>


        <div class="grid grid-cols-3 gap-6 mb-8">
            @include('livewire.partials.dashboard-cards')
        </div>

        <livewire:list-teachers />

    {{-- 2. الشرط البديل: عرض نموذج الإضافة عندما تكون الحالة 'add-teacher-form' --}}
    @elseif ($currentView === 'add-teacher-form')

        <h1 class="text-3xl font-semibold mb-1 text-teal-400">Add a new teacher</h1>

        <div class="bg-[#262c45] p-6 rounded-xl shadow-lg mt-8">
            <livewire:add-teacher-form />


        </div>

    @endif
</div>
