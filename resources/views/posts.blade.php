<!-- posts.blade.php -->

<x-layout>
    <head>
        <style>
            body {
                background-color: #004d40;
                color: #b2dfdb;
            }

            .post-card {
                background-color: #00796b;
                border-radius: 10px;
                padding: 20px;
                transition: transform 0.3s ease;
            }

            .post-card:hover {
                transform: translateY(-5px);
            }

            .accent {
                color: #ff8f00;
            }
        </style>
    </head>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <h1 class="text-center text-4xl font-bold accent mb-10">Planted</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <article class="post-card">
                    <h2 class="text-2xl font-bold mb-2">Post 1 Title</h2>
                    <p class="mb-4">This is a summary or excerpt of post 1. You can add more content here.</p>
                    <a href="#" class="accent">Read More &rarr;</a>
                </article>
                <article class="post-card">
                    <h2 class="text-2xl font-bold mb-2">Post 2 Title</h2>
                    <p class="mb-4">This is a summary or excerpt of post 2. You can add more content here.</p>
                    <a href="#" class="accent">Read More &rarr;</a>
                </article>
                <article class="post-card">
                    <h2 class="text-2xl font-bold mb-2">Post 3 Title</h2>
                    <p class="mb-4">This is a summary or excerpt of post 3. You can add more content here.</p>
                    <a href="#" class="accent">Read More &rarr;</a>
                </article>
            </div>
        </main>
    </section>
</x-layout>
