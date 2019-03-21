@extends('layouts.full')

@section('title','Contácto')

@section('content')

<!-- Se declara esto solo para cargar el js de panel -->
<body onload="menuSwitch(0)">

<div class="container card simple-div profile-div">

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

        <!-- Informacion Personal -->
        <div class="container-fluid col-md-8 subItem">
            <div class="row">                
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
                        <br>
                        <div class="form-group text-center">
                            <span class="btn btn-outline-secondary cursor-p" id="editInfo" onclick="saveInfo()">Editar Información <i class="far fa-edit"></i></span>
                            <button type="submit" class="btn btn-success" id="saveInfo" style="display: none;">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset('img/img-pruebas/perfil.jpg') }}" class="avatar profile-pic" alt="Avatar">
                    <br>
                    <br>
                    <span class="btn btn-outline-secondary cursor-p">Cambiar Imagen <i class="fas fa-images"></i></span>
                </div>
            </div>
        </div>

        <!-- Comprar Créditos -->
        <div class="container-fluid col-md-8 subItem">
        </div>

        <!-- Medios de Pago -->
        <div class="container-fluid col-md-8 subItem">
        </div>
        
        <!-- Cambiar Contraseña -->
        <div class="container-fluid col-md-8 subItem">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <form >
                        <div class="form-group">
                            <label>Contraseña actual</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Nueva Contraseña:</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Repetir nueva contraseña:</label>
                            <input type="password" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group text-center">
                            <button class="btn btn-outline-secondary cursor-p" id="editInfo" onclick="saveInfo()">Cambiar contraseña <i class="fas fa-key"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

    </div>

</div>

@endsection