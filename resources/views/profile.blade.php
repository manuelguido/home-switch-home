@extends('layouts.full')

@section('title','Contácto')

@section('content')

<div class="container card simple-div" onload="menuSwitch(0)">

    <h1><i class="far fa-user-circle"></i> Datos de Perfil</h1>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item menuItem" onclick="menuSwitch(0)"><i class="far fa-address-card"></i> Información Personal</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(1)"><i class="fa fa-star"></i> Comprar Créditos</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(2)"><i class="far fa-credit-card"></i> Medios de pago</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(3)"><i class="fas fa-power-off"></i> Cerrar Sesión</li>
            </ul>
            </div>
        </div>
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="far fa-edit"></i></span>
                    </div>
                    </div>
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
    </div>
</div>

@endsection