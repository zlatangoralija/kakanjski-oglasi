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
                @include('layouts.userInfo')
                <div class="span8">
                    <fieldset>
                        <legend>Dodajte novi oglas</legend>
                    {!! Form::open(['method'=>'POST', 'action'=>'UserPanelController@store', 'files'=>true])!!}

                        {!! Form::label('title','Naslov oglasa') !!}
                        {!! Form::text('title',null, ['class'=>'span8']) !!}
                        <span class="help-block"><p class="text-info">*Upisujete naslov koji će biti vidljiv na naslovnoj stranici</p></span>

                        {!! Form::label('short_description','Kratki opis') !!}
                        {!! Form::text('short_description',null, ['class'=>'span8']) !!}
                        <span class="help-block"><p class="text-info">*Upisujete kratki opis oglasa koji će biti vidljiv na naslovnoj stranici</p></span>

                        {!! Form::label('body','Detaljni opis') !!}
                        {!! Form::textarea('body',null, ['class'=>'span8']) !!}
                        <span class="help-block"><p class="text-info">*Upisujete detaljni opis artikla</p></span>

                        <div class="input-append">
                        {!! Form::label('price','Cijena') !!}
                        {!! Form::text('price',null, ['class'=>'span4']) !!}
                        <span class="add-on">KM </span>
                        {{--<span class="help-block">Upisujete cijenu artikla u brojčanom formatu <strong><em>00.00</em></strong></span>--}}
                        </div>

                        {!! Form::label('condition','Stanje artikla') !!}
                        {!! Form::select('condition', array(1 => 'Novo', 2 => 'Korišteno'), null, ['placeholder' => 'Odaberite stanje artikla...']) !!}
                        <span class="help-block"><p class="text-info">*Odabirete stanje artikla koji postavljate na oglas</p></span>

                        {!! Form::label('category','Kategorija') !!}
                        {!! Form::select('category_id', array('' => 'Odaberite kategoriju...') +$categories, null, ['class'=>'span4']) !!}
                        <span class="help-block"><p class="text-info">*Odaberite kategoriju artikla. Ukoliko ne vidite željenu kategoriju, odaberite <strong><em>ostalo</em></strong></p></span>

                        {!! Form::label('photo_id','Odaberite sliku: ') !!}
                        {!! Form::file('photo_id', null , ['class'=>'span4']) !!}
                        <span class="help-block"><p class="text-info">*Odaberite sliku koja će se prikazivati na naslovnoj stranici. Max veličina: <strong><em>2048 MB</em></strong></p></span>

                        <br>

                        {!! Form::submit('Pošalji', ['class'=>'btn btn-success span2']) !!}

                        {{ Form::close() }}

                    </fieldset>
                    </div>
                    <br>
                    <div class="span12">
                        <blockquote>
                        <p>
                            Vaši oglasi:
                        </p>
                        </blockquote>
                    @include('layouts.post_table')
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection