<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head class="text-gray-900 leading-tight">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        /*
        module.exports = {
            plugins: [
                require('tailwindcss-inset')({
                    insets: {
                        full: '100%'
                    }
                })
            ]
        };
        */
        .inset-l-full {
            left: 100%;
        }
    </style>
    @livewireStyles
</head>
<body class="min-h-screen bg-gray-100">
<div id="app">

    <!-- https://tailwindcomponents.com/component/megamenu -->
    <div class="min-w-screen min-h-screen bg-gray-200 px-5 pb-5 pt-20">
        <div class="py-3 px-5 bg-white rounded shadow-xl">
            <nav class="-mx-1 navbar navbar-expand-md navbar-light bg-white shadow-sm">
                {{--                <div class="-mx-1">--}}
                <ul class="flex w-full flex-wrap items-center h-10">
                    @guest
                        <li></li>
                    @else
                    <li class="block relative" x-data="{showChildren:false}" @click.away="showChildren=false">

                        <a href="{{ route('login') }}"
                           class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 bg-indigo-500 text-white"
                           @click.prevent="showChildren=!showChildren">
                            <span class="mr-3 text-xl"> <i class="mdi mdi-gauge"></i> </span>
                            <span>{{ Auth::user()->name }}</span>
                            <span class="ml-2"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div
                            class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1"
                            x-show="showChildren" style="display: none;"
                            x-transition:enter="transition ease duration-300 transform"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease duration-300 transform"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-4">
                            <span
                                class="absolute top-0 left-0 w-3 h-3 bg-white border transform rotate-45 -mt-1 ml-6"></span>
                            <div class="bg-white rounded w-full relative z-10 py-1">
                                <ul class="list-reset">
                                    <li class="relative" x-data="{showChildren:false}" @mouseleave="showChildren=false"
                                        @mouseenter="showChildren=true">
                                        <a href="{{ route('logout') }}"
                                           class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <span class="flex-1">{{ __('Logout') }}</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="block relative">
                        <a href="/tours"
                           class="flex items-center h-10 leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 mx-1 hover:bg-gray-100">
                            <span class="mr-3 text-xl"> <i class="mdi mdi-widgets-outline"></i> </span>
                            <span>Tours</span>
                        </a>
                    </li>
                    @endguest
                </ul>
            </nav>
            <main class="py-4">
                @yield('content')
                {{ $slot ?? '' }}
            </main>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

@livewireScripts
</body>
</html>
