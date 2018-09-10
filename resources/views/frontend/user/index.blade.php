@extends('layouts.index_layout')

@section('content')
    <section id="subintro">
        <div class="jumbotron subhead" id="overview">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="centered">
                            <h3>Dobrodošli na korisnički panel, {{Auth::user()->name}}</h3>
                            <p>
                                Fundamental HTML elements styled and enhanced with extensible classes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- main content goes here --}}
    <section id="maincontent">
        <div class="container">
            <div class="row">
                <legend>Koriniči račun, {{$user->name}}</legend>
                @include('layouts.userInfo')
                <div class="span8" style="float:left;">
                <blockquote>
                    <p>Vaši oglasi:</p>
                </blockquote>
                @include('layouts.post_table')
                </div>
            </div>
        </div>
    </section>
@endsection