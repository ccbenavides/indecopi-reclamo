
@extends('_layouts.app')

@section('content')
<form action="/sanciones" id="miform">
  <label for="">Selecciona el año</label>
  <select name="anio" id="miselect" onchange="this.form.submit()">
    <option value="2017" @if($anio == "2017") selected="selected" @endif>2017</option>
    <option value="2016" @if($anio == "2016") selected="selected" @endif>2016</option>
    <option value="2015" @if($anio == "2015") selected="selected" @endif>2015</option>
    <option value="2014" @if($anio == "2014") selected="selected" @endif>2014</option>
  </select>
</form>
<div id="container" style="width: 75%;">
    <canvas id="canvas"></canvas>
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
          backgroundColor: colors[9 - i],
          borderColor: colors[9 - i++],
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
        legend: {
            position: "right",
            display:true
        },
        title: {
          display: true,
          text: "TOP 10 DE EMPRESAS MULTADAS DEL AÑO {{$anio}}" 
        }
    }
    });
  };
</script>
@endsection