<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <style>
        body {
            background-image: url('images/memberbg2.png');
            /*background-position-y: 240px;*/
            background-position: center;
            background-repeat: repeat;
            /* background-attachment: fixed; */

        }

    </style>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>

<body class="bg-gray-100">

    {{-- Banner --}}
    <div>
        <img style="height: auto; width: 100% " src="{{ asset('images/bannerdvs.png') }}" alt="">
    </div>

    {{-- Navigation bar --}}
    <nav class="bg-yellow-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex">

                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        {{-- <x-jet-application-mark class="block h-9 w-auto" /> --}}
                        <img class="inline-block h-12 w-12" src="{{ asset('images/logo.png') }}" />
                    </a>
                </div>

                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    {{-- <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                            Home
                        </x-jet-nav-link> --}}
                    <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                        Home
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('team-member') }}" :active="request()->routeIs('team-member')">
                        Team Member
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('cyber-weekend.register') }}"
                        :active="request()->routeIs('cyber-weekend.register')">
                        Cyber Weekend
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('discord') }}" :active="request()->routeIs('discord')">
                        Discord
                    </x-jet-nav-link>
                </div>

                <div class="space-x-8 sm:-my-px sm:ml-10 sm:flex flex-grow sm:justify-end">
                    <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                        Login
                    </x-jet-nav-link>
                </div>

            </div>
        </div>
    </nav>

    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <x-footer/>

    @stack('modals')

    @livewireScripts
</body>

</html>
