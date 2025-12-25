<div class="bg-[#262c45] p-6 rounded-xl shadow-lg">
    @if (session()->has('success'))
        <div class="bg-green-600/30 border-l-4 border-green-400 text-green-200 p-4 mb-4 rounded-lg" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="SaveCours" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4">

            <div>
                <label for="title" class="block text-sm font-medium text-gray-300 mb-1">Title <span class="text-red-500">*</span></label>
                <input type="text" id="title" wire:model.defer="title"
                       class="w-full px-4 py-2 bg-[#1d2237] border border-gray-700 rounded-lg focus:ring-teal-500 focus:border-teal-500 text-white placeholder-gray-500 text-sm"
                       placeholder="Enter Full Title">
                @error('title') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="details" class="block text-sm font-medium text-gray-300 mb-1">Details<span class="text-red-500">*</span></label>
                <input type="details" id="details" wire:model.defer="details"
                       class="w-full px-4 py-2 bg-[#1d2237] border border-gray-700 rounded-lg focus:ring-teal-500 focus:border-teal-500 text-white placeholder-gray-500 text-sm"
                       placeholder="Enter details">
                @error('details') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="Date" class="block text-sm font-medium text-gray-300 mb-1">Date</label>
                <input type="date" id="Date" wire:model.defer="Date"
                       class="w-full px-4 py-2 bg-[#1d2237] border border-gray-700 rounded-lg focus:ring-teal-500 focus:border-teal-500 text-white placeholder-gray-500 text-sm"
                       placeholder="0599178518">
                @error('Date') <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

        <div>
    <label class="block text-sm font-medium text-gray-300 mb-1">About cours</label>
    <input type="text"
           wire:model="about_cours"
           class="w-full px-4 py-2 bg-[#1d2237] border border-gray-700 rounded-lg focus:ring-teal-500 focus:border-teal-500 text-white placeholder-gray-500 text-sm"
           placeholder="Enter about cours">
    @error('about_cours') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
</div>

        <div>
            <label class="block text-sm font-medium text-gray-300 mb-1">Cours Picture</label>
               <div>
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

        <div class="pt-6 flex justify-end gap-3">
            <button type="button" wire:click="$dispatch('show-dashboard')" class="px-6 py-2 text-sm font-medium text-gray-900 bg-white rounded-lg hover:bg-gray-100 transition">
                Cancel
            </button>
            <button type="submit"
                    wire:loading.attr="disabled"
                    class="px-6 py-2 text-sm font-medium text-white bg-[#00a99d] rounded-lg hover:bg-[#008f84] transition disabled:opacity-50">
                <span wire:loading.remove wire:target="SaveCours">Add Cours</span>
                <span wire:loading wire:target="SaveCours">Saving...</span>
            </button>
        </div>
    </form>
</div>
