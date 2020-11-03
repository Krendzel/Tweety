<div class="bg-gray-200 p-4 rounded-lg">
    <h3 class="font-semibold text-lg mb-4">Friends</h3>
    <ul>
        @foreach(range(1,8) as $index )
        <li class="hover:bg-gray-300 px-4 py-2 rounded-lg mb-2">
            <div class="flex items-center text-sm">
                <img src="https://i.pravatar.cc/40?img=3" alt="" class="rounded-full">
                <span class="pl-4 ">John Doe</span>
            </div>
        </li>
        @endforeach
    </ul>
</div>
