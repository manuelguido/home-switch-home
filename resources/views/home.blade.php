@extends('layouts.full')

@section('title','Home Switch Home')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="height: 480px;">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height: 480px;">
        <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('img/img-pruebas/wallpaper1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/img-pruebas/wallpaper2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('img/img-pruebas/wallpaper3.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

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
                    <select class="form-control" id="sel1">
                        <option>Subasta</option>
                        <option>Alquiler (Premium)</option>
                    </select> 
                </li>
                <li class="list-group-item">
                    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
                    <link rel="stylesheet" href="/resources/demos/style.css">
                    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

                    <p><i class="fas fa-hand-holding-usd"></i> Precio
                        <hr>
                        <input type="text" id="amount" readonly style="border:0;">
                    </p>
                    <div id="slider-range"></div>

            </li>
                </li>
                <li class="list-group-item">
                    <button type="submit" class="btn btn-success float-right">Aplicar</button>
                </li>

            </ul>
            </div>

        </div>

        <div class="col-md-9">
            <div class="card">
                <ul class="list-group list-group-flush">
                    
                    <!-- Propiedades -->

                    @for ($i = 1; $i <= 5; $i++)

                    <a class="list-group-item" href="/">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="card-img-top card-img" src="{{ asset('img/img-pruebas/casa'.$i.'.jpg') }}" alt="Imagen de propiedad">
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-8">
                                    <h2>Propiedad {{ $i }}</h2>
                                    <p>Disponibilidad <br>
                                        13/09/2019 - 13/03/2020
                                    </p>
                                    </div>
                                    <div class="col-md-4">
                                        Valoraciones<br>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 second-info">
                                        <p class="card-price float-right">$ 1999</p>
                                        <i class="fa fa-bed"></i> Dormitorios: 4<br>
                                        <i class="fa fa-bath"></i> Baños: 2<br>
                                        <i class="fa fa-user"></i> Capacidad: 6
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
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Antes</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>
            
        </div>

    </div>

</div>

@endsection