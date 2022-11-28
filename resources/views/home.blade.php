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
                    <x-hero-button>Temukan Tutor</x-hero-button>
                </a>
            </div>
            <div class="w-6/12">
                <img src="{{ url('img/home-hero.svg') }}" alt="Bakat Minat">
            </div>
        </div>

        <div class="self-center animate-bounce">
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
        <div class="grid grid-cols-4 gap-4">
            <!-- Card -->
            <x-card>
                <x-slot:icon>
                    <svg width="98" height="97" viewBox="0 0 98 97" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="inline-block">
                        <circle cx="49" cy="48.5" r="47.5" stroke="#3B82F6" stroke-width="2" />
                        <path
                            d="M41.0834 38.6042C41.0834 42.9764 44.6278 46.5208 49.0001 46.5208C53.3723 46.5208 56.9167 42.9764 56.9167 38.6042C56.9167 34.2319 53.3723 30.6875 49.0001 30.6875C44.6278 30.6875 41.0834 34.2319 41.0834 38.6042Z"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M49.0001 52.4583C56.6515 52.4583 62.8542 58.6611 62.8542 66.3125H35.1459C35.1459 58.6611 41.3486 52.4583 49.0001 52.4583Z"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>Publikasi Profil Panti dan Tutor</x-slot:title>
            </x-card>
            <x-card>
                <x-slot:icon>
                    <svg width="98" height="97" viewBox="0 0 98 97" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="inline-block">
                        <circle cx="49" cy="48.5" r="47.5" stroke="#3B82F6" stroke-width="2" />
                        <path
                            d="M31.1875 66.3125L43.0625 54.4375M39.1042 44.5417C39.1042 52.1931 45.3069 58.3958 52.9583 58.3958C60.6098 58.3958 66.8125 52.1931 66.8125 44.5417C66.8125 36.8902 60.6098 30.6875 52.9583 30.6875C45.3069 30.6875 39.1042 36.8902 39.1042 44.5417Z"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>Cari Tutor untuk Sesi Kursus</x-slot:title>
            </x-card>
            <x-card>
                <x-slot:icon>
                    <svg width="98" height="97" viewBox="0 0 98 97" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="inline-block">
                        <circle cx="49" cy="48.5" r="47.5" stroke="#3B82F6" stroke-width="2" />
                        <path
                            d="M35.1458 48.5L31.1875 30.6875L66.8125 48.5L31.1875 66.3125L35.1458 48.5ZM35.1458 48.5L50.9792 48.5"
                            stroke="#3B82F6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>Permintaan Sesi Kursus</x-slot:title>
            </x-card>
            <x-card>
                <x-slot:icon>
                    <svg width="98" height="97" viewBox="0 0 98 97" fill="none"
                        xmlns="http://www.w3.org/2000/svg" class="inline-block">
                        <circle cx="49" cy="48.5" r="47.5" stroke="#3B82F6" stroke-width="2" />
                        <g clip-path="url(#clip0_1336_22064)">
                            <path
                                d="M49.951 27.6766C49.6517 26.7554 48.3483 26.7554 48.049 27.6766L43.8918 40.4693C43.758 40.8813 43.374 41.1602 42.9408 41.1602L29.4897 41.1607C28.521 41.1608 28.1183 42.4003 28.9019 42.9697L39.7838 50.8765C40.1343 51.1312 40.2809 51.5825 40.1471 51.9945L35.9909 64.7874C35.6916 65.7087 36.746 66.4748 37.5297 65.9055L48.4122 57.9995C48.7627 57.7449 49.2373 57.7449 49.5878 57.9995L60.4703 65.9055C61.254 66.4748 62.3084 65.7087 62.0091 64.7874L57.8529 51.9945C57.7191 51.5825 57.8657 51.1312 58.2162 50.8765L69.0981 42.9697C69.8817 42.4003 69.479 41.1608 68.5103 41.1607L55.0592 41.1602C54.626 41.1602 54.242 40.8813 54.1082 40.4693L49.951 27.6766Z"
                                stroke="#3B82F6" stroke-width="2" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1336_22064">
                                <rect width="47.5" height="47.5" fill="white"
                                    transform="matrix(-1 0 0 1 72.75 24.75)" />
                            </clipPath>
                        </defs>
                    </svg>
                </x-slot:icon>
                <x-slot:title>Rekomendasi Perlombaan</x-slot:title>
            </x-card>
            <!-- END Card -->
        </div>
    </div>
</x-guest-layout>
