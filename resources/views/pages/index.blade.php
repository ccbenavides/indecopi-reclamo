
@extends('_layouts.app')

@section('content')
<!-- Carousel -->
<div id="myCarousel" class="carousel slide container" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('img/city_1.jpg') }}" alt="First slide" style="width:100%">
    </div>
    <div class="item">
      <img src="{{ asset('img/city_2.jpg') }}" alt="First slide" style="width:100%">
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->
<br />

<section class="container-fluid">
    <section class="container">
        <div class="row">
            <div class="text-center">
                <h2>Consulta mi Reclamo o Denuncia </h2>
            </div>
        </div>
    </section>
</section>

<br />

<section class="container-fluid">
    <form class="container form-inline well" action="{{ url('/buscar-empresa') }}">
      <div class="form-group col-sm-3">
        <select name="tipo" id="" class="form-control" style="width:100%">
            <option value="reclamo" selected>RECLAMO</option>
            <option value="denuncia">DENUNCIA</option>
        </select>
      </div>
      <div class="form-group col-sm-6">
        <input type="text" 
            class="form-control" 
            name="codigo"
            style="width:100%"
            placeholder="INGRESA ">
      </div>
      <button class="btn btn-primary col-sm-3">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        Buscar
      </button>
    </form>
</section>

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
                    <h5>Presenta tu reclamo</h5>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="{{ url('sanciones?anio=2017') }}">
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

@section('jquery')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
@endsection