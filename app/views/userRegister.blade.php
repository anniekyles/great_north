@extends('includes.template')

@section('content')

<article>
	<h2>Register</h2>

	<h2>Register New User</h2>

	{{ Form::open(array('url' => 'users')) }}

	{{ Form::label('username', 'Choose a Username') }}
	{{ Form::text('username', Input::old('username')) }}
	{{ $errors->first('username','<p class="error">:message</p>') }}

	{{ Form::label('password', 'Password') }}
	{{ Form::password('password') }}
	{{ $errors->first('password','<p class="error">:message</p>') }}

	{{ Form::label('password_confirmation', 'Confirmed password') }}
	{{ Form::password('password_confirmation') }}

	{{ Form::reset('Reset') }}
	{{ Form::submit('Register') }}

	{{ Form::close() }}

</article>
@stop