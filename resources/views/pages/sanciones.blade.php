
@extends('_layouts.app')

@section('content')
<div class=" row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">                
                <div class="carousel-inner">
                 
                  <div class="item active">
                    <img src="{{ asset('/img/estadistica.jpg') }}" alt="Second slide" width="100%">

                   <!--  <div class="carousel-caption">
                      <h2>Second Slide</h2>
                    </div> -->
                  </div>
                 
                </div>
               
              </div>
    </div>



  <div class="row">
    <div class="col-md-12 text-center panel-body">
        <h2 class="linea-title">TOP SANCIONES A EMPRESAS PARA EL AÑO {{$anio}}</h2>
    </div>
    <br>
  </div>
  <div class="row">

<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Start creating your amazing application!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>


    <form action="/sanciones" id="miform" class="col-sm-3 col-sm-offset-3">
      <label for="">Selecciona el año</label>
      <select name="anio" id="miselect" onchange="this.form.submit()" class="form-control">
        <option value="2017" @if($anio == "2017") selected="selected" @endif>2017</option>
        <option value="2016" @if($anio == "2016") selected="selected" @endif>2016</option>
        <option value="2015" @if($anio == "2015") selected="selected" @endif>2015</option>
        <option value="2014" @if($anio == "2014") selected="selected" @endif>2014</option>
      </select>
    </form>
    <div class="col-sm-3">
      <a href="/" class="pull-right">volver a home</a>
    </div>
  </div>


<div class="container-fluid">
  <canvas id="canvas" class="row"></canvas>
</div>

@endsection




@section('extra-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js">
</script>
<script src="http://www.chartjs.org/samples/latest/utils.js">
</script>

<script>
 
  // var empresas = @json($empresas);
  var COMPANIES = [];
  colors = ["#F8FAFF","#DCEAF9","#C3D8F0","#96C7E2","#61A9D7","#388AC7","#2363B6","#1C3F9D","#1A216C","#1B005A"]
  
  var i = 0;
  @foreach ($empresas as $empresa)
      COMPANIES.push({
        label: "{{ substr($empresa['PROVEEDOR (RAZÓN SOCIAL)'],0, 100) }}",
          data: ["{{ $empresa['MONTO DE MULTA (UITs)'] }}"],
          backgroundColor: colors[i],
          borderColor: colors[i++],
          borderWidth: 1
      })
  @endforeach

  window.onload = function() {
    var ctx = document.getElementById("canvas").getContext('2d');

    var myChart = new Chart(ctx, {
    type: 'bar',
    animation: false,
    data: {
        labels: ["Multa UIT x Empresa"],
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
          text: "TOP 10 DE EMPRESAS MULTADAS DEL AÑO {{$anio}}" 
        }
    }
    });
  };
</script>
@endsection