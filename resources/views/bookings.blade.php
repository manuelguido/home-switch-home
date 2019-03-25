@extends('layouts.full')

@section('title','Home Switch Home')

@section('content')

<div class="container card simple-div">
    <div class="row">
        <div class="col-md-12">
            <h1><i class="far fa-question-circle"></i>&nbsp;Preguntas frecuentes</h1>
            <hr>
            @for ($i = 1; $i < 8; $i++)
                <div class="form-group">
                <h3>Pregunta {{$i}}</h3>
                    <p>Respuesta {{$i}}</p>
                </div>
            @endfor
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12 float-left">
        <br>
        <h2>No encuentras lo que buscas?</h2><br>
        <a href="/contact" class="btn btn-info">Contáctanos</a>
    </div>
</div>

@endsection