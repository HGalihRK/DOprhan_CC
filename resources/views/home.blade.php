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

<x-guest-layout>
    <div class="h-screen bg-body bg-repeat bg-cover bg-blend-multiply">

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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-10 h-10 stroke-blue-500 hover:stroke-blue-600">
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
</x-guest-layout>
