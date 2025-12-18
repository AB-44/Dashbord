<div class="bg-[#262c45] p-6 rounded-xl shadow-lg">

    @if (session()->has('success'))
        <div class="bg-green-600/30 border-l-4 border-green-400 text-green-200 p-4 mb-4 rounded-lg" role="alert">
            {{ session('success') }}
        </div>
    @endif



    <form wire:submit.prevent="saveTeacher" class="space-y-6">

        <div>
            <label for="name" class="block text-sm font-medium text-gray-300 mb-1">name*</label>
            <input type="text" id="name" wire:model.defer="name"
                   class="w-full px-4 py-3 bg-[#1d2237] border border-gray-600 rounded-lg focus:ring-teal-500 focus:border-teal-500 text-white placeholder-gray-500"
                   placeholder="Enter full name">
            @error('name') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">email*:</label>
            <input type="email" id="email" wire:model.defer="email"
                   class="w-full px-4 py-3 bg-[#1d2237] border border-gray-600 rounded-lg focus:ring-teal-500 focus:border-teal-500 text-white placeholder-gray-500"
                   placeholder="Enter your email">
            @error('email') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium text-gray-300 mb-1">phone*:</label>
            <input type="text" id="phone" wire:model.defer="phone"
                   class="w-full px-4 py-3 bg-[#1d2237] border border-gray-600 rounded-lg focus:ring-teal-500 focus:border-teal-500 text-white placeholder-gray-500"
                   placeholder="0500295965">
            @error('phone') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
        </div>
               <div>


     <div>
        <label for="corse_id" class="block text-sm font-medium text-gray-300 mb-1">Responsible course*:</label>
        <select id="corse_id" wire:model.defer="corse_id"
                class="w-full px-4 py-3 bg-[#1d2237] border border-gray-600 rounded-lg focus:ring-teal-500 focus:border-teal-500 text-white placeholder-gray-500">

            <option value="" disabled selected>-- Select the course --</option>

            @foreach ($courses as $cours)
                <option value="{{ $cours->id }}">{{ $cours->title }}</option>
            @endforeach

        </select>
        @error('coure_id') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
    </div>

        <div>
            <label for="img" class="block text-sm font-medium text-gray-300 mb-1">choose photo*</label>
            <input type="file" id="img" wire:model="img" accept="image/*"
                   class="w-full text-white text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-teal-500 file:text-white hover:file:bg-teal-600 cursor-pointer">
            @error('img') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror

            @if ($img)
                <div class="mt-3">
                    <p class="text-xs text-gray-400 mb-1">prosess img:</p>
                    <img src="{{ $img->temporaryUrl() }}" class="h-24 w-24 object-cover rounded-lg border border-gray-600">
                </div>
            @endif
        </div>

        <div class="pt-4 flex justify-end gap-3 border-t border-gray-700">
            <button type="button" wire:click="$dispatch('show-dashboard')" class="px-4 py-2 text-sm font-medium text-white bg-gray-600 rounded-lg hover:bg-gray-700 transition">
                Cancel
            </button>
            <button type="submit"
                    wire:loading.attr="disabled"
                    class="px-4 py-2 text-sm font-medium text-white bg-teal-500 rounded-lg hover:bg-teal-600 transition disabled:bg-teal-700 disabled:cursor-not-allowed">
                <span wire:loading.remove wire:target="saveTeacher">Add Teacher</span>
                <span wire:loading wire:target="saveTeacher">Saving...</span>
            </button>
        </div>
    </form>
</div>
