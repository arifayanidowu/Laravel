@extends('layout.admin-home-master')

@section('content')

    <div id = "stream">

        <h1 id="register-label">{{ $label }}</h1>
		<hr>
		<form id="register"  action ="/editpost/{{ $post->id}}" method ="POST">

            {{--  @if(count($errors) > 0)

                @foreach($errors->all() as $error)

                    <p>{{ $error }}</p>

                @endforeach  

            @endif --}}
            {{csrf_field()}}    <!--protecting against cross-site request forgery-->

            {{ session()->get('message') }}

			<div>
                @if($errors->get('author'))
                    <span class = "err">{{ $errors->get('author')[0]}}</span>
                @endif
				<label>Author:</label>
				<input type="text" name="author" value="{{ $post->author }}">
			</div>

			<div>
                @if($errors->get('title'))
                    <span class = "err">{{ $errors->get('title')[0]}}</span>
                @endif
				<label>Title:</label>	
				<input type="text" name="title" value="{{ $post->title }}">
			</div>

			<div>
                @if($errors->get('content'))
                    <span class = "err">{{ $errors->get('content')[0]}}</span>
                @endif
				<label>Post Content:</label>
				<textarea type="text" name="content">{{ $post->content }}</textarea>
			</div>

			<input type="submit" name="post" value="publish">
		</form>

    </div>

@stop