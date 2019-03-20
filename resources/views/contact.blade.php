@extends('layouts.full')

@section('title','Contácto')

@section('content')

<div class="container card contact-div">

    <h1><i class="fa fa-envelope"></i>&nbsp;Contácto</h1>
    <hr>
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre..." required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Asunto</label>
            <input type="text" class="form-control" placeholder="Asunto..." required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensaje</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" required></textarea>
        </div>
        <button type="submit" class="btn btn-info float-right">Enviar</button>
    </form>

</div>

@endsection