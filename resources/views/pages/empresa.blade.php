@extends('_layouts/app') 

@section('extra-css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css"> 
@endsection 

@section('content')


    <div class=" row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">                
                <div class="carousel-inner">
                 
                  <div class="item active">
                    <img src="http://placehold.it/900x200/f39c12/ffffff" alt="Second slide" width="100%">

                    <div class="carousel-caption">
                      <h2>Second Slide</h2>
                    </div>
                  </div>
                 
                </div>
               
              </div>
    </div>

<div class="row">
    <div class="col-md-6 panel-body">
        <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-yellow">
              
              <!-- /.widget-user-image -->
              <h3 class="widget-user-username"><strong> {{ $data['PROVEEDOR (RAZÓN SOCIAL)'] }}</strong></h3>
              <h5 class="widget-user-desc"><strong>(DNI/RUC)</strong> {{ $data['DOCUMENTO IDENTIFICACIÓN (DNI/RUC)'] }}</h5>
            </div>
            <div class="box-footer no-padding">
              <ul class="nav nav-stacked">
              <li><a>DEPARTAMENTO <span class="pull-right">{{ $data['DEPARTAMENTO'] }}</span></a></li>
              <li><a>PROVINCIA <span class="pull-right">{{ $data['PROVINCIA'] }}</span></a></li>
              <li><a>DISTRITO <span class="pull-right">{{ $data['DISTRITO'] }}</span></a></li>
              <li><a>ACTIVIDAD ECONÓMICA <span class="pull-right">{{ $data['ACTIVIDAD ECONÓMICA'] }}</span></a></li>
              <li><a>RUBRO <span class="pull-right">{{ $data['RUBRO'] }}</span></a></li>
              </ul>
            </div>
        </div>
    </div>

    <div class="col-md-6 panel-body">
        @if($empresa['LATITUD'] != null  && $empresa['LONGITUD'] != null)
            <div id="map"  class="mapa" style="height:300px"></div>
        @endif
    </div>

</div>
<div class="col-md-12">
<div class="box box-warning" >
        <div class="box-header with-border">
          <h3 class="box-title">Denuncias</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        @if(count($sanciones))
<table class="table display" style="width:100%" id="table-denuncia">
    <thead>
        <tr>
            <th>
                ACTIVIDAD ECONÓMICA
            </th>
            <th>
                DEPARTAMENTO'
            </th>
            <th>
                PROVINCIA'
            </th>
            <th>
                DISTRITO
            </th>
            <th>
                ACTIVIDAD ECONÓMICA
            </th>
            <th>
                DOCUMENTO IDENTIFICACIÓN (DNI/RUC)
            </th>
            <th>
                RUBRO
            </th>
            <th>
                MOTIVO DE RECLAMO
            </th>
            <th>
                FORMA DE CONCLUSIÓN
            </th>
            <th>
                DURACIÓN DEL RECLAMO
            </th>
            <th>
                NÚMERO DE RECLAMO
            </th>
            <th>
                AÑO DE RECLAMO
            </th>

            <th>
                OFICINAS DEL INDECOPI EN EL DEPARTAMENTO DEL RECLAMANTE
            </th>
            <th>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($sanciones as $sancion)
        <tr>
            <td>
                {{ $sancion['ACTIVIDAD ECONÓMICA'] }}
            </td>
            <td>
                {{ $sancion['DEPARTAMENTO'] }}
            </td>
            <td>
                {{ $sancion['PROVINCIA'] }}
            </td>
            <td>
                {{ $sancion['DISTRITO'] }}
            </td>
            <td>
                {{ $sancion['ACTIVIDAD ECONÓMICA'] }}
            </td>
            <td>
                {{ $sancion['DOCUMENTO IDENTIFICACIÓN (DNI/RUC)'] }}
            </td>
            <td>
                {{ $sancion['MATERIA RIS= PRODUCTO/SERVICIO'] }}
            </td>
            <td>
                {{ $sancion['HECHO INFRACTOR'] }}
            </td>
            <td>
                {{ $sancion['TIPO DE SANCIÓN_(AMONESTACIÓN O MULTA)'] }}
            </td>
            <td>
                {{ $sancion['MONTO DE MULTA (UITs)'] }}
            </td>
            <td>
                {{ $sancion['NÚMERO DE RESOLUCIÓN'] }}
            </td>
            <td>
                {{ $sancion['AÑO DE RESOLUCIÓN'] }}
            </td>

            <td>
                {{ $sancion['OFICINAS DEL INDECOPI SEGÚN DEPARTAMENTO DONDE OCURRIÓ EL CONFLI'] }}
            </td>
            <td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endif
        </div>
       
      </div>
</div>
<div class="col-md-12">
<div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Sanciones</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        @if(count($reclamos))

<table class="table display" id="table-reclamo" style="width:100%">
    <thead>
        <tr>
            <th>
                ACTIVIDAD ECONÓMICA
            </th>
            <th>
                DEPARTAMENTO'
            </th>
            <th>
                PROVINCIA'
            </th>
            <th>
                DISTRITO
            </th>
            <th>
                RAZÓN SOCIAL
            </th>
            <th>
                DNI/RUC
            </th>
            <th>
                MATERIA
            </th>
            <th>
                HECHO INFRACTOR
            </th>
            <th>
                TIPO DE SANCIÓN
            </th>
            <th>
                MULTA
            </th>
      

        </tr>
    </thead>
    <tbody>
        @foreach($reclamos as $reclamo)
        <tr>
            <td>
                {{ $sancion['ACTIVIDAD ECONÓMICA'] }}
            </td>
            <td>
                {{ $sancion['DEPARTAMENTO'] }}
            </td>
            <td>
                {{ $sancion['PROVINCIA'] }}
            </td>
            <td>
                {{ $sancion['DISTRITO'] }}
            </td>

            <td>
                {{ $sancion['PROVEEDOR (RAZÓN SOCIAL)'] }}
            </td>


            <td>
                {{ $sancion['DOCUMENTO IDENTIFICACIÓN (DNI/RUC)'] }}
            </td>


            <td>
                {{ $sancion['MATERIA RIS= PRODUCTO/SERVICIO'] }}
            </td>


            <td>
                {{ $sancion['HECHO INFRACTOR'] }}
            </td>


            <td>
                {{ $sancion['TIPO DE SANCIÓN_(AMONESTACIÓN O MULTA)'] }}
            </td>

            <td>
                {{ $sancion['MONTO DE MULTA (UITs)'] }} UIT
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endif 

@endsection 


        </div>
    </div>
</div>




@section('extra-js')
<script>

    $(document).ready(function () {
        $('#table-denuncia').DataTable({
            responsive: true,
             "lengthMenu": [[4, 25, 50, -1], [4, 25, 50, "All"]]
        });

        $('#table-reclamo').DataTable({
            responsive: true,
             "lengthMenu": [[4, 25, 50, -1], [4, 25, 50, "All"]]
        });
    });




    var map;
    function initMap() {
            @if($empresa['LATITUD'] != null  && $empresa['LONGITUD'] != null)
            var coordenadas = new google.maps.LatLng("{{ $empresa['LATITUD']}}","{{ $empresa['LONGITUD'] }}");
            console.log('coordenadas: ', coordenadas);

            var coord2 = new google.maps.LatLng("{{ $empresa['LATITUD'] + 0.0005}}","{{ $empresa['LONGITUD'] }}");

            map = new google.maps.Map(document.getElementById('map'), {
                center: coord2,
                zoom: 17,
                styles:[
                    {
                        featureType: 'poi.business',
                        stylers: [{visibility: 'off'}]
                    }
                ]
            });
            
            

            var marker = new google.maps.Marker({
              position: coordenadas,
              map: map,
              title: 'Hello World!'
            });

            marker.addListener('click', function() {
                dale();
            })

            var coordInfoWindow = new google.maps.InfoWindow({
                maxWidth: 150
            });
            function dale() {
                coordInfoWindow.setContent(createInfoWindowContent(coord2, map.getZoom(), "{{ $empresa['RUTA IMAGEN LOTE MINIATURA'] }}"));
                coordInfoWindow.setPosition(coord2);
                coordInfoWindow.open(map);

                map.addListener('zoom_changed', function() {
                coordInfoWindow.setContent(createInfoWindowContent(coord2, map.getZoom(), "{{ $empresa['RUTA IMAGEN LOTE MINIATURA'] }}" ));
                coordInfoWindow.setPosition(coord2);
                coordInfoWindow.open(map);
                });     
            }
            @endif
            $(window).ready(function() {
                dale();
            });
    
    }
    var TILE_SIZE = 256;

    function createInfoWindowContent(coordenadas, zoom, name, address) {
        var scale = 1 << zoom;

        var worldCoordinate = project(coordenadas);

        var pixelCoordinate = new google.maps.Point(
            Math.floor(worldCoordinate.x * scale),
            Math.floor(worldCoordinate.y * scale));

        var tileCoordinate = new google.maps.Point(
            Math.floor(worldCoordinate.x * scale / TILE_SIZE),
            Math.floor(worldCoordinate.y * scale / TILE_SIZE));

        return '<div><img width="150" src="' +  name + '" /></div>';
    }
    // The mapping between latitude, longitude and pixels is defined by the web
    // mercator projection.
    function project(latLng) {
        var siny = Math.sin(latLng.lat() * Math.PI / 180);

        // Truncating to 0.9999 effectively limits latitude to 89.189. This is
        // about a third of a tile past the edge of the world tile.
        siny = Math.min(Math.max(siny, -0.9999), 0.9999);

        return new google.maps.Point(
            TILE_SIZE * (0.5 + latLng.lng() / 360),
            TILE_SIZE * (0.5 - Math.log((1 + siny) / (1 - siny)) / (4 * Math.PI)));
    }









</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7-Az8ha889FBwEJR3JlGIFaXs5sEANPU&callback=initMap"
    async defer></script>
    

</script> @endsection