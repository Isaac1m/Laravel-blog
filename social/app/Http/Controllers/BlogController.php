<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
class BlogController extends Controller
{
    //

    public function index(){

    	$posts = Post::paginate(7);
      $index = count($posts);

    	return view('blog.index')->withPosts($posts)->withIndex($index);
    }

    public function getPost($slug){

      $post = Post::where('slug','=', $slug)->first();
      return view('blog.post')->withPost($post);
    }
}
