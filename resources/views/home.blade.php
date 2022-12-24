@section('title', 'D\'Orphan')

<x-guest-layout>
    {{-- Hero --}}
    <div class="flex flex-col space-y-10">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
            <div class="flex flex-col space-y-0 md:space-y-4 justify-center">
                <div class="space-y-2">
                    <p class="text-4xl font-extrabold">
                        D&#39;Orphan menyediakan sistem Platform as a Service
                    </p>
                    <p class="text-2xl leading-8 text-gray-500">Layanan Antarmuka Pemrograman Aplikasi Publik untuk semua
                        Pengembang</p>
                    <br>
                </div>
                <div>
                    <a href="{{ route('documentation') }}">
                        <x-hero-button>Jelajahi Dokumentasi</x-hero-button>
                    </a>
                </div>
            </div>
            <div class="hidden lg:block">
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
            <h3 class="text-3xl leading-10 font-bold">Kenali D&#39;Orphan lebih lanjut</h3>
            <div class="text-xl leading-8 text-gray-500">
                <span class="font-bold">D'Orphan</span>&nbsp;<span>menghadirkan dokumentasi berbasis Aplikasi Web untuk
                    mendukung perkembangan Bakat dan Minat Anak Panti Asuhan</span>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
            <!-- Card -->
            <x-home-fitur-card>
                <x-slot:icon>
                    <svg width=72 height=72 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#3B82F6"
                        class="inline-block rounded-full border-2 border-blue-500 p-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>Informasi Panti Asuhan dan Tutor di Surabaya</x-slot:title>
            </x-home-fitur-card>
            <x-home-fitur-card>
                <x-slot:icon>
                    <svg width=72 height=72 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#3B82F6"
                        class="inline-block rounded-full border-2 border-blue-500 p-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>Tarif kursus berdasarkan Kategori dan Tutor</x-slot:title>
            </x-home-fitur-card>
            <x-home-fitur-card>
                <x-slot:icon>
                    <svg width=72 height=72 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#3B82F6"
                        class="inline-block rounded-full border-2 border-blue-500 p-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>Informasi riwayat kursus dari Panti Asuhan</x-slot:title>
            </x-home-fitur-card>
            <x-home-fitur-card>
                <x-slot:icon>
                    <svg width=72 height=72 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#3B82F6"
                        class="inline-block rounded-full border-2 border-blue-500 p-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                </x-slot:icon>
                <x-slot:title>Informasi Kompetisi dari rekomendasi Tutor</x-slot:title>
            </x-home-fitur-card>
            <!-- END Card -->
        </div>
    </div>

    {{-- Kategori --}}
    <div class="flex flex-col space-y-4">
        <div>
            <h3 class="text-3xl leading-10 font-bold">Beragam kategori kursus tersedia</h3>
        </div>
        <div>
            <img src="{{ url('img/home-kategori.jpg') }}" alt="Kategori" />
        </div>
    </div>

    {{-- Tutor --}}
    <div class="bg-home-tutor bg-cover rounded-2xl shadow p-8">
        <div class="flex flex-col justify-center gap-4">
            <div>
                <svg width="64" height="64" viewBox="0 0 64 65" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M26.6666 27.4206H13.9628C9.99807 27.4206 7.41942 31.5929 9.19249 35.139L18.5258 53.8057C19.4293 55.6126 21.276 56.7539 23.2961 56.7539H34.01C34.4461 56.7539 34.8805 56.7004 35.3036 56.5947L45.3333 54.0872M26.6666 27.4206V14.0872C26.6666 11.1417 29.0544 8.7539 31.9999 8.7539H32.2545C33.5867 8.7539 34.6666 9.83382 34.6666 11.166C34.6666 13.0708 35.2304 14.933 36.287 16.5179L45.3333 30.0872V54.0872M26.6666 27.4206H31.9999M45.3333 54.0872H50.6666C53.6121 54.0872 55.9999 51.6994 55.9999 48.7539V32.7539C55.9999 29.8084 53.6121 27.4206 50.6666 27.4206H43.9999"
                        stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div>
                <p class="text-3xl text-white leading-10 font-bold">Belajar dengan para Tutor handal</p>
                <p class="text-xl leading-8 text-gray-200">Tumbuhkan keahlian Anda bersama para pakarnya</p>
            </div>
        </div>
    </div>

    {{-- Statistik --}}
    <div class="flex flex-col space-y-4">
        <h3 class="text-3xl leading-10 font-bold">D&#39;Orphan dalam angka</h3>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-3">
            <x-home-statistik-card>
                <x-slot:title>Panti Asuhan di Surabaya</x-slot:title>
                <x-slot:number>100</x-slot:number>
            </x-home-statistik-card>
            <x-home-statistik-card>
                <x-slot:title>Tutor di Surabaya</x-slot:title>
                <x-slot:number>100</x-slot:number>
            </x-home-statistik-card>
            <x-home-statistik-card>
                <x-slot:title>Kategori kursus</x-slot:title>
                <x-slot:number>100</x-slot:number>
            </x-home-statistik-card>
        </div>
    </div>
</x-guest-layout>
