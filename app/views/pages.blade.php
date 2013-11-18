@extends('includes.template')

@section('content')

<article class="col1">

    @if($page->services == 0)
        <h1>{{{ $page->title }}}</h1>
    @else
        <h1>Services - {{{ $page->title }}}</h1>
    @endif

    <img src="{{{ URL::to('img/'.$page->image) }}}" alt="placeholder photo" width="100%">
    <caption>{{{ $page->caption }}}</caption>
</article>
<article class="col2">
    {{ $page->content }}
</article>

@stop