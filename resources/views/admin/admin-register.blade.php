@extends('layout.admin-entry-layout') 

@section('content')
	
		<h1 id="register-label">{{ $title }}</h1>
		<hr>
		<form id="register"  action ="/register" method ="POST">
			
			{{ csrf_field() }}
			
			<div>

				@if($errors->has('firstname'))

					<span class="err">{{ $errors->get('firstname')[0] }}</span>

				@endif

				<label>first name:</label>
				<input type="text" name="firstname" placeholder="first name">
			</div>
			<div>

				@if($errors->has('lastname'))

					<span class="err">{{ $errors->get('lastname')[0] }}</span>

				@endif

				<label>last name:</label>	
				<input type="text" name="lastname" placeholder="last name">
			</div>

			<div>

				@if($errors->has('email'))

					<span class="err">{{ $errors->get('email')[0] }}</span>

				@endif
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>

				@if($errors->has('password'))

					<span class="err">{{ $errors->get('password')[0] }}</span>

				@endif
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
 
			<div>

				@if($errors->has('password'))

					<span class="err">{{ $errors->get('password')[0] }}</span>

				@endif
				<label>confirm password:</label>	
				<input type="password" name="password_confirmation" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="\admin">login</a></h4>
@stop