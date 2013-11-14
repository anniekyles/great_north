@extends('includes.template')

@section('content')

<article>

	<h2>Create A New Page</h2>

	{{ Form::open(array('url' => 'pages', 'method' => 'post')) }}

	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', Input::old('name')) }}
	{{ $errors->first('name','<p class="error">:message</p>') }}

	<br class="group" />
	{{ Form::reset('Reset') }}
	{{ Form::submit('Create Page') }}

	{{ Form::close() }}

</article>
@stop