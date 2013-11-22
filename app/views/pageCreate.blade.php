@extends('includes.template')

@section('content')

<article>

	<h2>Create A New Page</h2>

	{{ Form::open(array('url' => 'pages', 'method' => 'post', 'files'=>true)) }}

	{{ Form::label('title', 'Page Title') }}
	{{ Form::text('title') }}
	{{ $errors->first('title','<p class="error">:message</p>') }}

	{{ Form::label('Content', 'Page Content') }}
	{{ Form::textarea('Content') }}
	{{ $errors->first('Content','<p class="error">:message</p>') }}

	{{ Form::label('photo', 'Page Photo') }}
	{{ Form::file('photo') }}
	{{ $errors->first('photo','<p class="error">:message</p>') }}

	{{ Form::label('caption', 'Caption for the Photo') }}
	{{ Form::text('caption') }}
	{{ $errors->first('caption','<p class="error">:message</p>') }}

	{{ Form::label('services', 'Does this page come under Services?') }}
	{{ Form::select('services', array('1' => 'Yes', '0' => 'No'), '1') }}
	{{ $errors->first('services','<p class="error">:message</p>') }}


	<br class="group" />
	{{ Form::reset('Reset') }}
	{{ Form::submit('Create Page') }}

	{{ Form::close() }}

</article>
@stop