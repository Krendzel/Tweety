<div class="border-2 rounded-lg border-indigo-200 p-4">
    <form action="/tweets" method="POST">
        @csrf
        <textarea name="body" id="" placeholder="Tweet something" class="w-full text-lg p-2  focus:outline-none" required></textarea>
        @error('body')
        <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
        <hr class="my-4">
        <div class="flex justify-between p-2">
            <img src="{{ auth()->user()->avatar }}" alt="" class="rounded-full" style="width: 40px">
            <button href="#" class="bg-indigo-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-indigo-600">Tweet a-roo!</button>
        </div>
    </form>
</div>
