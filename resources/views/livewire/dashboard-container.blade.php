<div>
    @if ($currentView === 'dashboard')
        <h1 class="text-3xl font-semibold mb-1">Dashboard</h1>
        <div class="grid grid-cols-3 gap-6 mb-8">
            @include('livewire.partials.dashboard-cards')
        </div>

    @elseif ($currentView === 'list-teachers')
        <h1 class="text-3xl font-semibold mb-1">Teachers List</h1>
        <div class="bg-[#262c45] p-6 rounded-xl shadow-lg mt-8">
            <livewire:list-teachers />
        </div>

    @elseif ($currentView === 'add-teacher-form')
        <h1 class="text-3xl font-semibold mb-1 text-teal-400">Add a new teacher</h1>
        <div class="bg-[#262c45] p-6 rounded-xl shadow-lg mt-8">
            <livewire:add-teacher-form />
        </div>

    @elseif ($currentView === 'section-courses')
        <h1 class="text-3xl font-semibold mb-1 text-teal-400">Add a new Cours</h1>
        <div class="bg-[#262c45] p-6 rounded-xl shadow-lg mt-8">
            <livewire:section-courses />
        </div>

    @elseif ($currentView === 'add-student')
        <h1 class="text-3xl font-semibold mb-1 text-teal-400">Add a new Student</h1>
        <div class="bg-[#262c45] p-6 rounded-xl shadow-lg mt-8">
            <livewire:add-student />
        </div>
            @elseif ($currentView === 'institute.prepation-students')
        <h1 class="text-3xl font-semibold mb-1 text-teal-400">prepation Student</h1>
        <div class="bg-[#262c45] p-6 rounded-xl shadow-lg mt-8">
            <livewire:institute.prepation-students />
        </div>


    @endif
</div>
