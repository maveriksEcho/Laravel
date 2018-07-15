<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('css/front.css')}}">


</head>
<body>
<header class="clearfix">

    <!-- top widget -->
    <div id="top-widget-holder">
        <div class="wrapper">
            <div id="top-widget">
                <div class="padding">
                    <ul  class="widget-cols clearfix">

                       @include('auth.login')

                    </ul>
                </div>
            </div>
        </div>
        <a href="#" id="top-open">Menu</a>
    </div>
    <!-- ENDS top-widget -->

    <div class="wrapper clearfix">

        <a href="{{ url('/') }}" id="logo"><img  style="width: 100px " src="img/logo.png" alt="blog_logo"></a>
        <nav>
            <ul id="nav" class="sf-menu">
                <li class="{{ Request::path() == '/' ? 'current-menu-item' : '' }}"><a href="{{ url('/') }}">HOME</a></li>
                <li class="{{ Request::path() == 'blog' ? 'current-menu-item' : '' }}"><a href="{{ url('/blog') }}">BLOG</a></li>
                <li class="{{ Request::path() == 'about' ? 'current-menu-item' : '' }}"><a href="{{ url('/about') }}">ABOUT</a>
                    {{--<ul>
                        <li><a href="#">Submenu</a></li>
                        <li><a href="#">Submenu</a></li>
                        <li><a href="#">Submenu</a></li>

                    </ul>--}}
                </li>
                <li class="{{ Request::path() == 'work' ? 'current-menu-item' : '' }}"><a href="{{ url('/work') }}">WORK</a></li>
                <li class="{{ Request::path() == 'contact' ? 'current-menu-item' : '' }}"><a href="{{ url('/contact') }}">CONTACT</a></li>
                {{--<li><a href="http://www.mojo-themes.com/item/zeni-wordpress-theme/?r=ansimuz">WORDPRESS VERSION</a></li>--}}
            </ul>
            <div id="combo-holder"></div>
        </nav>
    </div>
</header>

@yield('content')

<footer>
    <div class="wrapper">

        <ul  class="widget-cols clearfix">
            <li class="first-col">

                <div class="widget-block">
                    <h4>Recent posts</h4>
                    <div class="recent-post">
                        <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                        <div class="post-head">
                            <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                        <div class="post-head">
                            <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <a href="#" class="thumb"><img src="img/dummies/54x54.gif" alt="Post" /></a>
                        <div class="post-head">
                            <a href="#">Pellentesque habitant morbi senectus</a><span> March 12, 2011</span>
                        </div>
                    </div>
                </div>
            </li>

            <li class="second-col">

                <div class="widget-block">
                    <h4>Zeni Template</h4>
                    <p>Hope you find this template useful you are free to use it on personal and commercial projects. See the full license at this <a href="http://luiszuno.com/blog/license" >link</a></p>
                </div>

            </li>

            <li class="third-col">

                <div class="widget-block">
                    <div id="tweets" class="footer-col tweet">
                        <h4>Twitter widget</h4>
                    </div>
                </div>

            </li>

            <li class="fourth-col">

                <div class="widget-block">
                    <h4>Placeholder images</h4>
                    <p>Thanks to <a href="http://www.thebeaststudio.com/" >Moe Pike</a> for sharing his work as place holder images for this preview. Visit his <a href="http://www.thebeaststudio.com/" >website</a> and find more of his awesome work.</p>
                </div>

            </li>
        </ul>


        <div class="footer-bottom">
            <div class="left">Created by <a href="http://www.luiszuno.com" >luiszuno.com</a></div>
            <div class="right">
                <ul id="social-bar">
                    <li><a href="http://www.facebook.com/pages/Ansimuz/224538697564461"  title="Become a fan" class="poshytip"><img src="img/social/facebook.png"  alt="Facebook" /></a></li>
                    <li><a href="https://twitter.com/ansimuz" title="Follow my tweets" class="poshytip"><img src="img/social/twitter.png"  alt="twitter" /></a></li>
                    <li><a href="https://plus.google.com/109030791898417339180/posts"  title="Add to the circle" class="poshytip"><img src="img/social/plus.png" alt="Google plus" /></a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>
<!-- Scripts -->

<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/front.js') }}"></script>


</body>

</html>