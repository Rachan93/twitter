<?php
namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::paginate(12);

        return view('tweets.index', [
            'tweets' => $tweets,
        ]);
    }

    public function show($id)
    {
        $tweet = Tweet::findOrFail($id);

        return view('tweet.show', [
            'tweet' => $tweet,
        ]);
    }
}
