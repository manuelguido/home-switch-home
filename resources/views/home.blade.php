@extends('layouts.full')

@section('title','Home Switch Home')

@section('content')

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade home-carousel-height" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        
        @php
            $amountSlides = 5;
        @endphp
        
        @for ($i = 0; $i < $amountSlides; $i++)
            <li data-target="#carousel-example-2" data-slide-to="0" @if ($i==0) class="active" @endif ></li>
        @endfor
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner home-carousel-height home-carousel" role="listbox">
        
        @for ($j = 0; $j < $amountSlides; $j++)
                    
            <a href="/property" class="carousel-item cursor-p @if ($j==0) active @endif "> 
                <div class="view cursor-p">
                    <img class="d-block w-100 cursor-p" src="{{ asset('img/img-pruebas/wallpaper'.($j + 1).'.jpg') }}" alt="Imagen de propiedad">
                <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
                </div>
            </a>

        @endfor

    </div>
    <!--/.Slides-->
    <!--Controels-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->

<div class="container-fluid container-classic container-width-80">
<!-- Container -->
    <div class="row">
        <h2 class="py-3">Descubre tiempos compartidos</h2>
        <!-- Container -->
        <div class="row">

        @for ($k = 1; $k < 9; $k++)

        <!-- Column -->
        <div class="col-md-3 mb-3 d-flex align-items-stretch">
      
          <!--Card-->
          <a class="card cursor-p card-home" href="/property">
      
            <p class="btn card-view-over"></p>

            <!--Card image-->
            <div class="view cursor-p" style="height: 60% !important;">
                <img class="card-img-top" src="{{ asset('img/img-pruebas/casa'.$k.'.jpg') }}" style="height: 100% !important;">
                <div class="mask rgba-white-slight"></div>
            </div>
      
            <!--Card content-->
            <div class="card-body">
                <!--Title-->
                <h3 class="card-title">Propiedad</h3>
                <p class="ubicacion-card color-blue"><i class="fa fa-map-marker-alt"></i> Mar del Plata, Argentina</p>
                
                <hr>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
            </div>
      
        </a>
          <!--/.Card-->
      
        </div>
        <!-- Column -->


        @endfor
      
    </div>
    <!-- Container -->
        


    </div>
<!-- Container -->
</div>
@endsection