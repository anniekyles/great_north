@extends('includes.template')

@section('content')

<article class="col1">
@if($page->services === 0)
    <h1>{{{ $page->name }}}</h1>
@else
    <h1>Services - {{{ $page->name }}}</h1>
@endif
    <img src="{{ URL::to('img/'.$page->image) }}" alt="placeholder photo" width="100%">
    <caption>Placeholder caption</caption>
</article>
<article class="col2">
    <section>
        <h1>Welcome to Great North Auto</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
    </section>
    <section>
        <h2>What we do best is what you need most</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices. Proin in est sed erat facilisis pharetra.</p>
    </section>
</article>

@stop