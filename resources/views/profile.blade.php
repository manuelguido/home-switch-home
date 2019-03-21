@extends('layouts.full')

@section('title','Contácto')

@section('content')

<!-- Se declara esto solo para cargar el js de panel -->
<body onload="menuSwitch(0)">

<div class="container card simple-div">

    <h1 id="profile-title"></h1>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item menuItem" onclick="menuSwitch(0)"><i class="far fa-address-card"></i> Información Personal</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(1)"><i class="fa fa-star"></i> Comprar Créditos</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(2)"><i class="far fa-credit-card"></i> Medios de pago</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(3)"><i class="fas fa-lock"></i> Cambiar Contraseña</li>
                <li class="list-group-item menuItem" onclick="showLogout()"><i class="fas fa-power-off"></i> Cerrar Sesión</li>
            </ul>
            </div>
        </div>
        <!-- Inicio de containers cambiables -->
        <div class="container-fluid col-md-8 subItem">
            <div class="row">
                <div class="col-md-4 text center">
                    <img src="{{ asset('img/img-pruebas/perfil.jpg') }}" class="avatar profile-pic" alt="Avatar">
                    <br>
                    <br>
                    <button type="button" class="btn btn-outline-secondary">Cambiar Imagen <i class="fas fa-images"></i></button>
                </div>
                <div class="col-md-8">
                    <form>
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" class="form-control personal-input" disabled="true" value="Tú Nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Apellido:</label>
                            <input type="text" class="form-control personal-input" disabled="true" value="Tú Apellido" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control personal-input" disabled="true" value="tuemail@gmail.com" required>
                        </div>
                        <div class="form-group text-center">
                            <a class="btn btn-outline-secondary cursor-p" id="editInfo" onclick="saveInfo()">Editar Información <i class="far fa-edit"></i></a>
                            <button type="submit" class="btn btn-info" id="saveInfo" style="display: none;">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection