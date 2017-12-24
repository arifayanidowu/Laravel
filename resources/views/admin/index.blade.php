@extends('layout.admin-home-master')

@section('content')

<div id="stream">
    <h1 id="register-label">{{ $label }}</h1>
    <hr>
    <form id="register" action="/addpost" method="POST">

        {{--  @if(count($errors) > 0)

            @foreach($errors->all() as $error)

                <p>{{ $error }}</p>

            @endforeach    

        
        @endif  --}}

        {{csrf_field()}}

        {{ session()->get('message') }}


        <div>
          
            <label>Author:</label>

            @if($errors->get('author'))
                <span class="err">{{ $errors->get('author')[0] }} </span>
            @endif
            <input type="text" name="author" placeholder="author">
        </div>
        <div>

            @if($errors->get('title'))
                <span class="err">{{ $errors->get('title')[0] }} </span>
            @endif
            <label>title:</label>
            <input type="text" name="title" placeholder="title">
        </div>
        <div>
            <label>post content:</label>

            @if($errors->get('content'))
                <span class="err">{{ $errors->get('content')[0] }} </span>
            @endif
            <textarea name="content" rows="7" cols="10" placeholder="Enter Message"></textarea>
        </div>

        <input type="submit" name="register" value="publish">
    </form>

</div>

@stop