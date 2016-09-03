@extends('base')
@section('title', '| Blog')

@section('content')

@foreach($posts as $post)
<div class = 'row'>
   <div class="col-md-8 col-md-offset-2">
     <h1> {{$post->title}} </h1>
     <h5> Published: {{date('M j, Y',strtotime($post->created_at))}} </h5>
     <p> {{substr($post->body, 0,300)}} {{ strlen($post->body) > 300 ? "..." : ""}} </p>
    <a href="{{route('blog.post',$post->slug)}}" class = "btn btn-primary"> more </a>

    <hr>

  </div>
</div>
@endforeach
<div class = "text-center">
{!! $posts->links()!!}
</div>

@endsection
