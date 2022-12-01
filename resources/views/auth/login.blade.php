@section('title', 'Masuk')

<x-guest-layout>
    <x-slot name="logo">
        {{-- <x-jet-authentication-card-logo /> --}}
    </x-slot>

    <!-- Page Container -->
    <div id="page-container" class="flex flex-col mx-auto w-full">
        <!-- Page Content -->
        <main id="page-content" class="flex flex-auto flex-col max-w-full">
            <div class="flex bg-white rounded-2xl shadow">
                <!-- Sign Up Section -->
                <div class="flex grow w-6/12">
                    <div class="flex flex-col p-8 w-full">
                        <!-- Sign Up Content -->
                        <div class="grow flex items-center">
                            <div class="w-full max-w-lg mx-auto space-y-10">
                                <!-- Header -->
                                <div class="text-center">
                                    <h1 class="text-3xl leading-9 font-extrabold inline-flex items-center mb-1">
                                        Selamat datang kembali
                                    </h1>
                                    <p class="text-gray-500">
                                        Silakan masuk ke akun Anda
                                    </p>
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <x-jet-validation-errors class="mb-4" />

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-gray-900">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="mt-4">
                                        <x-jet-label for="email" value="{{ __('Surel') }}" />
                                        <x-jet-input id="email" class="block mt-1 w-full" type="email"
                                            name="email" :value="old('email')" required />
                                    </div>

                                    <div class="mt-4">
                                        <x-jet-label for="password" value="{{ __('Kata Sandi') }}" />
                                        <x-jet-input id="password" class="block mt-1 w-full" type="password"
                                            name="password" required autocomplete="new-password" />
                                    </div>

                                    <div class="flex justify-between mt-4">
                                        <label for="remember_me" class="flex items-center">
                                            <x-jet-checkbox
                                                class="text-blue-500 focus:border-blue-300 focus:ring-blue-200"
                                                id="remember_me" name="remember" />
                                            <span class="ml-2 text-gray-900">{{ __('Ingat Saya') }}</span>
                                        </label>

                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="font-bold">
                                                {{ __('Lupa kata sandi?') }}
                                            </a>
                                        @endif
                                    </div>

                                    <div class="mt-6 mb-4">
                                        <x-jet-button
                                            class="bg-blue-500 hover:bg-blue-600 focus:ring focus:ring-blue-500 focus:ring-opacity-50 active:bg-blue-500 active:border-blue-500 normal-case text-base tracking-normal w-full justify-center">
                                            {{ __('Masuk') }}
                                        </x-jet-button>
                                    </div>

                                    <div class="flex items-center justify-center gap-1">
                                        <p>Belum punya akun?</p>
                                        <a href="{{ route('register') }}" class="font-bold">{{ __('Daftar') }}</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign Up Content -->
                    </div>
                </div>
                <div
                    class="bg-authentication-background bg-cover flex flex-col text-center justify-center rounded-r-2xl w-6/12 gap-8 p-8">
                    <p class="text-4xl leading-10 font-extrabold tracking-tight text-white">Asah Bakat dan Minatmu</p>
                    <img src="{{ url('img/login.svg') }}" alt="Masuk">
                </div>
                <!-- END Sign Up Section -->
            </div>
        </main>
        <!-- END Page Content -->
    </div>
    <!-- END Page Container -->
</x-guest-layout>
