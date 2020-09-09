<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('google')

    @yield('facebook')
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    @yield('meta')


    <meta name="viewport" content="initial-scale=1 maximum-scale=1"/>

    @yield('no-index')


    <title>FREE Ultimate Guide to CDA Interviews: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Structured
        Interview. </title>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/styles.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/colourtag-page0.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/flexslider.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/contentcenter.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/ec9on.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/rimage.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/ssoff.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/sslide.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/sidenone.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/olight90.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/fontarial.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/title26.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/fontarialspan.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/bts46.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/bt60.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/fontarialnav.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/nav17.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/fontarialside.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/fontarialheader.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/fontarialcontent.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/font13.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('cover-image')
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="/js/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript" src="/js/javascript.js"></script>
    <script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>


    <script type="text/javascript" src="/js/function.js"></script>
    <script type="text/javascript" src="/js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="/js/jquery.flexslider.js"></script>


    <link rel='stylesheet' type='text/css' media='all' href='/css/stacks.css'/>
    <!--[if lte IE 7]>
    <link rel='stylesheet' type='text/css' media='all' href='/css/stacks_ie.css'/>
    <![endif]-->
    <link rel='stylesheet' type='text/css' media='all' href='/css/stacks_page_page0.css'/>
    <script type='text/javascript' charset='utf-8' src='/js/stacks_page_page0.js'></script>

    <meta property="og:image" content="http://cdainterview.com/resources/cda-interview-guide.jpg"/>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @yield('advertising')
</head>
<body>



<div id="wrapper">


    <div id="hwrap">
        <header class="" role="navigation">
            <div id="headwrap">

                <div id="titlelogo">
                    <a href="https://cdainterview.com/">
                        <div id="logo"><img src="/images/bemo-logo2.png" width="167" height="100"
                                            alt="Site logo"/></div>
                        <h1></h1></a>
                    <h2></h2>
                </div>


                <div id="mwrap">
                    <div id="lt"></div>
                    <div id="lm"></div>
                    <div id="lb"></div>
                </div>


                <div id="nwrap">
                    
                    <nav class="navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class=" ">
                        <ul class="">
                            <li id="current" class="nav-item"><a class="nav-link" href="{{ route('home') }}" rel="self" id="current">Main</a></li>
                            <li class="nav-item"><a class="nav-link"href="{{ route('contact-us') }}" rel="self">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li id="current" class="nav-item"><a class="nav-link" href="{{ route('home') }}" rel="self" id="current">Main</a></li>
                            <li class="nav-item"><a class="nav-link"href="{{ route('contact-us') }}" rel="self">Contact Us</a></li>
                        </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </header>


        <div class="banner video_banner">
            <div id="feature">
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div id="container">
        @yield('page')
    </div>
    <footer>

        <div id="footer">&copy;2013-2016 BeMo Academic Consulting Inc. All rights reserved. <a
                href="http://www.cdainterview.com/disclaimer-privacy-policy.html" target="_blank"><span
                    style="text-decoration:underline;">Disclaimer & Privacy Policy</span></a> <a href="#"
                                                                                                 id="rw_email_contact"><span
                    style="text-decoration:underline;">Contact Us</span></a>

        </div>

        <div id="socialicons">
            <div id="socialicons1"></div>
        </div>

    </footer>


</div>

<a href="#" class="scrollup">Scroll</a>

</body>
</html>
