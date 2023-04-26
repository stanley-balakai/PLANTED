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
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .post-card:hover {
            transform: translateY(-5px) rotate(-2deg); /* Rotate the card slightly to make it jiggle */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3), 0 0 20px rgba(255, 143, 0, 0.5); /* Add glow effect using box-shadow */

        }

        .accent {
            color: #ff8f00;
        }

        /* Different sizes for the cards */
        .post-card.small {
            height: 200px;
        }

        .post-card.medium {
            height: 350px;
        }

        .post-card.large {
            height: 500px;
        }
    </style>
</head>
<section class="px-6 py-8">
    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
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
            <article class="post-card">
                <h2 class="text-2xl font-bold mb-2">Post 4 Title</h2>
                <p class="mb-4">This is a summary or excerpt of post 4. You can add more content here.</p>
                <a href="#" class="accent">Read More &rarr;</a>
            </article>
            <article class="post-card">
                <h2 class="text-2xl font-bold mb-2">Post 5 Title</h2>
                <p class="mb-4">This is a summary or excerpt of post 5. You can add more content here.</p>
                <a href="#" class="accent">Read More &rarr;</a>
            </article>
            <article class="post-card">
                <h2 class="text-2xl font-bold mb-2">Post 6 Title</h2>
                <p class="mb-4">This is a summary or excerpt of post 6. You can add more content here.</p>
                <a href="#" class="accent">Read More &rarr;</a>
            </article>
            <article class="post-card">
                <h2 class="text-2xl font-bold mb-2">Post 7 Title</h2>
                <p class="mb-4">This is a summary or excerpt of post 7. You can add more content here.</p>
                <a href="#" class="accent">Read More &rarr;</a>
            </article>
            <article class="post-card">
                <h2 class="text-2xl font-bold mb-2">Post 8 Title</h2>
                <p class="mb-4">This is a summary or excerpt of post 8. You can add more content here.</p>
                <a href="#" class="accent">Read More &rarr;</a>
            </article>
            <article class="post-card">
                <h2 class="text-2xl font-bold mb-2">Post 9 Title</h2>
                <p class="mb-4">This is a summary or excerpt of post 9. You can add more content here.</p>
                <a href="#" class="accent">Read More &rarr;</a>
            </article>
            
        </div>
    </main>
</section>
<script>
    // Function to assign random size classes to post-card elements
    function randomizeCardSize() {
        const cards = document.querySelectorAll('.post-card');
        const sizes = ['small', 'medium', 'large'];

        cards.forEach(card => {
            const randomSize = sizes[Math.floor(Math.random() * sizes.length)];
            card.classList.add(randomSize);
        });
    }

    // Call the randomizeCardSize function on page load
    window.addEventListener('DOMContentLoaded', () => {
        randomizeCardSize();
    });
</script>
</x-layout>
