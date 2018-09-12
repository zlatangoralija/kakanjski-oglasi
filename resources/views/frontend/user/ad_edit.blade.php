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
                                Ovdje vršite izmjene za Vaše oglase.
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
                <legend>Izmjena podataka oglasa</legend>
                <div class="span3">
                    <img src="/images/{{$ad->photo ? $ad->photo->path : "placeholder.png"}}" class="img-polaroid">
                </div>
                <div class="span9">

                    {!! Form::model($ad, ['method'=>'PATCH', 'action'=>['UserAdsController@update', $ad->id], 'files'=>true])!!}
                    <div class="span4">
                        {!! Form::label('title','Naslov: ') !!}
                        {!! Form::text('title', null, ['class'=>'span4']) !!}
                    </div>
                    <div class="span4">
                        {!! Form::label('short_description','Kratki opis: ') !!}
                        {!! Form::text('short_description', null, ['class'=>'span4']) !!}
                    </div>
                    <div class="span4">
                        {!! Form::label('body','Opis: ') !!}
                        {!! Form::textarea('body', null, ['class'=>'span4']) !!}
                    </div>
                    <div class="span4" >
                        {!! Form::label('price','Cijena: ') !!}
                        {!! Form::text('price', null, ['class'=>'span4']) !!}
                    </div>
                    <div class="span4">
                        {!! Form::label('condition','Stanje: ') !!}
                        {!! Form::select('condition', array('1' => 'Novo', '2' => 'Korišteno')) !!}
                    </div>
                    <div class="span4">
                        {!! Form::label('photo_id','Naslovna slika: ') !!}
                        {!! Form::file('photo_id', null , ['class'=>'span4']) !!}
                    </div>
                    <div class="span10">
                        {!! Form::submit('Spremi', ['class'=>'btn btn-primary span2']) !!}
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection