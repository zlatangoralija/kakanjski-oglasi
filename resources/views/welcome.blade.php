@extends('layouts.index_layout')

@section('content')
    <section id="intro">
        <div class="jumbotron masthead">
            <div class="container">
                <!-- slider navigation -->
                <div class="sequence-nav">
                    <div class="prev">
                        <span></span>
                    </div>
                    <div class="next">
                        <span></span>
                    </div>
                </div>
                <!-- end slider navigation -->
                <div class="row">
                    <div class="span12">
                        <div id="slider_holder">
                            <div id="sequence">
                                <ul>
                                    <!-- Layer 1 -->
                                    <li>
                                        <div class="info animate-in">
                                            <h2>Bootstrap based</h2>
                                            <br>
                                            <h3>Corporate business</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                            </p>
                                            <a class="btn btn-success" href="#">Learn more &raquo;</a>
                                        </div>
                                        <img class="slider_img animate-in" src="{{asset('frontendAssets/assets/img/slides/sequence/img-1.png')}}" alt="">
                                    </li>
                                    <!-- Layer 2 -->
                                    <li>
                                        <div class="info">
                                            <h2>Smart and fresh</h2>
                                            <br>
                                            <h3>Rich of features</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                            </p>
                                            <a class="btn btn-success" href="#">Learn more &raquo;</a>
                                        </div>
                                        <img class="slider_img" src="{{asset('frontendAssets/assets/img/slides/sequence/img-2.png')}}" alt="">
                                    </li>
                                    <!-- Layer 3 -->
                                    <li>
                                        <div class="info">
                                            <h2>Far from ugly</h2>
                                            <br>
                                            <h3>Latest technology</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, munere commodo ut nam, quod volutpat in per. At nec case iriure, consul recteque nec et.
                                            </p>
                                            <a class="btn btn-success" href="#">Learn more &raquo;</a>
                                        </div>
                                        <img class="slider_img" src="{{asset('frontendAssets/assets/img/slides/sequence/img-3.png')}}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sequence Slider::END-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-suitcase left active"></i>
                <h4>Responsive bootstrap</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                </p>
                <a href="#">Learn more</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-plane left"></i>
                <h4>Lot of features</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                </p>
                <a href="#">Learn more</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-leaf left"></i>
                <h4>Multipurpose template</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                </p>
                <a href="#">Learn more</a>
            </div>
            <div class="span3 features">
                <i class="icon-circled icon-32 icon-wrench left"></i>
                <h4>With latest technology</h4>
                <div class="dotted_line">
                </div>
                <p class="left">
                    Dolorem adipiscing definiebas ut nec. Dolore consectetuer eu vim, elit molestie ei has, petentium imperdiet in pri mel virtute nam.
                </p>
                <a href="#">Learn more</a>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="tagline centered">
                    <div class="row">
                        <div class="span12">
                            <div class="tagline_text">
                                <h2>Don't miss this special offer for limited time only!</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, vix ceteros noluisse intellegat ne, ex nec insolens liberavisse, no adhuc causae nominati duo.
                                </p>
                            </div>
                            <div class="btn-toolbar cta">
                                <a class="btn btn-large btn-color" href="#">
                                    <i class="icon-plane icon-white"></i> Try free version </a>
                                <a class="btn btn-large btn-inverse" href="#">
                                    <i class="icon-shopping-cart icon-white"></i> Buy license </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end tagline -->
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="page-header">
                    <h1>Dobrodošli na kakansjkioglasi.ba <small>Prikazuje se {{$numberOfAds}} oglasa</small></h1>
                </div>
                <ul class="filter">
                    <li class="all active"><a href="#" class="btn btn-color">All categories</a></li>
                    <li class="web"><a href="#" class="btn btn-color">Web design</a></li>
                    <li class="brand"><a href="#" class="btn btn-color">Brand identity</a></li>
                    <li class="graphic"><a href="#" class="btn btn-color">Graphic design</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="home-posts">
                @if($ads)
                    @foreach($ads as $ad)
                        <div class="span3">
                            <div class="post-image">
                                <a href="">
                                    <img src="/thumbnails/{{$ad->photo->path}}" alt="asd">
                                </a>
                                <br>
                            </div>
                            <div class="entry-meta">
                                <a href="#"><i class="icon-square icon-48 icon-external-link left"></i></a>
                                <span class="date">{{ \Carbon\Carbon::parse($ad->created_at)->format('d/m')}} <br>
                            {{ \Carbon\Carbon::parse($ad->created_at)->format('Y')}}</span>
                            </div>
                            <!-- end .entry-meta -->
                            <div class="entry-body">
                                <a href="">
                                    <h5 class="title">{{$ad->title}}</h5>
                                </a>
                                <p>{{$ad->short_description}}</p>
                                <p>Od: {{$ad->user->name}}</p>
                            </div>
                            <!-- end .entry-body -->
                            <div class="clear">
                            </div>
                        </div>
                @endforeach
            @endif
            </div>
        </div>
    </div>
@endsection
