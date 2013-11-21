@extends('includes.template')

@section('content')

<article class="col1">

    @if($page->services == 0)
        <h1 data-editable="title">{{{ $page->title }}}</h1>
    @else
        <h1>Services - {{{ $page->title }}}</h1>
    @endif

    <img src="{{{ URL::to('img/'.$page->image) }}}" alt="placeholder photo" width="100%">
    <p class="edit" data-editable="caption">{{{ $page->caption }}}</p>
</article>
<article class="col2 wysiwyg" data-editable="content">
    {{ $page->content }}
</article>

@stop