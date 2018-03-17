
@extends('_layouts.app')

@section('content')

<section class="container-fluid">
    <div class="container">

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
            <img src="{{ asset('img/city_1.jpg') }}"  style="width:100%" alt="...">
            <div class="carousel-caption">
                ...
            </div>
            </div>
            <div class="item">
            <img src="{{ asset('img/city_2.jpg') }}"  style="width:100%" alt="...">
            <div class="carousel-caption">
                ...
            </div>
            </div>
            ...
        </div>
        
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
</section>

<br />

<section class="container-fluid">
    <section class="container">
        <div class="row">
            <div class="text-center">
                <h2>Info Empresa</h2>
            </div>
        </div>
    </section>
</section>



<section class="container-fluid">
    <section class="container">
        <div class="row">
            <div class="col-sm-4">
                <a href="http://servicio.indecopi.gob.pe/appSACPresentaReclamo/pgw_index.seam"
                    target="_blank">
                    <img src="{{ asset('img/city_2.jpg') }}" class="img-responsive" alt="">
                    <h5>Prenseta tu reclamo</h5>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ url('sanciones') }}">
                    <img src="{{ asset('img/city_2.jpg') }}" class="img-responsive" alt="">
                    <h5>Las peores empresas</h5>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ url('como-mejorar') }}">
                    <img src="{{ asset('img/city_2.jpg') }}"  class="img-responsive"alt="">
                    <h5>Sancionados</h5>
                </a>
            </div>
        </div>
    </section>
</section>

@endsection