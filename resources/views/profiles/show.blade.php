@extends('master')
@section('title', $profile->name)
@section('content')

<header class="relative">
    <div class="mb-4 ">
        <img src="{{ asset('img/866-700x300.jpg') }}" alt="" class="rounded-lg">
    </div>
    <div class="flex items-center justify-between">
        <div>
            <h3 class="font-semibold text-lg">{{ $profile->name }}</h3>
            <span class="text-sm" title="{{ $profile->created_at}}">Joined: {{ $profile->created_at->format('d/m/Y') }}</span>
        </div>
        <div>
            <a href="#" class="shadow text-gray-800 font-semibold px-4 py-2 rounded-full border hover:border-indigo-600 hover:text-indigo-500 text-sm mr-2">Edit Profile</a>
            <a href="#" class="bg-indigo-500 text-white font-semibold px-4 py-2 rounded-full hover:bg-indigo-600 text-sm">Follow me</a>
        </div>
    </div>
    <div class="text-center text-sm my-2">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa dignissimos doloremque fugit laborum maxime, unde. Consectetur dolorem id necessitatibus sequi!</p>
    </div>
    <img src="{{ auth()->user()->avatar }}" alt="" class="absolute top-1/2 rounded-full" style="width: 150px; left: calc(50% - 75px);">
</header>
<div class="mt-6  border border-gray-300 rounded-lg">
    @foreach($tweets as $tweet)
        @include('partials._timeline')
    @endforeach
</div>


@endsection

