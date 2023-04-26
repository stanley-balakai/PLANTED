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
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">



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
        <form action="/search" method="GET" class="relative w-8/9"> <!-- Changed from w-1/2 to w-3/4 -->
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
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                <div>Welcome, {{ Auth::user()->name }}</div>

                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
    @endguest
</div>




                
            </div>
        </nav>
        



<!-- Add a margin-top 
    
    to prevent content from being hidden under the fixed nav -->
<div class="mt-24">
{{ $slot }}
</div>

<footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
<!-- Removed Space Holder content -->

<div class="mt-10">
    <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

        <form method="POST" action="#" class="lg:flex text-sm">
            <div class="lg:py-3 lg:px-5 flex items-center">
                <label for="email" class="hidden lg:inline-block">
                    <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                </label>

                <input id="email" type="text " placeholder="Your email address"
                class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
            </div>

            <button type="submit"
                    class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
            >
                <!-- Removed Space Holder -->
            </button>
        </form>

    </div>
</div>
</footer>
</section>
</body>