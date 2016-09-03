<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        * store all the posts in one variable
        *
        */
        $posts = Post::orderBy('id','desc')->paginate(7);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  //validate the data
        $this->validate($request, array(
             'title' => 'required | max:255',
             'slug' => 'required | alpha_dash | min:5 | max:255 | unique:posts,slug',
             'body' => 'required'

        ));

        //store in database
        $post = new Post;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->save();
        //redirect to another page
        Session::flash('post-success', 'posted successfully');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //retrieve the post data from the db
        $post = Post::find($id);

        // return view, passing the post variable
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
         $post = Post::find($id);
         // if slug hasn't change, do not validate it

         if($request->input('slug') == $post->slug){
         $this->validate($request, array(
             'title' => 'required | max:255',
             'body'  => 'required'
        ));
      } else{
        $this->validate($request, array(
            'title' => 'required | max:255',
            'slug'  => 'required | min:5 | max: 255 | unique:posts,slug',
            'body'  => 'required'
       ));
      }

        //save the data to the db
         /*no need to create a new Post object,
          *since we're editing an already existing post
          */

        $post->title  =  $request->input('title');
        $post->slug   =  $request->input('slug');
        $post->body   =  $request->input('body');
        $post->save();
        //set flash data with success message
        Session::flash('post-success', 'updated successfully');
        //redirect to post.show with flash data
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('post-success','Deleted successfully');
        return redirect()->route('posts.index');
    }
}
