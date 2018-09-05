<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kakanjski oglasi - Idealno mjesto za Vaš oglas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/docs.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/js/google-code-prettify/prettify.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/sequence.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontendAssets/assets/color/default.css')}}" rel="stylesheet">

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('frontendAssets/assets/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontendAssets/assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontendAssets/assets/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontendAssets/assets/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontendAssets/assets/ico/apple-touch-icon-57-precomposed.png')}}">
    @yield('styles')

    <!-- =======================================================
      Theme Name: Serenity
      Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <!-- logo -->
                <a class="brand logo" href="index.html"><img src="{{asset('frontendAssets/assets/img/logo.png')}}" alt=""></a>
                <!-- end logo -->
                <!-- top menu -->
                <div class="navigation">
                    <nav>
                        <ul class="nav topnav">
                            <li class="dropdown active">
                                <a href="/">Home</a>
                            </li><li class="dropdown">
                                <a href="index.html">Oglasi</a>
                            </li>
                            <li class="dropdown">
                                <a href="#">Kategorije</a>
                                <ul class="dropdown-menu">
                                    <li><a href="overview.html">Kategorija 1</a></li>
                                    <li><a href="scaffolding.html">Kategorija 2</a></li>
                                    <li><a href="base-css.html">Kategorija 3</a></li>
                                    <li><a href="components.html">Kategorija 4</a></li>
                                    <li><a href="javascript.html">Kategorija 5</a></li>
                                    <li><a href="icons.html">Kategorija 5</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Kontakt</a>
                            </li>
                            <li>
                            @if(Auth::check())
                            {{-- Ne prikazuje se registracija ako je user prijavljen --}}
                            @else
                                <a href="register">Registracija</a>
                            </li>
                            @endif
                            {{-- Ako user nije prijavljen ima opciju prijave --}}
                                <li>
                                    @if(!Auth::check())
                                    <a href="{{route('userPanel.index')}}">Prijava</a>
                                </li>
                            @else
                                <li class="dropdown">
                                    <a href="#"><i class="icon-user"></i>{{Auth::user()->name}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/userPanel">Račun</a></li>
                                        <li><a href="/userPanel/create">Dodaj oglas</a></li>
                                        <li><a href="base-css.html">Admin radnja 3</a></li>
                                        <li><a href="components.html">Admin radnja 4</a></li>
                                        <li><a href="javascript.html">Admin radnja 5</a></li>
                                        <li><a href="{{ url('/logout') }}">Odjava</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
                <!-- end menu -->
            </div>
        </div>
    </div>
</header>

<section id="maincontent">
    @yield('content')
</section>
<!-- Footer
================================================== -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="widget">
                    <h5>Navigacija</h5>
                    <ul class="regular">
                        <li><a href="#">Navigacija 1</a></li>
                        <li><a href="#">Navigacija 2</a></li>
                        <li><a href="#">Navigacija 3</a></li>
                        <li><a href="#">Navigacija 4</a></li>
                        <li><a href="#">Navigacija 5</a></li>
                    </ul>
                </div>
            </div>
            <div class="span4">
                <div class="widget">
                    <h5>Kategorije</h5>
                    <ul class="regular">
                        <li><a href="#">Kategorija 1</a></li>
                        <li><a href="#">Kategorija 1</a></li>
                        <li><a href="#">Kategorija 1</a></li>
                        <li><a href="#">Kategorija 1</a></li>
                    </ul>
                </div>
            </div>
            <div class="span4">
                <div class="widget">
                    <!-- logo -->
                    <a class="brand logo" href="index.html">
                        <img src="{{asset('frontendAssets/assets/img/logo-dark.png')}}" alt="">
                    </a>
                    <!-- end logo -->
                    <address>
                        <p>Informacije i kontakt</p>
                        <strong>Kakanjski Oglasi</strong><br>
                        Telefon: 062/274-120<br>
                        E-mail: kakanjskioglasi@gmail.com<br>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="verybottom">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <p>
                        &copy; Serenity - All right reserved
                    </p>
                </div>
                {{--<div class="span6">--}}
                    {{--<div class="credits">--}}
                        {{--<!----}}
                          {{--All the links in the footer should remain intact.--}}
                          {{--You can delete the links only if you purchased the pro version.--}}
                          {{--Licensing information: https://bootstrapmade.com/license/--}}
                          {{--Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity--}}
                        {{---->--}}
                        {{--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</footer>

<!-- JavaScript Library Files -->
<script src="{{asset('frontendAssets/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/jquery.easing.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/google-code-prettify/prettify.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/modernizr.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/bootstrap.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/jquery.elastislide.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/sequence/sequence.jquery-min.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/sequence/setting.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/application.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/hover/jquery-hover-effect.js')}}"></script>
<script src="{{asset('frontendAssets/assets/js/hover/setting.js')}}"></script>

<!-- Template Custom JavaScript File -->
<script src="{{asset('frontendAssets/assets/js/custom.js')}}"></script>
<script>
    $(document).ready(function() {
        $('li.active').removeClass('active');
        $('a[href="' + location.pathname + '"]').closest('li').addClass('active');
    });
</script>
</body>
</html>
