<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Planted</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}"><link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:items-center fixed-nav">
            <div class="flex w-full justify-between">
                <div class="md:flex md:items-center"><a href="/" class="md:flex md:items-center"><span class="text-xs font-bold uppercase">Leaf Logo</span>@auth<h1 class="ml-2 font-semibold text-xl text-custom-color leading-tight">Planted</h1>@endauth</a></div>
                <div class="hidden md:flex md:items-center md:justify-center">@guest<h1 class="font-semibold text-xl text-custom-color leading-tight">Planted</h1>@else<x-search-bar />@endguest</div>
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    @guest
                        <div>
                            <a href="{{ route('login') }}" class="text-sm text-white-700 underline">Log in</a><span class="text-sm text-gray-700">or</span><a href="{{ route('register') }}" class="ml-2 text-sm text-white-700 underline">Register</a>
                        </div>
                    @else
                        <nav x-data="{ open: false }" class="relative">
                            <button @click="open = !open" class="flex items-center text-sm focus:outline-none btn-custom-color">
                                <div class="mr-1">Hello, {{ Auth::user()->name }}</div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
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
        <div class="mt-24">{{ $slot }}</div>
        <footer class="border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16" id="footer">
            <div class="mt-10">
                <div class="relative inline-block mx-auto rounded-full">
                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center bg-green-400 rounded-lg">
                            <label for="email" class="hidden lg:inline-block rounded-lg"></label>
                            <input id="email" type="text" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none rounded-lg">
                        </div>
                        <button type="submit" class="bg-green-700 hover:bg-green-800 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">Submit</button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
</html>
