@extends('includes.template')

@section('content')

<article class="col1">

	<?php
		$authCanEditTitle = '';
		$authCanEditCaption = '';
		$authCanEditContent = '';
		$authCanEditImage = '';
		if(Auth::check()){
			$authCanEditTitle = ' data-editable="title"';
			$authCanEditCaption = ' data-editable="caption"';
			$authCanEditContent = ' data-editable="content"';
			$authCanEditImage = ' data-editable="image"';
		}
	?>

    @if($page->services == 0)
        	<h1 {{ $authCanEditTitle }} >{{{ $page->title }}}</h1>
    @else
    		<h1>Services</h1>
        	<h1 {{ $authCanEditTitle }} >{{{ $page->title }}}</h1>
    @endif

    <img src="{{{ URL::to('img/'.$page->image) }}}" alt="placeholder photo" width="100%"  {{ $authCanEditImage }} >
    @if(Auth::check())
			{{ Form::open(array('url' => 'pages/'.$page->id, 'method' => 'put', "files"=>true)) }}
			<br>
			{{ Form::file("image") }}
			{{ Form::submit('Upload', array('id' => 'submit','name' => 'file_upload')) }}
			{{ Form::close() }}
	@endif
    <p class="edit" {{ $authCanEditCaption }} >{{{ $page->caption }}}</p>
</article>

<article class="col2 wysiwyg" {{ $authCanEditContent }} >
    {{ $page->content }}
</article>

@stop