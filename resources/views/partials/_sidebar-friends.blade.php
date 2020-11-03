<div class="bg-gray-200 p-4 rounded-lg">
    <h3 class="font-semibold text-lg mb-4">Following</h3>
    <ul>
        @foreach(auth()->user()->follows as $user)
        <li class="hover:bg-gray-300 px-4 py-2 rounded-lg mb-2 hover:text-indigo-600">
            <a href="{{ route('profile.show', $user->name) }}">
            <div class="flex items-center text-sm">
                <img src="{{ $user->avatar }}" alt="" class="rounded-full" style="width: 40px">
                <span class="pl-4">{{ $user->name }}</span>
            </div>
            </a>
        </li>
        @endforeach
    </ul>
</div>
