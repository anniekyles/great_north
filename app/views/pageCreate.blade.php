@extends('includes.template')

@section('content')

<article>

	<h2>Create A New Page</h2>

	{{ Form::open(array('url' => 'pages', 'method' => 'post', 'files'=>true)) }}

	{{ Form::label('title', 'Page Title') }}
	{{ Form::text('title') }}
	{{ $errors->first('title','<p class="error">:message</p>') }}

	{{ Form::label('content', 'Page Content') }}
	{{ Form::textarea('content') }}
	{{ $errors->first('content','<p class="error">:message</p>') }}

	{{ Form::label('photo', 'Page Photo') }}
	{{ Form::file('photo') }}
	{{ $errors->first('photo','<p class="error">:message</p>') }}

	{{ Form::label('caption', 'Caption for the Photo') }}
	{{ Form::text('caption') }}
	{{ $errors->first('caption','<p class="error">:message</p>') }}

	{{ Form::hidden('services', '1') }}

	<br class="group" />
	{{ Form::reset('Reset') }}
	{{ Form::submit('Create Page') }}

	{{ Form::close() }}

</article>
@stop