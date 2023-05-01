{{-- <!doctype html>

<title>Planted</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<style>
    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
    .text-custom-color {
        color: #ff8f00;
    }
    /* Add the following styles */
    .fixed-nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 80px;
        padding: 16px 6px;
        z-index: 1000;
        backdrop-filter: blur(20px);
        background-color: rgb(2, 26, 1);
    }
    #footer {
        background-color: #001f03;
        color: #b2dfdb;
    }

    input::placeholder {
        color: white;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <!-- Copy the nav section from the first code block -->
        <nav class="md:flex md:items-center fixed-nav">
            <!-- Content of the nav section -->
        </nav>

        <!-- Add a margin-top to prevent content from being hidden under the fixed nav -->
        <div class="mt-24">
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Profile') }}
                    </h2>
                </x-slot>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </div>

        <!-- Copy the footer section from the first code block -->
        <footer id="footer">
            <!-- Content of the footer section -->
        </footer>
    </section>
</body> --}}

<!doctype html>

<title>Planted</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<style>
    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
    .text-custom-color {
        color: #ff8f00;
    }
    /* Add the following styles */
    .fixed-nav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 80px;
        padding: 16px 6px;
        z-index: 1000;
        backdrop-filter: blur(20px);
        background-color: rgb(2, 26, 1);
    }
    #footer {
        background-color: #001f03;
        color: #b2dfdb;
    }

    input::placeholder {
        color: white;
    }
    .btn-custom-color {
    color: #b2dfdb;
}

.btn-custom-color-open {
    color: #000;
}

</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <!-- Copy the nav section from the first code block -->
        <nav class="md:flex md:items-center fixed-nav">
            <div class="flex w-full justify-between">
                <!-- Left section -->
                <div class="md:flex md:items-center">
                    <a href="/" class="md:flex md:items-center">
                        <span class="text-xs font-bold uppercase">Leaf Logo</span>
                        @auth
                            <h1 class="ml-2 font-semibold text-xl text-custom-color leading-tight">Planted</h1>
                        @endauth
                    </a>
                </div>
                
                <!-- Center section -->
                <div class="hidden md:flex md:items-center md:justify-center">
                    @guest
                    <h1 class="font-semibold text-xl text-custom-color leading-tight">Planted</h1>
                    @else
                    <div class="search-bar-container">
                        <form action="/search" method="GET" class="relative w-8/9">
                            <input type="text" name="query" placeholder="Search..." class="w-full rounded-md py-2 pl-10 pr-4">
                            <span class="absolute left-3 top-1/2 transform -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </span>
                        </form>
                    </div>
                    @endguest
                </div>

                <!-- Right section -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @guest
                    <!-- Login/Register prompt -->
                    <div>
                        <a href="{{ route('login') }}" class="text-sm text-white-700 underline">Log in</a>
                        <span class="text-sm text-gray-700">or</span>
                        <a href="{{ route('register') }}" class="ml-2 text-sm text-white-700 underline">Register</a>
                    </div>
                    @else
                    <!-- Logged-in user dropdown -->
                    <nav x-data="{ open: false }" class="relative">


                        <button @click="open = !open" class="flex items-center text-sm focus:outline-none" x-bind:class="{'btn-custom-color': !open, 'btn-custom-color-open': open}">
                            <div class="mr-1">Hello, {{ Auth::user()->name }}</div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        
                        



                        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Profile</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Log Out</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                    @endguest
                </div>
            </div>
        </nav>

        <!-- Add a margin-top to prevent content from being hidden under the fixed nav -->
        <div class="mt-24">
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Profile') }}
                    </h2>
                </x-slot>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>

                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="max-w-xl">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </div>
    
        <footer class="border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16" id="footer">
            <!-- Removed Space Holder content -->
    
            <div class="mt-10">
                <div class="relative inline-block mx-auto rounded-full">
                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center bg-green-400 rounded-lg">
                            <label for="email" class="hidden lg:inline-block rounded-lg">
                                <!-- <img src="/images/mailbox-icon.svg" alt="mailbox letter"> -->
                            </label>
    
                            <input id="email" type="text" placeholder="Your email address"
                            class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none rounded-lg">
                        </div>
    
                        <button type="submit"
                                class="bg-green-700 hover:bg-green-800 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >Submit
                            <!-- Removed Space Holder -->
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>

