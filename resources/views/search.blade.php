@extends('layouts.full')

@section('title','Home Switch Home')

@section('content')

<div class="container container-classic">

    <div class="row">

        <div class="col-md-3">

            <div class="card">
            <div class="card-header">
                Filtrar
            </div>
            <ul class="filtros list-group list-group-flush">
                <li class="list-group-item">
                    <p><i class="fa fa-map-marker-alt"></i> Ubicación</p>
                    <input type="text" class="form-control" placeholder="Ciudad, Provincia...">
                </li>
                <li class="list-group-item">    
                    <p><i class="fas fa-book-open"></i> Tipo</p>
                    <!-- Default checked -->
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input cursor-p" id="alquilerSwitch" checked>
                        <label class="custom-control-label cursor-p" for="alquilerSwitch">Alquiler</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input cursor-p" id="subastaSwitch" checked>
                        <label class="custom-control-label cursor-p" for="subastaSwitch">Subasta</label>
                    </div>
                </li>
                <li class="list-group-item">
                    <p><i class="fas fa-hand-holding-usd"></i> Precio
                        <hr>
                        <input type="text" id="amount" readonly style="border:0;">
                    </p>
                    <div id="slider-range"></div>
                </li>
                <li class="list-group-item">    
                    <p><i class="fas fa-sort"></i> Ordenar por:</p>
                    <select class="form-control" id="sel1">
                        <option>Menor a mayor</option>
                        <option>Mayor a menor</option>
                    </select> 
                </li>
            </ul>
            </div>

        </div>

        <div class="col-md-9">
            <div class="card">
                <ul class="list-group list-group-flush">
                    
                    <!-- Propiedades -->

                    @for ($i = 1; $i <= 5; $i++)

                    <a class="propiedad-card list-group-item" href="/search">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="square">
                                    <img class="card-img-top card-img" src="{{ asset('img/img-pruebas/casa'.$i.'.jpg') }}" alt="Imagen de propiedad">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Propiedad {{ $i }}</h2>
                                        <p class="ubicacion-card color-blue"><i class="fa fa-map-marker-alt"></i> Mar del Plata, Argentina</p>
                                        <p>Disponibilidad <br>
                                            13/09/2019 - 13/03/2020
                                        </p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span>4.1</sp>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12 second-info color-blue">
                                            <i class="fa fa-bed"></i> Dormitorios: 4<br>
                                            <i class="fa fa-bath"></i> Baños: 2<br>
                                            <i class="fa fa-user"></i> Capacidad: 6<br>
                                        </div>
                                        
                                            <p class="btn btn-success card-price float-right">$ 1999</p>
                                        
                                    </div>
                                </div>
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </a>

                    @endfor

                </ul>
            </div>
            <!-- Paginación -->
            <br>
            <nav>
                <ul class="pagination pg-blue justify-content-center">
                    <li class="page-item">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    </li>
                    <li class="page-item active"><a href="/search" class="page-link">1</a></li>
                    <li class="page-item"><a href="/search" class="page-link">2</a></li>
                    <li class="page-item"><a href="/search" class="page-link">3</a></li>
                    <li class="page-item"><a href="/search" class="page-link">4</a></li>
                    <li class="page-item"><a href="/search" class="page-link">5</a></li>
                    <li class="page-item">
                    <a href="/search" class="page-link" aria-label="Next">
                        <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </li>
                </ul>
            </nav>
            
        </div>

    </div>

</div>

@endsection