<!-- search-bar.blade.php -->
<div class="search-bar-container">
    <form action="{{ route('search') }}" method="GET" class="relative w-8/9">
        <input type="text" name="query" placeholder="Search..." class="w-full rounded-md py-2 pl-10 pr-4">
        <span class="absolute left-3 top-1/2 transform -translate-y-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </span>
    </form>
</div>
