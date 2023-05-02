<!-- resources/views/plants/show.blade.php -->
<x-layout>
    <head>
        <style>
            body {
                background-color: #002604;
                color: #b2dfdb;
            }
            
            .post-details {
                background-color: #017a0d;
                border-radius: 10px;
                padding: 20px;
            }
        </style>
    </head>
    
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="post-details">
                <h1 class="text-4xl font-bold mb-4">{{ $plant->name }}</h1>
                <p class="mb-4">{{ $plant->category->name }}</p>
                <p class="text-sm mb-4">Posted by: {{ $plant->user->name }}</p>
                <img class="rounded-xl border-4 border-green-800 mb-4" src="{{ $plant->image_url }}" alt="Plant image">
                <p class="text-lg">{{ $plant->description }}</p>
            </article>
        </main>
    </section>
</x-layout>
