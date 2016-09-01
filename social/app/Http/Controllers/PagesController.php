<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->limit(7)->get();
    	return view('pages.index')->withPosts($posts);
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function shoutouts()
    {
    	return view('pages.shoutouts');
    }
}
