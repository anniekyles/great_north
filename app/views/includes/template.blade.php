<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Great North Auto</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	{{HTML::style("css/normalize.min.css")}}
	{{HTML::style("css/main.css")}}

    <!-- all the icons -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-152x152.png" />


    <!-- js moderniser - slows page load time -->
    <!-- <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script> -->
</head>
<body>
    <div class="header-container">
        <header id="header" class="wrapper clearfix">
            <div id="head-inner">
                <?php // find a way for this to work in the contact tab ?>
                <img src="../img/logo.png" alt="Great North Auto">
                <div id="contact-details">
                    <h2>Call us: 09 555 3321</h2>
                    <h2>123 Great North Road, Newton</h2>
                    <h2>Monday to Friday 8am-5pm</h2>
                </div>
                <div class="clearfix"></div>
            </div>

            <nav>
                <ul>
                    <li><a href="{{ URL::to('pages/1')}}"><i class="fa fa-home"></i> Home</a></li>
                    <li>
                        <span class="a"><i class="fa fa-wrench"></i> Services</span>
                        <ul id="extra-services">
                        	<!-- use a foreach loop to render extra-services kind of like this -->
							<!-- @foreach(Page::all() as $page)
							<li>{{ HTML::link('pages/'.$page->id, $page->name) }}</li>
							@endforeach -->
                            <li><a href="#">Warrant of Fitness</a></li>
                            <li><a href="#">Servicing</a></li>
                            <li><a href="#">Brakes</a></li>
                            <li><a href="#">Tyres &amp; Wheel Alignment</a></li>
                            <li><a href="#">Battery</a></li>
                            <li><a href="#">Exhaust &amp; Muffler</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ URL::to('pages/2')}}"><i class="fa fa-info-circle"></i> About</a></li>
                    <li><a href="{{ URL::to('contact')}}"><i class="fa fa-envelope"></i> Contact</a></li>
                </ul>
            </nav>
        </header>
    </div>
    <div class="main-container">
        <div class="main wrapper clearfix">

@yield('content')

        </div> <!-- #main -->
    </div> <!-- #main-container -->

    <div class="footer-container">
        <footer class="wrapper">
            <p>Website created by Annie Kyles, who can be found at <a href="http://www.anniekyles.com">anniekyles.com</a>  |
                @if(Auth::check())
                    {{HTML::link('logout','Log Out', array('class'=>'button right'))}}
                    {{HTML::link('users/'.Auth::user()->id,'Your Details', array('class'=>'button right'))}}
                    @if(Auth::user()->admin === 1)
                        {{HTML::link('pages/create','Create a New \'Services\' Page', array('class'=>'button right'))}}
                    @endif
                @else
                    {{HTML::link('login','Admin Login', array('class'=>''))}}
                @endif
            </p>
        </footer>

    </div>



	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
	{{ HTML::script("js/plugins.js") }}
	{{ HTML::script("js/main.js") }}
    {{ HTML::script("js/formValidation.js") }}

	<!--
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
-->
</body>
</html>