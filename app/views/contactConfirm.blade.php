@extends('includes.template')

@section('content')

<article class="col1">
    <h1>Your email has been sent</h1>
    <h3>{{ HTML::link('pages/1','Return to home page.') }}</h3>
</article>

@stop