  @extends('base')
  @section('title','| Welcome')

  <!-- CSS  -->
  @section('stylesheets')
  {{ Html::style("/assets/css/style.css") }}
  @endsection

@section('content')
   <div class = "row">
   	<div class = "col-md-10">
<h1>All posts</h1>
   	</div>
   	<div class = "col-md-2">
<a href="{{ route('posts.create')}}" class = "btn btn-lg btn-primary btn-block btn-h1">Create new</a>
   </div>
   <div class = "col-md-12">
   	<hr>
   </div>
  </diV> <!-- end of .row -->
  <div class = "row">
  	<div class = "col-md-12">
<table class="table table-hover">
  <thead>
<th>#</th>
<th>Title</th>
<th>Body</th>
<th>Created</th>
<th></th>
  </thead>
  <tbody>
@foreach($posts as $post)
<tr>
	<td>{{$post->id}}</td>
	<td>{{$post->title}}</td>
	<td>{{substr($post->body, 0,50)}} {{ strlen($post->body) > 50 ? "..." : ""}}</td>
	<td>{{date('M j, Y',strtotime($post->created_at))}}</td> 
	<td>
	<a href="{{route('posts.show',$post->id)}}" class = "btn btn-sm btn-default">View</a>
	<a href="{{route('posts.edit',$post->id)}}" class = "btn btn-sm btn-primary">Edit</a>
	</td>
</tr>
@endforeach
 

  </tbody>
</table>  
<div class = "text-center">
{!! $posts->links()!!}
</div>	
</div>
  </div> 
@endsection


  