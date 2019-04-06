@extends('layouts.nav')

@section('title','Contácto')

@section('content')

<style>
    body {
        background: #fff !important;
    }
</style>

<!-- Se declara esto solo para cargar el js de panel -->
<body onload="menuSwitch(0)">

<div class="container-fluid simple-div panel-div">

    <h1 id="profile-title"></h1>
    <hr>

    <div class="row">
        <div class="col-md-2">
            <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item menuItem" onclick="menuSwitch(0)"><i class="far fa-address-card"></i> Información Personal</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(1)"><i class="fa fa-star"></i> Mis Créditos</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(2)"><i class="fas fa-award"></i> Suscripción premium</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(3)"><i class="fas fa-file-signature"></i> Historial de cobro</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(4)"><i class="far fa-credit-card"></i> Medios de pago</li>
                <li class="list-group-item menuItem" onclick="menuSwitch(5)"><i class="fas fa-lock"></i> Cambiar Contraseña</li>
            </ul>
            </div>
        </div>
    
        <!-- Inicio de containers cambiables -->

        <!-- Informacion Personal -->
        <div class="container-fluid col-md-10 subItem">
            <div class="row">                
                <div class="col-md-7">
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
                            <span type="button" class="btn btn-outline-default waves-effect" id="editInfo" onclick="saveInfo()">Editar Información <i class="far fa-edit"></i></span>
                            <button type="submit" class="btn btn-outline-success waves-effect" id="saveInfo" style="display: none;">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{ asset('img/img-pruebas/perfil.jpg') }}" class="avatar profile-pic" alt="Avatar">
                    <br>
                    <br>
                    <form>
                        <label class="btn btn-outline-default btn-file">
                                <i class="fas fa-images"></i> Cambiar Imagen<input type="file" style="display: none;">
                        </label>
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

        <!-- Suscripción Premium -->
        <div class="container-fluid col-md-8 subItem">
            <h2>Estado: usuario gratuito</h2>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h4>Los usuarios gratuitos sólo pueden acceder a subastas dentro del sitio.</h4>
                    <h4>Si te conviertes en usuario premium tendras acceso a alquileres exclusivos.</h4>
                    <p>Para convertirte en usuario premium solo tienes que hacercarte a nuestras oficinas, el costo mensual es de $000 por mes. </p>
                </div>

            </div>
        </div>

        <!-- Historial de cobro -->
        <div class="container-fluid col-md-8 subItem">
                    
            <ul class="fluid list-group">
                                        
                @for ($i = 0; $i < 8; $i++)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-3">
                                Fecha<br>13/04/2018
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h6>Alquier {{ $i + 1 }}</h6>
                                        <p>- ${{ rand(100,4000) }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <p><i class="fab fa-cc-mastercard"></i> Mastercard</p>
                                        <p>**** **** **** {{ rand(1000,9999) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>                            
                @endfor

            </ul>

        </div>

        <!-- Medios de Pago -->
        <div class="container-fluid col-md-8 subItem">
            <div class="row justify-content-md-center text-center">
                <div class="col-md-12">
                    <h2>Tus medios de pago:</h2>
                    <br>
                    <div class="row">
                        <div class="col-md-4 medio-de-pago-card-outer">
                            <a  href="/" class="col-md-12 card medio-de-pago-card">
                                <div class="card-body">
                                    <p><i class="fab fa-cc-mastercard"></i> Mastercard</p>
                                    <p>**** **** **** 3433</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 medio-de-pago-card-outer">
                            <a  href="/" class="col-md-12 card medio-de-pago-card">
                                <div class="card-body">
                                    <p><i class="fab fa-cc-visa"></i> Visa</p>
                                    <p>**** **** **** 7171</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 medio-de-pago-card-outer">
                            <a  href="/" class="col-md-12 card medio-de-pago-card">
                                <div class="card-body">
                                    <p><i class="fab fa-cc-amex"></i> American</p>
                                    <p>**** **** **** 3433</p>
                                </div>
                            </a>
                        </div>
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
                            <div class="card cursor-p col-md-5 btn btn-outline-info" id="showCreditForm">
                                <div class="card-body">
                                    <i class="far fa-credit-card"></i> Tarjeta de crédito
                                </div>
                            </div>
                            
                            <div class="card cursor-p col-md-5 btn btn-outline-info" id="showDebitForm">
                                <div class="card-body cursor-p">
                                    <i class="fas fa-cash-register"></i> Débito Automático
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 collapse multi-collapse" id="creditForm">
                                <form class="form-horizontal" role="form">
                                        <fieldset>
                                          <legend>Payment</legend>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-holder-name">Name on Card</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="card-holder-name" id="card-holder-name" placeholder="Card Holder's Name">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="card-number">Card Number</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" name="card-number" id="card-number" placeholder="Debit/Credit Card Number">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="expiry-month">Expiration Date</label>
                                            <div class="col-sm-9">
                                              <div class="row">
                                                <div class="col-xs-3">
                                                  <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                                                    <option>Month</option>
                                                    <option value="01">Jan (01)</option>
                                                    <option value="02">Feb (02)</option>
                                                    <option value="03">Mar (03)</option>
                                                    <option value="04">Apr (04)</option>
                                                    <option value="05">May (05)</option>
                                                    <option value="06">June (06)</option>
                                                    <option value="07">July (07)</option>
                                                    <option value="08">Aug (08)</option>
                                                    <option value="09">Sep (09)</option>
                                                    <option value="10">Oct (10)</option>
                                                    <option value="11">Nov (11)</option>
                                                    <option value="12">Dec (12)</option>
                                                  </select>
                                                </div>
                                                <div class="col-xs-3">
                                                  <select class="form-control" name="expiry-year">
                                                    <option value="13">2013</option>
                                                    <option value="14">2014</option>
                                                    <option value="15">2015</option>
                                                    <option value="16">2016</option>
                                                    <option value="17">2017</option>
                                                    <option value="18">2018</option>
                                                    <option value="19">2019</option>
                                                    <option value="20">2020</option>
                                                    <option value="21">2021</option>
                                                    <option value="22">2022</option>
                                                    <option value="23">2023</option>
                                                  </select>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-sm-3 control-label" for="cvv">Card CVV</label>
                                            <div class="col-sm-3">
                                              <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Security Code">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                              <button type="button" class="btn btn-success">Pay Now</button>
                                            </div>
                                          </div>
                                        </fieldset>
                                      </form>
                        </div>
                    </div>
                </div>

            </div>
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
                            <button class="btn btn-outline-default waves-effect" id="editInfo" onclick="saveInfo()">Cambiar contraseña <i class="fas fa-key"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

    </div>

</div>

@endsection