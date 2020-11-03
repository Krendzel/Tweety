@extends('master')
@section('title', 'Tweets')
@section('content')
    @include('partials._tweet-panel')
    <div class="mt-6  border border-gray-300 rounded-lg">
        @foreach($tweets as $tweet)
            @include('partials._timeline')
        @endforeach
    </div>

@endsection

