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
                                Ovdje vršite izmjene za Vaš korinsički račun.
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
                <legend>Izmjena korisničkih podataka</legend>
                <div class="span3">
                    <img src="/images/{{$user->photo ? $user->photo->path : "placeholder.png"}}" class="img-polaroid">
                </div>
                <div class="span9">

                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UserPanelController@update', $user->id], 'files'=>true])!!}
                        <div class="span4">
                            {!! Form::label('full_name','Ime i prezime: ') !!}
                            {!! Form::text('full_name', null, ['class'=>'span4']) !!}
                        </div>
                        <div class="span4">
                            {!! Form::label('name','Korisničko ime: ') !!}
                            {!! Form::text('name', null, ['class'=>'span4']) !!}
                        </div>
                        <div class="span4">
                            {!! Form::label('region','Regija/Kanton: ') !!}
                            {!! Form::text('region', null, ['class'=>'span4']) !!}
                        </div>
                        <div class="span4" >
                            {!! Form::label('city','Grad: ') !!}
                            {!! Form::text('city', null, ['class'=>'span4']) !!}
                        </div>
                        <div class="span4">
                            {!! Form::label('post_number','Poštanski broj: ') !!}
                            {!! Form::text('post_number', null, ['class'=>'span4']) !!}
                        </div>
                        <div class="span4">
                            {!! Form::label('address','Adresa: ') !!}
                            {!! Form::text('address', null , ['class'=>'span4']) !!}
                        </div>
                        <div class="span4">
                            {!! Form::label('birthday','Datum rođenja: ') !!}
                            {!! Form::text('birthday', null , ['class'=>'span4']) !!}
                        </div>
                        <div class="span4">
                            {!! Form::label('phone_number','Broj telefona: ') !!}
                            {!! Form::text('phone_number', null , ['class'=>'span4']) !!}
                        </div>
                        <div class="span4">
                            {!! Form::label('email','E-mail: ') !!}
                            {!! Form::email('email', null , ['class'=>'span4']) !!}
                        </div>
                        <div class="span4">
                            {!! Form::label('photo_id','Profilna slika: ') !!}
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