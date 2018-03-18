@extends('_layouts.app')

@section('extra-css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
@endsection

@section('content')
<section class="container-fluid">
    <section class="container">
        <section class="text-center">
            <h1 class="linea-title">Busqueda por Mapa</h1>
        </section>
        <section class="space">
            <div class="row">
                <div class="col-md-6">
                    <div id="map"></div>
                </div>
                <div class="col-md-6">

                </div>
            </div>
        </section>
    </section>
</section>
@endsection

@section('extra-js')
<script>
var sedes = [
{ sede : 'INDECOPI SERNAC', position : { lat : -8.1190063, lng: -79.0389714}},
{ sede : 'INDECOPI-AEROPUERTO ZONA INTERNACIONAL', position : { lat : -12.0240527, lng: -77.1127878}},
{ sede : 'INDECOPI-AEROPUERTO ZONA NACIONAL', position : { lat : -12.0240527, lng: -77.1131303}},
{ sede : 'INDECOPI-CONGRESO LA REPÚBLICA', position : { lat : -11.991156, lng: -77.0755147}},
{ sede : 'INDECOPI-GAMARRA', position : { lat : -12.0695818, lng: -77.0167201}},
{ sede : 'INDECOPI-LIMA NORTE', position : { lat : -11.991156, lng: -77.0755147}},
{ sede : 'INDECOPI-MAC CALLAO', position : { lat : -12.0561056, lng: -77.1041305}},
{ sede : 'INDECOPI-MAC EL AGUSTINO', position : { lat : -12.0412631, lng: -77.0057233}},
{ sede : 'INDECOPI-MAC LIMA NORTE', position : { lat : -12.006669, lng: -77.06138}},
{ sede : 'INDECOPI-MAC PIURA', position : { lat : -8.1190063, lng: -80.6436122}},
{ sede : 'INDECOPI-MAC PLAZA NORTE', position : { lat : -5.1853567, lng: -77.06138}},
{ sede : 'INDECOPI-MAC VENTANILLA', position : { lat : -12.006669, lng: -77.129873}},
{ sede : 'INDECOPI-SAN JUAN DE LURIGANCHO', position : { lat : -11.8763998, lng: -77.0099497}},
{ sede : 'INDECOPI-SEDE CENTRAL', position : { lat : -12.003891, lng: -77.0077739}},
{ sede : 'ORI AMAZONAS', position : { lat : -12.0860337, lng: -79.8382791}},

];

var map;

function initMap() {
    var myLatLng = {lat: -12.062642, lng: -77.041345};
    /*
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
    }); */
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: myLatLng
    });
    sedes.map(function(e){

        var marker = new google.maps.Marker({
            position: e.position,
            map: map,
            title: 'Hello World!'
        }); 
        marker.addListener('click', function() {
            alert(e.sede);
        });
    })
}


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7-Az8ha889FBwEJR3JlGIFaXs5sEANPU&callback=initMap" defer></script>
@endsection