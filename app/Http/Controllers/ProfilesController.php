<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show( $user)
    {
        $profile = User::where('name', $user)->firstOrFail();

        $tweets =  $profile->tweets;



        return view('profiles.show', compact('profile', 'tweets'));
    }
}
