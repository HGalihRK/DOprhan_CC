<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- HyperText Markup Language Meta Tags --}}
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="D'Orphan, Web Application, Bakat dan Minat, Panti Asuhan, Informatika Universitas Ciputra Surabaya" />
    <meta name="description"
        content="D'Orphan adalah Pengembangan Aplikasi Web untuk Mengasah Bakat dan Minat Anak Panti Asuhan." />
    <meta name="owner"
        content="Nur Azizah, Oey Darryl Valencio Wijaya, Nathanael Abel Arianto, David Christian, Probo Krishnacahya, Haning Galih Rani Kumbara." />
    <meta name="theme-color" content="#3B82F6">

    {{-- Title --}}
    <title>@yield('title')</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ url('img/logo.svg?v=2') }}" type="image/svg" />

    {{-- Laravel Framework CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- External Cascading Style Sheets --}}
    <link rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css" />

    {{-- Google Fonts CDN --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600;800&display=swap" rel="stylesheet">

    {{-- Vite - Tailwind CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col h-screen bg-gray-50 bg-body bg-repeat bg-local bg-blend-multiply">
    {{-- Header --}}
    @livewire('navigation-menu')

    {{-- Content --}}
    <main class="container max-w-7xl mx-auto sm:p-6 lg:p-8 space-y-8">
        <div class="font-sans text-gray-900 antialiased space-y-8">{{ $slot }}</div>
    </main>

    {{-- Footer --}}
    <footer class="mt-auto bg-gray-800 text-center text-lg leading-7 font-bold text-white p-5">
        <p>Archotech&nbsp;&#45;&nbsp;2022</p>
    </footer>
</body>

</html>
