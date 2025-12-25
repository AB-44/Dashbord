@if($teacherId)
<div class="bg-[#1f2937] p-6 rounded-xl">
    <h2 class="text-xl text-teal-400 mb-4">Edit Teacher</h2>

    <input wire:model="name" class="w-full mb-2 p-2 rounded" />
    <input wire:model="email" class="w-full mb-2 p-2 rounded" />
    <input wire:model="phone" class="w-full mb-2 p-2 rounded" />

    <button
        wire:click="updateTeacher"
        class="bg-teal-600 px-4 py-2 rounded text-white"
    >
        Update
    </button>
</div>
@endif
