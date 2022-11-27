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
                    <!-- Card -->
                    <x-card>
                        <x-slot:icon>
                            <svg width="98" height="97" viewBox="0 0 98 97" fill="none"
                                xmlns="http://www.w3.org/2000/svg" class="self-center">
                                <circle cx="49" cy="48.5" r="47.5" stroke="#3B82F6"
                                    stroke-width="2" />
                                <path
                                    d="M41.0834 38.6042C41.0834 42.9764 44.6278 46.5208 49.0001 46.5208C53.3723 46.5208 56.9167 42.9764 56.9167 38.6042C56.9167 34.2319 53.3723 30.6875 49.0001 30.6875C44.6278 30.6875 41.0834 34.2319 41.0834 38.6042Z"
                                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M49.0001 52.4583C56.6515 52.4583 62.8542 58.6611 62.8542 66.3125H35.1459C35.1459 58.6611 41.3486 52.4583 49.0001 52.4583Z"
                                    stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </x-slot:icon>
                        <x-slot:title>Publikasi Profil
                            Panti dan Tutor</x-slot:title>
                    </x-card>
                    <!-- END Card -->
                </div>
            </div>
        </main>
    </div>
</x-guest-layout>
