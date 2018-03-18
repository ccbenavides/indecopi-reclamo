@extends('_layouts.app') @section('extra-css')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}"> @endsection 


@section('content')
<div class=" row">
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">                
        <div class="carousel-inner">
          <div class="item active">
            <img src="{{ asset('/img/cabezera.jpg') }}" alt="Second slide" width="100%">
            
          </div>
        </div>
      </div>
    </div>


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
                    <canvas id="canvas"></canvas>
                </div>
            </div>
        </section>
    </section>
</section>
@endsection 

@section('extra-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js">
</script>
<script src="http://www.chartjs.org/samples/latest/utils.js">
</script>

<script>

var resultados = JSON.parse('{"ABANDONO":{"INDECOPI SERNAC":0.0,"INDECOPI-AEROPUERTO ZONA INTERNACIONAL":176.0,"INDECOPI-AEROPUERTO ZONA NACIONAL":428.0,"INDECOPI-CONGRESO LA REP\u00daBLICA":327.0,"INDECOPI-GAMARRA":175.0,"INDECOPI-LIMA NORTE":1039.0,"INDECOPI-MAC CALLAO":348.0,"INDECOPI-MAC EL AGUSTINO":0.0,"INDECOPI-MAC LIMA NORTE":280.0,"INDECOPI-MAC PIURA":141.0,"INDECOPI-MAC PLAZA NORTE":165.0,"INDECOPI-MAC VENTANILLA":81.0,"INDECOPI-SAN JUAN DE LURIGANCHO":93.0,"INDECOPI-SEDE CENTRAL":13184.0,"ORI AMAZONAS":190.0,"ORI ANCASH - CHIMBOTE":418.0,"ORI ANCASH - HUARAZ":35.0,"ORI APUR\u00cdMAC":0.0,"ORI AREQUIPA":1182.0,"ORI AYACUCHO":221.0,"ORI CAJAMARCA":210.0,"ORI CUSCO":372.0,"ORI HUANCAVELICA":50.0,"ORI HU\u00c1NUCO":715.0,"ORI ICA":656.0,"ORI JUNIN":151.0,"ORI JUNIN-LA MERCED":42.0,"ORI LA LIBERTAD":910.0,"ORI LAMBAYEQUE":642.0,"ORI LORETO":370.0,"ORI MADRE DE DIOS":59.0,"ORI MOQUEGUA":189.0,"ORI PASCO":57.0,"ORI PIURA":791.0,"ORI PUNO":436.0,"ORI SAN MART\u00cdN":143.0,"ORI TACNA":484.0,"ORI TUMBES":179.0,"ORI UCAYALI":117.0,"ORI VRAEM":74.0},"CONCILIACION":{"INDECOPI SERNAC":1.0,"INDECOPI-AEROPUERTO ZONA INTERNACIONAL":382.0,"INDECOPI-AEROPUERTO ZONA NACIONAL":1153.0,"INDECOPI-CONGRESO LA REP\u00daBLICA":935.0,"INDECOPI-GAMARRA":378.0,"INDECOPI-LIMA NORTE":3684.0,"INDECOPI-MAC CALLAO":893.0,"INDECOPI-MAC EL AGUSTINO":1.0,"INDECOPI-MAC LIMA NORTE":434.0,"INDECOPI-MAC PIURA":331.0,"INDECOPI-MAC PLAZA NORTE":588.0,"INDECOPI-MAC VENTANILLA":372.0,"INDECOPI-SAN JUAN DE LURIGANCHO":210.0,"INDECOPI-SEDE CENTRAL":27560.0,"ORI AMAZONAS":448.0,"ORI ANCASH - CHIMBOTE":2303.0,"ORI ANCASH - HUARAZ":971.0,"ORI APUR\u00cdMAC":2367.0,"ORI AREQUIPA":2663.0,"ORI AYACUCHO":375.0,"ORI CAJAMARCA":3435.0,"ORI CUSCO":2723.0,"ORI HUANCAVELICA":769.0,"ORI HU\u00c1NUCO":1195.0,"ORI ICA":1535.0,"ORI JUNIN":2154.0,"ORI JUNIN-LA MERCED":772.0,"ORI LA LIBERTAD":3481.0,"ORI LAMBAYEQUE":2757.0,"ORI LORETO":1415.0,"ORI MADRE DE DIOS":748.0,"ORI MOQUEGUA":812.0,"ORI PASCO":861.0,"ORI PIURA":2155.0,"ORI PUNO":1344.0,"ORI SAN MART\u00cdN":642.0,"ORI TACNA":1357.0,"ORI TUMBES":1085.0,"ORI UCAYALI":683.0,"ORI VRAEM":141.0},"DESISTIMIENTO DEL RECLAMANTE":{"INDECOPI SERNAC":0.0,"INDECOPI-AEROPUERTO ZONA INTERNACIONAL":71.0,"INDECOPI-AEROPUERTO ZONA NACIONAL":274.0,"INDECOPI-CONGRESO LA REP\u00daBLICA":214.0,"INDECOPI-GAMARRA":42.0,"INDECOPI-LIMA NORTE":908.0,"INDECOPI-MAC CALLAO":81.0,"INDECOPI-MAC EL AGUSTINO":0.0,"INDECOPI-MAC LIMA NORTE":84.0,"INDECOPI-MAC PIURA":34.0,"INDECOPI-MAC PLAZA NORTE":109.0,"INDECOPI-MAC VENTANILLA":19.0,"INDECOPI-SAN JUAN DE LURIGANCHO":9.0,"INDECOPI-SEDE CENTRAL":7194.0,"ORI AMAZONAS":37.0,"ORI ANCASH - CHIMBOTE":2186.0,"ORI ANCASH - HUARAZ":546.0,"ORI APUR\u00cdMAC":361.0,"ORI AREQUIPA":137.0,"ORI AYACUCHO":10.0,"ORI CAJAMARCA":1380.0,"ORI CUSCO":1722.0,"ORI HUANCAVELICA":54.0,"ORI HU\u00c1NUCO":359.0,"ORI ICA":1980.0,"ORI JUNIN":1433.0,"ORI JUNIN-LA MERCED":138.0,"ORI LA LIBERTAD":3240.0,"ORI LAMBAYEQUE":1683.0,"ORI LORETO":46.0,"ORI MADRE DE DIOS":349.0,"ORI MOQUEGUA":275.0,"ORI PASCO":23.0,"ORI PIURA":924.0,"ORI PUNO":137.0,"ORI SAN MART\u00cdN":269.0,"ORI TACNA":166.0,"ORI TUMBES":424.0,"ORI UCAYALI":179.0,"ORI VRAEM":27.0},"INASISTENCIA DEL PROVEEDOR":{"INDECOPI SERNAC":0.0,"INDECOPI-AEROPUERTO ZONA INTERNACIONAL":163.0,"INDECOPI-AEROPUERTO ZONA NACIONAL":405.0,"INDECOPI-CONGRESO LA REP\u00daBLICA":603.0,"INDECOPI-GAMARRA":222.0,"INDECOPI-LIMA NORTE":2415.0,"INDECOPI-MAC CALLAO":630.0,"INDECOPI-MAC EL AGUSTINO":0.0,"INDECOPI-MAC LIMA NORTE":484.0,"INDECOPI-MAC PIURA":190.0,"INDECOPI-MAC PLAZA NORTE":344.0,"INDECOPI-MAC VENTANILLA":203.0,"INDECOPI-SAN JUAN DE LURIGANCHO":195.0,"INDECOPI-SEDE CENTRAL":12935.0,"ORI AMAZONAS":207.0,"ORI ANCASH - CHIMBOTE":464.0,"ORI ANCASH - HUARAZ":61.0,"ORI APUR\u00cdMAC":2.0,"ORI AREQUIPA":2104.0,"ORI AYACUCHO":355.0,"ORI CAJAMARCA":362.0,"ORI CUSCO":426.0,"ORI HUANCAVELICA":55.0,"ORI HU\u00c1NUCO":532.0,"ORI ICA":277.0,"ORI JUNIN":227.0,"ORI JUNIN-LA MERCED":100.0,"ORI LA LIBERTAD":1454.0,"ORI LAMBAYEQUE":1143.0,"ORI LORETO":1076.0,"ORI MADRE DE DIOS":9.0,"ORI MOQUEGUA":255.0,"ORI PASCO":131.0,"ORI PIURA":1274.0,"ORI PUNO":641.0,"ORI SAN MART\u00cdN":207.0,"ORI TACNA":654.0,"ORI TUMBES":252.0,"ORI UCAYALI":292.0,"ORI VRAEM":157.0},"NO CONCILIADO":{"INDECOPI SERNAC":0.0,"INDECOPI-AEROPUERTO ZONA INTERNACIONAL":77.0,"INDECOPI-AEROPUERTO ZONA NACIONAL":125.0,"INDECOPI-CONGRESO LA REP\u00daBLICA":148.0,"INDECOPI-GAMARRA":52.0,"INDECOPI-LIMA NORTE":690.0,"INDECOPI-MAC CALLAO":219.0,"INDECOPI-MAC EL AGUSTINO":0.0,"INDECOPI-MAC LIMA NORTE":129.0,"INDECOPI-MAC PIURA":107.0,"INDECOPI-MAC PLAZA NORTE":99.0,"INDECOPI-MAC VENTANILLA":63.0,"INDECOPI-SAN JUAN DE LURIGANCHO":26.0,"INDECOPI-SEDE CENTRAL":6438.0,"ORI AMAZONAS":84.0,"ORI ANCASH - CHIMBOTE":210.0,"ORI ANCASH - HUARAZ":17.0,"ORI APUR\u00cdMAC":0.0,"ORI AREQUIPA":526.0,"ORI AYACUCHO":71.0,"ORI CAJAMARCA":34.0,"ORI CUSCO":130.0,"ORI HUANCAVELICA":8.0,"ORI HU\u00c1NUCO":73.0,"ORI ICA":209.0,"ORI JUNIN":37.0,"ORI JUNIN-LA MERCED":21.0,"ORI LA LIBERTAD":522.0,"ORI LAMBAYEQUE":405.0,"ORI LORETO":401.0,"ORI MADRE DE DIOS":10.0,"ORI MOQUEGUA":67.0,"ORI PASCO":49.0,"ORI PIURA":614.0,"ORI PUNO":89.0,"ORI SAN MART\u00cdN":204.0,"ORI TACNA":358.0,"ORI TUMBES":100.0,"ORI UCAYALI":96.0,"ORI VRAEM":9.0}}');

var sedes = [
    { sede: 'INDECOPI SERNAC', position: { lat: -8.1190063, lng: -79.0389714 } },
    { sede: 'INDECOPI-AEROPUERTO ZONA INTERNACIONAL', position: { lat: -12.0240527, lng: -77.1127878 } },
    { sede: 'INDECOPI-AEROPUERTO ZONA NACIONAL', position: { lat: -12.0240527, lng: -77.1131303 } },
    { sede: 'INDECOPI-CONGRESO LA REPÚBLICA', position: { lat: -11.991156, lng: -77.0755147 } },
    { sede: 'INDECOPI-GAMARRA', position: { lat: -12.0695818, lng: -77.0167201 } },
    { sede: 'INDECOPI-LIMA NORTE', position: { lat: -11.991156, lng: -77.0755147 } },
    { sede: 'INDECOPI-MAC CALLAO', position: { lat: -12.0561056, lng: -77.1041305 } },
    { sede: 'INDECOPI-MAC EL AGUSTINO', position: { lat: -12.0412631, lng: -77.0057233 } },
    { sede: 'INDECOPI-MAC LIMA NORTE', position: { lat: -12.006669, lng: -77.06138 } },
    { sede: 'INDECOPI-MAC PIURA', position: { lat: -8.1190063, lng: -80.6436122 } },
    { sede: 'INDECOPI-MAC PLAZA NORTE', position: { lat: -5.1853567, lng: -77.06138 } },
    { sede: 'INDECOPI-MAC VENTANILLA', position: { lat: -12.006669, lng: -77.129873 } },
    { sede: 'INDECOPI-SAN JUAN DE LURIGANCHO', position: { lat: -11.8763998, lng: -77.0099497 } },
    { sede: 'INDECOPI-SEDE CENTRAL', position: { lat: -12.0860337, lng: 	-77.0077739 } },
    { sede: 'ORI AMAZONAS', position: { lat: -12.0860337, lng: -79.8382791 } },

];

var map, myChart;

function initMap() {
    var myLatLng = { lat: -12.062642, lng: -77.041345 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: myLatLng
    });
    sedes.map(function (e) {

        var marker = new google.maps.Marker({
            position: e.position,
            map: map,
            title: e.sede
        });
        marker.addListener('click', function () {
            let abandono = resultados['ABANDONO'][e.sede];
            let conciliacion = resultados['CONCILIACION'][e.sede];
            let desistimiento = resultados['DESISTIMIENTO DEL RECLAMANTE'][e.sede];
            let inasistencia = resultados['INASISTENCIA DEL PROVEEDOR'][e.sede];
            let no_conciliado = resultados['NO CONCILIADO'][e.sede];
            let arreglo = [
                { name: 'ABANDONO', data: abandono },
                { name: 'CONCILIACION', data: conciliacion },
                { name: 'DESISTIMIENTO DEL RECLAMANTE', data: desistimiento },
                { name: 'INASISTENCIA DEL PROVEEDOR', data: inasistencia },
                { name: 'NO CONCILIADO', data: no_conciliado }
            ];
            graficar(arreglo, e.sede);
        });
    });



}




var ctx = document.getElementById("canvas").getContext('2d');
function graficar(arreglo, sede) {
    myChart && myChart.destroy();
    var COMPANIES = [];
    colors = ["#F8FAFF", 
        "#dd4b39", 
        "#00a65a", 
        "#30bbbb", 
        "#f39c12", 
        "#388AC7", 
        "#b5bbc8", 
        "#1C3F9D", 
        "#1A216C", 
        "#1B005A"];

    var i = 0;
    console.log(arreglo);
    arreglo.map(e => {
        COMPANIES.push({
            label: e.name,
            data: [ e.data ],
            backgroundColor: colors[i],
            borderColor: colors[i++],
            borderWidth: 1
        });

    });

    console.log(COMPANIES);

    myChart = new Chart(ctx, {
        type: 'bar',
        animation: false,
        data: {
            labels: ["Forma de conclusión por sede : " + sede  ],
            datasets: COMPANIES
        },
        options: {
            responsive: true,
            scales: {
              xAxes: [{position: 'top'}],
              yAxes: [{
                ticks: {reverse: false}
              }]
            },
            legend: {
                position: "bottom",
                display:true
            },
            title: {
              display: false,
              text: "TOP 10 DE EMPRESAS MULTADAS DEL AÑO " 
            }
        }
    });
};

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7-Az8ha889FBwEJR3JlGIFaXs5sEANPU&callback=initMap" defer></script> @endsection