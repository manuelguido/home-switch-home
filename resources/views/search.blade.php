@extends('layouts.full')

@section('title','Home Switch Home')

@section('content')

<div class="container container-classic">

    <div class="row">

        <div class="col-md-3 filter-card">

            <div class="card">
                <div class="card-header">
                    Filtrar
                </div>
                <form>
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
                            <p><i class="fas fa-calendar-alt"></i> Fecha</p>
                            <input class="form-control" type="text" name="daterange" value="01/01/2019 - 01/15/2019" />

                            <script>
                                $(function() {
                                $('input[name="daterange"]').daterangepicker({
                                    opens: 'left'
                                }, function(start, end, label) {
                                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                                });
                                });
                            </script>
                        </li>
                    </ul>
                </form>
            </div>

        </div>

        <div class="col-md-9">
            <div class="card">
                <ul class="list-group list-group-flush">
                    
                    <!-- Propiedades -->

                    @for ($i = 1; $i <= 15; $i++)

                    <a class="propiedad-card list-group-item" href="/property">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="image">
                                    <img class="object-fit_cover image" src="{{ asset('img/img-pruebas/casa'.rand(1,5).'.jpg') }}" alt="Imagen de propiedad">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2>Propiedad {{ $i }}</h2>
                                        <p class="ubicacion-card color-blue"><i class="fa fa-map-marker-alt"></i> Mar del Plata, Argentina</p>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span>4.1</sp>
                                        <br>
                                        
                                        <div class="col-md-12 second-info color-blue">
                                            <i class="fa fa-bed"></i> Dormitorios: 4<br>
                                            <i class="fa fa-bath"></i> Baños: 2<br>
                                            <i class="fa fa-user"></i> Capacidad: 6<br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-sm card-promo peach-gradient">HotSale!</button>
                                    </div>
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