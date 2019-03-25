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
            <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item menuItem" onclick="menuSwitch(0)"><i class="far fa-address-card"></i> Información Personal</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(1)"><i class="fa fa-star"></i> Mis Créditos</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(2)"><i class="far fa-credit-card"></i> Medios de pago</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(3)"><i class="fas fa-file-signature"></i> Historial de cobro</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(4)"><i class="fas fa-lock"></i> Cambiar Contraseña</li>
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
                    <form>
                        <div class="form-group btn btn-outline-secondary cursor-p" style="padding: 4px 10px 0 10px;">
                            <label for="cambiarImagen" class="cursor-p">Cambiar imagen <i class="fas fa-images"></i></label>
                            <input type="file" class="form-control-file" id="cambiarImagen" style="display: none; ">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Comprar Créditos -->
        <div class="container-fluid col-md-8 subItem">
            <h2>Créditos disponibles: 2</h2>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h4>Necesitas más créditos?</h4>
                </div>
            </div>
        </div>

        <!-- Medios de Pago -->
        <div class="container-fluid col-md-8 subItem">
            <div class="row justify-content-md-center text-center">
                <div class="col-md-12">
                    <h2>Tus medios de pago:</h2>
                    <br>
                    <div class="row">
                        <a href="/" class="col-md-4 card medio-de-pago-card">
                            <div class="card-body">
                                <p><i class="fab fa-cc-mastercard"></i> Mastercard</p>
                                <p>**** **** **** 3433</p>
                            </div>
                        </a>
                        <a href="/" class="col-md-4 card medio-de-pago-card">
                            <div class="card-body">
                                <p><i class="fab fa-cc-visa"></i> Visa</p>
                                <p>**** **** **** 7171</p>
                            </div>
                        </a>
                        <a href="/" class="col-md-4 card medio-de-pago-card">
                            <div class="card-body">
                                <p><i class="fab fa-cc-amex"></i> American</p>
                                <p>**** **** **** 3433</p>
                            </div>
                        </a>
                        <a href="/" class="col-md-4 card medio-de-pago-card">
                            <div class="card-body">
                                <p><i class="fas fa-money-check-alt"></i> Débito</p>
                                <p>CBU: **************021 </p>
                            </div>
                        </a>
                    </div>
                    <hr>
                </div>

                <div class="col-md-12">
                    <h2>Parece que aún no has registrado ningun medio de pago.<br>Házlo ahora!</h2>
                    <hr>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-primary" data-toggle="collapse" href="#creditDebit" role="button" aria-expanded="false" aria-controls="creditDebit">Agregar método de pago <i class="far fa-credit-card"></i></a>
                    <br>
                    <br>
                    <div class="row collapse multi-collapse" id="creditDebit">
                        <div class="row container-fluid justify-content-md-center" style="margin-bottom: 20px;">
                            <div class="card cursor-p col-md-6 btn btn-outline-info" id="showCreditForm">
                                <div class="card-body">
                                    <i class="far fa-credit-card"></i> Tarjeta de crédito
                                </div>
                            </div>
                            
                            <div class="card cursor-p col-md-6 btn btn-outline-info" id="showDebitForm">
                                <div class="card-body cursor-p">
                                    <i class="fas fa-cash-register"></i> Débito Automático
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 collapse multi-collapse" id="creditForm">
                            <form>
                                <h4>Nueva tajeta de crédito</h4>
                                <div class="form-group">
                                    <label>Nombre en la tarjeta</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 collapse multi-collapse" id="debitForm">
                            <form>
                                <h4>Nuevo débito automático</h4>
                                <div class="form-group">
                                    <label>CBU</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Historial de cobro -->
        <div class="container-fluid col-md-8 subItem">
                    
            <ul class="fluid list-group">
                                        
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-3">
                            Fecha<br>13/04/2018
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-8">
                                    <h6>Alquier</h6>
                                    <p>-$190</p>
                                </div>
                                <div class="col-md-4">
                                    <p><i class="fab fa-cc-mastercard"></i> Mastercard</p>
                                    <p>**** **** **** 5544</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>                            
      
            </ul>

        </div>
        
        <!-- Cambiar Contraseña -->
        <div class="container-fluid col-md-8 subItem">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <form>
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