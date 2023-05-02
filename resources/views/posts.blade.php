<!-- posts.blade.php -->
<x-layout>
    <head>
        <style>
            body {
                background-color: #002604;
                color: #b2dfdb;
            }
        
            .post-card {
                background-color: #017a0d;
                border-radius: 10px;
                padding: 20px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .post-card:hover {
                transform: scale(1.05); /* Scale the card slightly to make it magnify */
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3), 0 0 20px rgba(255, 143, 0, 0.5); /* Add glow effect using box-shadow */
            }

            .accent {
                color: #ff8f00;
            }

            /* Style for the image */
            .card-image {
                border-radius: 10px; /* Apply rounded corners to all sides of the image */
            }


            .card-footer {
                border-radius: 0 0 10px 10px; /* Apply rounded corners to the bottom of the card-footer */
            }

    </style>
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
                        <img class="card-image border-4 border-green-800 rounded-xl" src="{{ $plant->image_url }}" alt="Plant image">
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
