<div class="bg-green-900 p-4 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-200 ease-in-out transform hover:scale-105">
    <div class="flex items-center">
        <span class="text-green-300 text-sm mr-2">{{ $plant->user->name }}</span>
        <h2 class="text-green-200 text-lg font-semibold">{{ $plant->name }}</h2>
    </div>
    <div class="mt-2">
        <img src="{{ $plant->image_url }}" alt="{{ $plant->name }}" class="w-full h-48 object-cover rounded-lg">
    </div>
    <div class="mt-2">
        <span class="text-green-400 text-sm">Category: {{ $plant->category->name }}</span>
    </div>
</div>
