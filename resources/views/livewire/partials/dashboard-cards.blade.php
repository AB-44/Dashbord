

<div class="bg-[#262c45] p-6 rounded-xl">
    <p class="text-gray-400 text-sm mb-2">TOTAL TEACHERS</p>
    <h2 class="text-3xl font-bold mb-6">{{  \App\Models\teacher::count()  }}</h2>

    <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-teal-600/30 rounded-full flex items-center justify-center">
            <i class="fa-solid fa-chalkboard-user"></i>
        </div>
        <span class="text-green-400">↑ 5% Increased</span>
    </div>
</div>

<div class="bg-[#262c45] p-6 rounded-xl">
    <p class="text-gray-400 text-sm mb-2">TOTAL STUDENTS</p>
    <h2 class="text-3xl font-bold mb-6">{{  \App\Models\student::count()  }}</h2>

    <div class="flex items-center gap-4">
        <div class="w-12 h-12 bg-orange-600/30 rounded-full flex items-center justify-center">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <span class="text-green-400">↑ 15% Joined</span>
    </div>
</div>

<div class="bg-[#262c45] p-6 rounded-xl">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-lg">Schedule</h2>
        <button class="bg-teal-500 px-3 py-1 rounded-lg text-sm">+ Create New</button>
    </div>

    <div class="flex justify-between items-center mb-3">
        <button>◀</button>
        <select class="bg-[#1c2135] px-3 py-1 rounded-lg">
            <option>December</option>
        </select>
        <select class="bg-[#1c2135] px-3 py-1 rounded-lg">
            <option>2025</option>
        </select>
        <button>▶</button>
    </div>

    <div class="grid grid-cols-7 gap-2 text-center">
        <span>Sun</span>
        <span>Mon</span>
        <span>Tue</span>
        <span>Wed</span>
        <span>Thu</span>
        <span>Fri</span>
        <span>Sat</span>

        <span class="opacity-40">30</span>
        <span class="bg-teal-500 w-8 h-8 flex items-center justify-center rounded-full mx-auto">7</span>
        <span>2</span><span>3</span><span>4</span><span>5</span><span>6</span>
    </div>
</div>

