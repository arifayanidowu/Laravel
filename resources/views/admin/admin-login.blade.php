@extends('layout.admin-entry-layout') 

@section('content')


<h1 id="register-label">{{ $label }}</h1>
<hr>
<form id="register" action="/login" method="POST">
    {{ csrf_field() }}
    <div>
        <div class="err">
            @if($errors->has('email'))

                <span class="text-danger">{{ $errors->first('email') }}</span>

            @endif
        </div>
        <label>email:</label>
        <input type="text" name="email" placeholder="email">
    </div>
    <div>

        <div class="err">
            @if($errors->has('password'))

                <span class="text-danger">{{ $errors->first('password') }}</span>

            @endif
        </div>

        <label>password:</label>
        <input type="password" name="password" placeholder="password">
    </div>

    <input type="submit" name="register" value="login">

</form>

<h4 class="jumpto">Don't have an account? <a href="/register">register</a></h4>
</div>



@stop