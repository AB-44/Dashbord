<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ url('css/Tob_public.css') }}">

    <style>
        body { background-color: #1d2237; }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJ8g359ssQvM0jQ53H55y/dZ8h+B/j3YJ5E8Y1+D/S9H5Y9g+" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
</head>
<body class="text-white">


<!-- MAIN LAYOUT -->
<div class="flex h-screen">

    <!-- SIDE BAR -->
    <aside class="w-64 bg-[#20263f] border-r border-gray-700 p-5 flex flex-col">

        <!-- Logo -->
        <div class="flex items-center gap-2 mb-10">
          <img
  src="{{ url('storage/img/F1.png') }}"
  class="w-20 rounded-full"
  alt="Avatar" />


            <a class="text-2xl font-semibold cursor-pointer" onclick="Livewire.dispatch('show-dashboard')">وقف الخيرات</a>
        </div>


        <!-- Menu -->
        <nav class="flex-1 space-y-1">


            <a class="flex items-center gap-3 p-3 bg-[#2a304b] rounded-xl cursor-pointer">
                <i class="ri-bar-chart-line"></i>Dashboard
            </a>

       <!-- TEACHERS DROPDOWN -->
<div class="w-full">
    <button
        class="dropdown-btn w-full flex items-center justify-between p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer"
    >
        <div class="flex items-center gap-3">
            <i class="ri-presentation-line"></i>
            <span>Teachers</span>
        </div>
        <i class="ri-arrow-left-s-line dropdown-arrow"></i>
    </button>

    <div
        class="dropdown-menu max-h-0 overflow-hidden transition-all duration-300 ml-10 flex flex-col"
    >
<a
    class="p-2 text-sm hover:text-teal-400 cursor-pointer"
    onclick="Livewire.dispatch('show-add-teacher-form')"
>
   Add Teacher
</a>

<a class="p-2 text-sm hover:text-teal-400 cursor-pointer"
onclick="Livewire.dispatch('show-all-teachers')"
>
         All Teachers
        </a>
        <a class="p-2 text-sm hover:text-teal-400 cursor-pointer">
         Info Teacher
        </a>
    </div>

</div>

<div class="w-full">
    <button
        class="dropdown-btn w-full flex items-center justify-between p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer"
    >
        <div class="flex items-center gap-3">
           <i class="ri-graduation-cap-line"></i>
            <span>Students</span>
        </div>
        <i class="ri-arrow-left-s-line dropdown-arrow"></i>
    </button>

    <div
        class="dropdown-menu max-h-0 overflow-hidden transition-all duration-300 ml-10 flex flex-col"
    >
     <a
    class="p-2 text-sm hover:text-teal-400 cursor-pointer"
    onclick="Livewire.dispatch('show-add-student')"
>
    Add Student
</a>
        <a class="p-2 text-sm hover:text-teal-400 cursor-pointer"
        onclick="Livewire.dispatch('show-all-students')"
        >
           All Students
        </a>
          <a class="p-2 text-sm hover:text-teal-400 cursor-pointer">
         Info Student
        </a>

    </div>

</div>

            {{-- student-end --}}

            {{-- Courses-start --}}
            <div class="w-full">
    <button
        class="dropdown-btn w-full flex items-center justify-between p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer"
    >
        <div class="flex items-center gap-3">
            <i class="ri-book-open-line"></i>
            <span>Courses</span>
        </div>
        <i class="ri-arrow-left-s-line dropdown-arrow"></i>
    </button>

    <div
        class="dropdown-menu max-h-0 overflow-hidden transition-all duration-300 ml-10 flex flex-col"
    >
        <a class="p-2 text-sm hover:text-teal-400 cursor-pointer"
        onclick="Livewire.dispatch('show-add-cours')"
        >
           Add Course
        </a>
        <a class="p-2 text-sm hover:text-teal-400 cursor-pointer">
       All Courses
        </a>
           <a class="p-2 text-sm hover:text-teal-400 cursor-pointer"

           >
         Info Cours
        </a>

    </div>

</div>


            <p class="text-gray-400 mt-6 mb-2 text-sm">APPS & PAGES</p>

            <a class="flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer">
                <i class="ri-chat-1-line"></i> Chat
            </a>

            <a class="flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer">
                <i class="ri-calendar-event-line"></i> Calendar
            </a>

            <a class="flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer">
                <i class="ri-mail-line"></i> Email
            </a>

            {{-- section 2 --}}
            <p class="text-gray-400 mt-6 mb-2 text-sm">Events and processes</p>

        {{-- Preparation --}}

        <div class="w-full">
    <button
        class="dropdown-btn w-full flex items-center justify-between p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer"
    >
        <div class="flex items-center gap-3">
            <i class="fa-solid fa-chalkboard-user"></i>
            <span>Preparation</span>
        </div>
        <i class="ri-arrow-left-s-line dropdown-arrow"></i>
    </button>

    <div
        class="dropdown-menu max-h-0 overflow-hidden transition-all duration-300 ml-10 flex flex-col"
    >
        <a class="p-2 text-sm hover:text-teal-400 cursor-pointer">
        <i class="ri-presentation-line"></i>
           Teachers
        </a>
        <a class="p-2 text-sm hover:text-teal-400 cursor-pointer"
        onclick="Livewire.dispatch('show-prepation-student')"
        >
        <i class="ri-graduation-cap-line"></i>

       Students
        </a>
    </div>

</div>
{{-- end Preparation --}}

            {{-- exams --}}
           <div class="w-full">
    <button
        class="dropdown-btn w-full flex items-center justify-between p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer"
    >
        <div class="flex items-center gap-3">
            <i class="fa-regular fa-pen-to-square"></i>
            <span>Exams</span>
        </div>
        <i class="ri-arrow-left-s-line dropdown-arrow"></i>
    </button>

    <div
        class="dropdown-menu max-h-0 overflow-hidden transition-all duration-300 ml-10 flex flex-col"
    >
        <a class="p-2 text-sm hover:text-teal-400 cursor-pointer">
           Add exam
        </a>
        <a class="p-2 text-sm hover:text-teal-400 cursor-pointer">
       All exams
        </a>
           <a class="p-2 text-sm hover:text-teal-400 cursor-pointer">
         new exam
        </a>

    </div>

</div>
{{-- end exams --}}

      <a class="flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer">
                <i class="ri-verified-badge-line"></i> Results
            </a>

        </nav>
        {{-- section 3 --}}
        <p class="text-gray-400 mt-6 mb-2 text-sm">Other</p>
        {{-- Other --}}
                <a class="p-2 text-sm hover:text-teal-400 cursor-pointer">
           <a class="flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer">
                <i class="fa-regular fa-user"></i> Profile
            </a>

            <a class="flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer">
                <i class="fa-solid fa-gear"></i> Settings
            </a>

            <a class="flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer">
                <i class="fa-solid fa-right-from-bracket"></i> Logout
            </a>

        <!-- Help -->
        <button class="mt-5 bg-[#2a304b] p-3 rounded-xl flex items-center justify-center">
            Help & Support
        </button>

    </aside>


<main class="flex-1 p-6 space-y-6">

    <!-- TOP BAR -->
    <div class="flex items-center justify-between">

        <!-- Search -->
<div class="input-wrapper">
  <button class="icon">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="25px" width="25px">
      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#fff" d="M11.5 21C16.7467 21 21 16.7467 21 11.5C21 6.25329 16.7467 2 11.5 2C6.25329 2 2 6.25329 2 11.5C2 16.7467 6.25329 21 11.5 21Z"></path>
      <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#fff" d="M22 22L20 20"></path>
    </svg>
  </button>
  <input placeholder="search.." class="input" name="text" type="text">
</div>

        <!-- Right Side -->
        <div class="flex items-center gap-6">

            <!-- Light / Dark Toggle -->
       <label class="switch">
    <input type="checkbox">
    <span class="slider"></span>
</label>

            <!-- Icons -->
            <div class="flex items-center gap-1 text-xl text-gray-300 ">

                {{-- message --}}
                <a class="nav-item flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer text-x3">
                <i class="ri-mail-line"></i>
                <span class="nav-item-text">message</span>

            </a>


                {{-- Alerts --}}
         <a class="nav-item flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer text-x3">
                <i class="fa-regular fa-bell"></i>
                <span class="nav-item-text">Alerts</span>

            </a>

    {{-- end Alerts --}}

        {{-- Calendar --}}
<a class="nav-item flex items-center gap-3 p-3 hover:bg-[#2a304b] rounded-xl cursor-pointer">
    <i class="ri-calendar-event-line"></i>
    <span class="nav-item-text">Calendar</span>
</a>
            </div>

            <!-- User Avatar -->
        <div class="avatar-container">
  <div class="avatar">
    <img src="{{ url('storage/img/Me_edate_black.jpg') }}" alt="User Avatar">
  </div>

  <div class="dropdown-menu2" id="dropdownMenu2">
    <div class="dropdown-item">
<i class="fa-regular fa-user"></i>Your Profile
    </div>
    <div class="dropdown-item">
<i class="fa-solid fa-gear"></i>Settings
    </div>

  </div>
</div>
{{-- end user avater --}}
        </div>
    </div>

    <!-- LIVEWIRE CONTENT -->
    <livewire:dashboard-container />

</main>


    </div>
</div>
<script src="{{ url('JS/main.js') }}"></script>
<script src="https://kit.fontawesome.com/6b7beae2cf.js" crossorigin="anonymous"></script>

@livewireScripts
</body>
</html>

{{-- Tailwind --}}











{{-- css/js --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ url('css/dashy.css') }}">
</head>
<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="logo">
            <div class="icon">🎓</div>
            <h1>Edura</h1>
        </div>

        <ul class="menu">

            <li><a href="#">📊 Dashboard</a></li>

            <!-- TEACHERS DROPDOWN -->
            <li class="dropdown">
                <button class="dropdown-btn">👨‍🏫 Teachers ▼</button>

                <ul class="dropdown-menu">
                    <li><a href="#">➕ Add Teacher</a></li>
                    <li><a href="#">📋 All Teachers</a></li>
                    <li><a href="#">ℹ Teacher Info</a></li>
                </ul>
            </li>

            <li><a href="#">🎓 Students</a></li>
            <li><a href="#">📘 Courses</a></li>

            <p class="section-title">APPS & PAGES</p>

            <li><a href="#">💬 Chat</a></li>
            <li><a href="#">📅 Calendar</a></li>
            <li><a href="#">✉ Email</a></li>

        </ul>

        <button class="help-btn">Help & Support</button>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="main">

        <!-- NAVBAR -->
        <header class="navbar">

            <div class="search">
                <input type="text" placeholder="Search anything's...">
            </div>

            <div class="nav-actions">
                <span>📩</span>
                <span class="notif">🔔</span>

                <!-- USER DROPDOWN -->
                <div class="user-dropdown">
                    <img src="https://i.pravatar.cc/40" class="avatar" id="userToggle">

                    <div class="user-menu" id="userMenu">
                        <a href="#">Profile</a>
                        <a href="#">Settings</a>
                        <a href="#" class="logout">Logout</a>
                    </div>
                </div>
            </div>

        </header>

        <!-- PAGE CONTENT -->
        <section class="content">

            <h2 class="page-title">Dashboard</h2>

            <div class="cards">

                <div class="card">
                    <p class="label">TOTAL TEACHERS</p>
                    <h3>70</h3>
                    <p class="success">↑ 5% Increased</p>
                </div>

                <div class="card">
                    <p class="label">NEW STUDENTS</p>
                    <h3>1200</h3>
                    <p class="success">↑ 15% Joined</p>
                </div>

                <div class="card">
                    <p class="label">COURSES ACTIVE</p>
                    <h3>50</h3>
                    <p class="success">↑ 3%</p>
                </div>

            </div>

        </section>

    </main>

</div>

<script src="main.js"></script>
</body>
</html>
 --}}
