<div class="tweet-item flex border-b mb-4 py-6 px-4">
    <div class="flex-shrink-0 mr-4">
        <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full">
    </div>
    <div>
        <div class="flex items-center">
            <h3 class="font-semibold pr-4">{{ $tweet->user->name }}</h3>
            <span class="text-sm">{{ $tweet->created_at }}</span>
        </div>
        <div class="mt-2">
            <p>{{ $tweet->body }}</p>
        </div>
        <div class="py-4">
            <a href="#" class="px-3 py-2 rounded-md text-xs font-medium text-indigo-500 bg-indigo-200">+24</a>
            <a href="#" class="px-3 py-2 rounded-md text-xs font-medium hover:text-indigo-500 hover:bg-indigo-100">+24</a>
        </div>
    </div>
</div>
