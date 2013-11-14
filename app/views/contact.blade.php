@extends('includes.template')

@section('content')

<article class="col1">
    <h1>Contact</h1>
    <h3>We are here:</h3>
    <a href="https://maps.google.co.nz/maps?q=123+great+north+road+auckland&ie=UTF-8&hq=&hnear=0x6d0d47be53137737:0xc952d31a1aa37c94,123+Great+North+Rd,+Grey+Lynn,+Auckland+1021&gl=nz&ei=EVOAUvS0KO2IiQfyu4DABw&ved=0CCwQ8gEwAA"><img src="img/placeholder.jpg" alt="placeholder picture" width="100%"></a>
    <caption>Click on the image to go to Google Maps</caption>
</article>
<article class="col2">

    <h2>Fill in the form to send us an email</h2>
    {{ Form::open(array('url' => 'contact')) }}

    {{ Form::label('name', 'Your Name '), $errors->first('name','<span class="error">:message</p>') }}
    {{ Form::text('name', null, array('placeholder'=>'Enter your full name')) }}
    <br>
    {{ Form::label('email', 'Your Email '), $errors->first('email','<span class="error">:message</p>') }}
    {{ Form::text('email', null, array('placeholder'=>'Enter your email address')) }}
    <br>
    {{ Form::label('subject', 'Subject '), $errors->first('subject','<span class="error">:message</p>') }}
    {{ Form::text('subject', null, array('placeholder'=>'The email\'s subject')) }}
    <br>
    {{ Form::label('message', 'Subject '), $errors->first('message','<p class="error">:message</p>') }}
    {{ Form::textarea('message', null, array('placeholder'=>'The email\'s message')) }}
    <br>
    {{ Form::reset('Reset') }}
    {{ Form::submit('Send', array('id' => 'submit')) }}
    {{ Form::close() }}

<!--
    <form method="post" action="https://www.google.co.nz/"><fieldset>
        <label for="name">Your name </label><span class="error">*</span>
        <input type="text" name="name" id="name" placeholder="Enter your full name"><br>

        <label for="email">Your email </label><span class="error">*</span>
        <input type="text" name="email" id="email" placeholder="Enter your email address"><br>

        <label for="subject">Subject </label><span class="error">*</span>
        <input type="text" name="subject" id="subject" placeholder="Email subject"><br>

        <label for="message">Message </label><span class="error">*</span>
        <textarea name="message" id="message" placeholder="Write a message"></textarea>

        <input type="reset" name="reset" id="reset" value="Reset">
        <input type="submit" name="submit" id="submit" value="Send">
        <span id="submitError" class="error"></span> -->

    </fieldset></form>
</article>

@stop