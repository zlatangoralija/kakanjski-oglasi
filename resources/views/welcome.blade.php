@extends('layouts.index_layout')

@section('content')
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
            <div class="home-posts">
                <div class="span12">
                    <h3>Svi oglasi</h3>
                </div>
                {{-- Ovdje ide petlja for-each za sve oglase --}}
                <div class="span3">
                    <div class="post-image">
                        <a href="post_right_sidebar.html">
                            <img src="{{asset('frontendAssets/assets/img/dummies/blog1.jpg')}}" alt="">
                        </a>
                    </div>
                    <div class="entry-meta">
                        <a href="#"><i class="icon-square icon-48 icon-external-link left"></i></a>
                        <span class="date">Sep 17 <br>
					2013</span>
                    </div>
                    <!-- end .entry-meta -->
                    <div class="entry-body">
                        <a href="post_right_sidebar.html">
                            <h5 class="title">This is a standard post</h5>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet nec, consectetuer adipiscing elit. Aenean commodo ligula eget dolor aenean massa.
                        </p>
                    </div>
                    <!-- end .entry-body -->
                    <div class="clear">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
