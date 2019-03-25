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
                    <i class="fa fa-map-marker-alt"></i> Ubicación
                    <input type="text" class="form-control" placeholder="Ciudad, Provincia...">
                </li>
                <li class="list-group-item">    
                        <i class="fas fa-book-open"></i> Tipo
                    <select class="form-control" id="sel1">
                        <option>Subasta</option>
                        <option>Alquiler (Premium)</option>
                    </select> 
                </li>
                <li class="list-group-item">
                    <i class="fas fa-hand-holding-usd"></i> Precio
                    <hr>
                    <div class="range-slider">
                        <input class="range-slider__range" type="range" value="100" min="0" max="100000" step="100">
                        <br>Desde: $<span class="range-slider__value">0</span>
                    </div>
                    <br>
                    <div class="range-slider">
                        <input class="range-slider__range" type="range" value="10000" min="0" max="100000" step="100">
                        <br>Hasta: $<span class="range-slider__value">0</span>
                    </div>
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

<!-- Script de filtro de precios -->
<script>
        var rangeSlider = function(){
          var slider = $('.range-slider'),
              range = $('.range-slider__range'),
              value = $('.range-slider__value');
            
          slider.each(function(){
        
            value.each(function(){
              var value = $(this).prev().attr('value');
              $(this).html(value);
            });
        
            range.on('input', function(){
              $(this).next(value).html(this.value);
            });
          });
        };
        
        rangeSlider();
</script>
<script type="text/javascript">
        
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-36251023-1']);
          _gaq.push(['_setDomainName', 'jqueryscript.net']);
          _gaq.push(['_trackPageview']);
        
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        
</script>

@endsection