<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = auth()->user()->timeline();

        return view('master', [
            'tweets' => $tweets
        ]);
    }
    public function store(Tweet $tweet)
    {
        request()->validate(['body' => 'required|min:3|max:255']);

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => request('body')
        ]);
        return redirect('/tweets');
    }
}
