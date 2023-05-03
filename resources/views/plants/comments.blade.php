<!-- resources/views/plants/comments.blade.php -->

<div class="comments-section mt-8">
    <h2 class="text-2xl font-bold mb-4">Comments</h2>

    @foreach($plant->comments as $comment)
        <div class="comment mb-4 p-4 bg-gray-100 rounded-lg">
            <p class="font-bold">{{ $comment->user->name }} commented:</p>
            <p>{{ $comment->body }}</p>
            <p class="text-xs text-gray-600">Posted at: {{ $comment->created_at->format('F j, Y, g:i a') }}</p>
        </div>
    @endforeach

    @auth
        <form action="{{ route('plants.comments.store', $plant->id) }}" method="POST" class="mt-4">
            @csrf
            <textarea name="body" rows="4" class="w-full p-2 bg-gray-100 rounded-lg" placeholder="Add your comment..."></textarea>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4">Post Comment</button>
        </form>
    @else
        <p class="mt-4">Please <a href="{{ route('login') }}" class="text-green-500 underline">log in</a> or <a href="{{ route('register') }}" class="text-green-500 underline">register</a> to post a comment.</p>
    @endauth
</div>
