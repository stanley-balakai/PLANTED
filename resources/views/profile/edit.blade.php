<!doctype html>

<title>Planted</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<body style="font-family: Open Sans, sans-serif">
<x-layout>
    <section class="px-6 py-8">
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
                            <div class="max-w-xl                            @include('profile.partials.update-password-form')
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
                            class="bg-green-700 hover:bg-green-800 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">Submit
                        <!-- Removed Space Holder -->
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>
</x-layout>

</body>
</html>
    