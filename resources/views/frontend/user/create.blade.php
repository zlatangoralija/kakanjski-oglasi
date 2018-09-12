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
                <div class="span12">
                        <legend>Dodajte novi oglas</legend>
                    {!! Form::open(['method'=>'POST', 'action'=>'UserAdsController@store', 'files'=>true])!!}

                        <div class="span5">
                            {!! Form::label('title','Naslov oglasa') !!}
                            {!! Form::text('title',null, ['class'=>'span5']) !!}
                            <span class="help-block"><p class="text-info">*Upisujete naslov koji će biti vidljiv na naslovnoj stranici</p></span>
                        </div>
                        <div class="span5">
                            {!! Form::label('short_description','Kratki opis') !!}
                            {!! Form::text('short_description',null, ['class'=>'span5']) !!}
                            <span class="help-block"><p class="text-info">*Upisujete kratki opis oglasa koji će biti vidljiv na naslovnoj stranici</p></span>
                        </div>
                        <div class="span5">
                            {!! Form::label('body','Detaljni opis') !!}
                            {!! Form::textarea('body',null, ['class'=>'span5']) !!}
                            <span class="help-block"><p class="text-info">*Upisujete detaljni opis artikla</p></span>
                        </div>
                        <div class="span6">
                            <div class="input-append">
                                {!! Form::label('price','Cijena') !!}
                                {!! Form::text('price',null, ['class'=>'span5']) !!}
                                <span class="add-on">KM </span>
                            </div>
                            <span class="help-block"><p class="text-info">*Upisujete cijenu artikla u formatu <stron><em>00.00</em></stron></p></span>
                        </div>
                        <div class="span5">
                            {!! Form::label('condition','Stanje artikla') !!}
                            {!! Form::select('condition', array(1 => 'Novo', 2 => 'Korišteno'), null, ['placeholder' => 'Odaberite stanje artikla...']) !!}
                            <span class="help-block"><p class="text-info">*Odabirete stanje artikla koji postavljate na oglas</p></span>
                        </div>
                        <div class="span5">
                            {!! Form::label('category','Kategorija') !!}
                            {!! Form::select('category_id', array('' => 'Odaberite kategoriju...') +$categories, null, ['class'=>'span5']) !!}
                            <span class="help-block"><p class="text-info">*Odaberite kategoriju artikla. Ukoliko ne vidite željenu kategoriju, odaberite <strong><em>ostalo</em></strong></p></span>
                        </div>
                        <div class="span5">
                        {!! Form::label('photo_id','Odaberite sliku: ') !!}
                        {!! Form::file('photo_id', null , ['class'=>'span4']) !!}
                        <span class="help-block"><p class="text-info">*Odaberite sliku koja će se prikazivati na naslovnoj stranici. Max veličina: <strong><em>2048 MB</em></strong></p></span>
                        </div>
                        <br>
                    <div class="span10">
                        {!! Form::submit('Spremi', ['class'=>'btn btn-success span2']) !!}

                        {{ Form::close() }}
                    </div>
                    <br>
                <div class="row">
                    <div class="span12">
                        <legend>Vaši oglasi</legend>
                        @include('layouts.post_table')
                     </div>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection