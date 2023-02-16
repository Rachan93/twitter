<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class HomepageController extends Controller
{
    public function index()
    {
        $tweets = Tweet::all();

        return view('homepage.index', [
            'tweets' => $tweets,
        ]);
    }
}
