<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>D'Orphan</title>
    <link rel="icon" href="{{ url('img/logo.svg?v=2') }}" type="image/svg" />
</head>

<body>
    <div class="h-screen bg-body bg-repeat bg-cover bg-blend-multiply">
        <nav class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/" class="flex items-center py-4 px-2">
                                <img src="{{ url('img/logo.svg') }}" alt="D&#39;Orphan" class="h-8 w-8 mr-3">
                                <span class=" text-base leading-6 font-bold text-blue-500">D&#39;Orphan</span>
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-500 hover:bg-gray-700 hover:text-white" -->
                                <a href="/dasbor"
                                    class="text-gray-500 hover:text-blue-500 px-3 py-2 text-sm font-medium"
                                    aria-current="page">Dasbor</a>

                                <a href="/cari"
                                    class="text-gray-500 hover:text-blue-500 px-3 py-2 text-sm font-medium">Cari</a>

                                <a href="/lomba"
                                    class="text-gray-500 hover:text-blue-500 px-3 py-2 text-sm font-medium">Lomba</a>

                                <a href="/donasi"
                                    class="text-gray-500 hover:text-blue-500 px-3 py-2 text-sm font-medium">Donasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button"
                                        class="flex max-w-xs items-center rounded-full bg-blue-500 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-500"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full"
                                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="Akun">
                                    </button>
                                </div>

                                <!-- Dropdown menu, show/hide based on menu state.
                                Entering: "transition ease-out duration-100"
                                From: "transform opacity-0 scale-95"
                                To: "transform opacity-100 scale-100"
                                Leaving: "transition ease-in duration-75"
                                From: "transform opacity-100 scale-100"
                                To: "transform opacity-0 scale-95" -->
                                {{-- <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="/profil" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Profil</a>

                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Keluar</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!--
                    Heroicon name: outline/bars-3
      
                    Menu open: "hidden", Menu closed: "block"
                  -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!--
                    Heroicon name: outline/x-mark
      
                    Menu open: "block", Menu closed: "hidden"
                  -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-500 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                        aria-current="page">Dashboard</a>

                    <a href="#"
                        class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                    <a href="#"
                        class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                    <a href="#"
                        class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>

                    <a href="#"
                        class="text-gray-500 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Reports</a>
                </div>
                <div class="border-t border-gray-700 pt-4 pb-3">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
                        </div>
                        <button type="button"
                            class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                            Profile</a>

                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>

                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>

        <main class="container m-auto p-12 space-y-8">
            {{-- Hero --}}
            <div class="flex flex-col space-y-4">
                <div class="flex space-x-6">
                    <div class="flex flex-col space-y-4 w-6/12 justify-center">
                        <p class="text-4xl font-extrabold">
                            D&#39;Orphan hadir untuk proses pembelajaran yang lebih optimal
                        </p>
                        <p class="text-2xl leading-8 text-gray-500">Gali serta tingkatkan kualitas bakat dan minat
                            anak-anak Panti Asuhan melalui D&#39;Orphan</p>
                        <br>
                        <a href="/cari">
                            <button type="button"
                                class="inline-flex justify-center items-center space-x-2 rounded font-bold focus:outline-none px-3 py-2 leading-6 bg-blue-500 text-white hover:bg-blue-600 focus:ring focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-500 active:border-blue-500">
                                Temukan Tutor
                            </button>
                        </a>
                    </div>
                    <div class="w-6/12">
                        <img src="{{ url('img/home-hero.svg') }}" alt="Bakat Minat">
                    </div>
                </div>

                <div class="self-center">
                    <a href="#fitur">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor"
                            class="w-10 h-10 stroke-blue-500 hover:stroke-blue-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Fitur --}}
            <div class="flex flex-col space-y-4" id="fitur">
                <div>
                    <p class="text-3xl leading-10 font-bold">Kenali D&#39;Orphan lebih lanjut</p>
                    <div class="text-xl leading-8 text-gray-500">
                        <span class="font-bold">D'Orphan</span>&nbsp;<span>adalah Pengembangan Aplikasi Web
                            untuk Mengasah Bakat dan Minat Anak
                            Panti Asuhan</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 lg:gap-8">
                    @php
                        $fitur = [
                            [
                                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
</svg>',
                                'title' => 'Publikasi Profil Panti dan Tutor',
                            ],
                        ];
                    @endphp
                    @foreach ($fitur as $item)
                        <!-- Card -->
                        <div class="flex flex-col rounded-2xl shadow bg-white overflow-hidden">
                            <!-- Card Header -->
                            <div class="py-4 px-5 lg:px-6 w-full">
                                <img src="{{ $item['icon'] }}" alt="">
                                </>
                            </div>
                            <!-- END Card Header -->

                            <!-- Card Body -->
                            <div class="p-5 lg:p-6 grow w-full">
                                <p>
                                    {{ $item['title'] }}
                                </p>
                            </div>
                            <!-- END Card Body -->

                            <!-- Card Footer -->
                            <div class="py-4 px-5 lg:px-6 w-full text-sm text-gray-600">
                                <p>
                                    Card Footer
                                </p>
                            </div>
                            <!-- END Card Footer -->
                        </div>
                        <!-- END Card -->
                    @endforeach

                    <!-- Card -->
                    <div class="flex flex-col rounded-2xl shadow bg-white overflow-hidden">
                        <!-- Card Header -->
                        <div class="py-4 px-5 lg:px-6 w-full">
                            <h3 class="font-medium">
                                Card Title
                            </h3>
                        </div>
                        <!-- END Card Header -->

                        <!-- Card Body -->
                        <div class="p-5 lg:p-6 grow w-full">
                            <p>
                                Content..
                            </p>
                        </div>
                        <!-- END Card Body -->

                        <!-- Card Footer -->
                        <div class="py-4 px-5 lg:px-6 w-full text-sm text-gray-600">
                            <p>
                                Card Footer
                            </p>
                        </div>
                        <!-- END Card Footer -->
                    </div>
                    <!-- END Card -->

                    <!-- Card -->
                    <div class="flex flex-col rounded-2xl shadow bg-white overflow-hidden">
                        <!-- Card Header -->
                        <div class="py-4 px-5 lg:px-6 w-full">
                            <h3 class="font-medium">
                                Card Title
                            </h3>
                        </div>
                        <!-- END Card Header -->

                        <!-- Card Body -->
                        <div class="p-5 lg:p-6 grow w-full">
                            <p>
                                The height of all cards are auto adjusted based on the available space.
                            </p>
                        </div>
                        <!-- END Card Body -->

                        <!-- Card Footer -->
                        <div class="py-4 px-5 lg:px-6 w-full text-sm text-gray-600">
                            <p>
                                Card Footer
                            </p>
                        </div>
                        <!-- END Card Footer -->
                    </div>
                    <!-- END Card -->

                    <!-- Card -->
                    <div class="flex flex-col rounded-2xl shadow bg-white overflow-hidden">
                        <!-- Card Header -->
                        <div class="py-4 px-5 lg:px-6 w-full">
                            <h3 class="font-medium">
                                Card Title
                            </h3>
                        </div>
                        <!-- END Card Header -->

                        <!-- Card Body -->
                        <div class="p-5 lg:p-6 grow w-full">
                            <p>
                                Content..
                            </p>
                        </div>
                        <!-- END Card Body -->

                        <!-- Card Footer -->
                        <div class="py-4 px-5 lg:px-6 w-full text-sm text-gray-600">
                            <p>
                                Card Footer
                            </p>
                        </div>
                        <!-- END Card Footer -->
                    </div>
                    <!-- END Card -->
                </div>
            </div>
        </main>
    </div>
</body>

</html>
