@extends('includes.template')

@section('content')

<article class="col1">
    <h1>Contact</h1>
    <h3>We are here:</h3>
    <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.nz/maps?q=123+great+north+road+auckland&amp;ie=UTF8&amp;hq=&amp;hnear=123+Great+North+Rd,+Grey+Lynn,+Auckland+1021&amp;gl=nz&amp;t=h&amp;z=14&amp;ll=-36.862165,174.749711&amp;output=embed"></iframe><br /><caption><a href="http://goo.gl/maps/YSjIp" style="color:#0000FF;text-align:left">View Larger Map</a></caption>
</article>
<article class="col2">

    <h2>Fill in the form to send us an email</h2>
    {{ Form::open(array('url' => 'pages/contact')) }}

    {{ Form::label('name', 'Your Name '), $errors->first('name','<span class="error">:message</p>') }}
    {{ Form::text('name', null, array('placeholder'=>'Enter your full name')) }}
    <br>
    {{ Form::label('email', 'Your Email '), $errors->first('email','<span class="error">:message</p>') }}
    {{ Form::text('email', null, array('placeholder'=>'Enter your email address')) }}
    <br>
    {{ Form::label('subject', 'Subject '), $errors->first('subject','<span class="error">:message</p>') }}
    {{ Form::text('subject', null, array('placeholder'=>'The email\'s subject')) }}
    <br>
    {{ Form::label('email_message', 'Message '), $errors->first('email_message','<p class="error">:message</p>') }}
    {{ Form::textarea('email_message', null, array('placeholder'=>'The email\'s message')) }}
    <br>
    {{ Form::reset('Reset') }}
    {{ Form::submit('Send', array('id' => 'submit')) }}
    {{ Form::close() }}

    </fieldset></form>
</article>

@stop