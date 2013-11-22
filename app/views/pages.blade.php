@extends('includes.template')

@section('content')

<article class="col1">

	<?php
		$authCanEditTitle = '';
		$authCanEditCaption = '';
		$authCanEditContent = '';
		if(Auth::check()){
			$authCanEditTitle = ' data-editable="title"';
			$authCanEditCaption = ' data-editable="caption"';
			$authCanEditContent = ' data-editable="content"';
		}
	?>

    @if($page->services == 0)
        	<h1 {{ $authCanEditTitle }} >{{{ $page->title }}}</h1>
    @else
    		<h1>Services</h1>
        	<h1 {{ $authCanEditTitle }} >{{{ $page->title }}}</h1>
    @endif

    <img src="{{{ URL::to('img/'.$page->image) }}}" alt="placeholder photo" width="100%">
    <p class="edit" {{ $authCanEditCaption }} >{{{ $page->caption }}}</p>
</article>

<article class="col2 wysiwyg" {{ $authCanEditContent }} >
    {{ $page->content }}
</article>

@stop