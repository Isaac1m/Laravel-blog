@extends('base')
@section('title', '| Home')
@section('content')
<div class = "container">
  <div class = "row">
    <div class = "col-md-12">
<div class="jumbotron">
  <h1>Most popular</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Proin eget tortor risus.</p>

  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
</div>
</div> <!--row-->

<div class = "row">
  <div class = "col-md-8">
    @foreach($posts as $post)
    <div class = "post">
        <h3>{{$post->title}}</h3>
        <p>{{substr($post->body, 0,300)}} {{ strlen($post->body)>300 ? "..." : "" }} </p>
        <a href="" class = "btn btn-primary btn-sm">More</a>
    </div>
    <hr>
    @endforeach

  </div>

    <div class = "col-md-3 col-md-offset-1">
    <h2>Quick menu</h2>
    <hr>
    </div>
</div><!--  .row -->

</div> <!--container-->
@endsection
