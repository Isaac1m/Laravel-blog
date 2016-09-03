@extends('base')
@section('title','| create post')
@section('content')
	 <div class = "row">
		 <div class = "col-md-4 col-md-offset-4">
			<h1>Post something</h1>
			{!!Form::open(array('route'=>'posts.store'))!!}
			{{Form::label('title','Title:')}}
			{{Form::text('title', null,array('class' => 'form-control'))}}
			{{Form::label('slug','Slug:')}}
			{{Form::text('slug',null,array('class' => 'form-control'))}}
			{{Form::label('body','Body:')}}
			{{Form::textarea('body', null,array('class' => 'form-control'))}}
			{{Form::submit('Post',array('class'=>'btn btn-primary btn-lg btn-block','style'=>'margin-top:20px'))}}
			{!!Form::close()!!}
		</div>
	</div>
@endsection
