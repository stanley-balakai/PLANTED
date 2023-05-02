<!-- posts.blade.php -->
<x-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
    </head>

    <section class="px-6 py-8">
        @if(isset($searchTerm))
            <div class="mb-4 text-lg font-semibold">
                Showing {{ $plants->total() }} results for "{{ $searchTerm }}"
            </div>
        @endif
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($plants as $plant)
                    <article class="post-card">
                        <div class="rounded-xl">
                            <img loading="lazy" class="card-image border-4 border-green-800 rounded-xl" src="{{ $plant->image_url }}" alt="Plant image">
                        </div>
                        <h2 class="text-2xl font-bold mb-2">{{ $plant->name }}</h2>
                        <p class="mb-4">{{ $plant->category->name }}</p>
                        <p class="text-sm mb-4">Posted by: {{ $plant->user->name }}</p>
                        <a href="{{ route('plants.show', $plant) }}" class="accent">Read More &rarr;</a>
                    </article>
                @endforeach
            </div>
            {{ $plants->links() }}
        </main>
    </section>
</x-layout>
