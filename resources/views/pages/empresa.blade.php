@extends('_layouts/app')

@section('content')

<ul>
    <li>
        <div class="row">
            <div class="col-md-4">DEPARTAMENTO</div>
            <div class="col-md-6">{{ $data['DEPARTAMENTO'] }}</div>
        </div>
    </li>
    <li>
    <div class="row">
            <div class="col-md-4">PROVINCIA</div>
            <div class="col-md-6">{{ $data['PROVINCIA'] }}</div>
        </div>
    </li>
    <li>
    <div class="row">
            <div class="col-md-4">DISTRITO</div>
            <div class="col-md-6">{{ $data['DISTRITO'] }}</div>
        </div>
    </li>
    <li>
    <div class="row">
            <div class="col-md-4">ACTIVIDAD ECONÓMICA</div>
            <div class="col-md-6">{{ $data['ACTIVIDAD ECONÓMICA'] }}</div>
        </div>
    </li>
    <li>
    <div class="row">
            <div class="col-md-4">DOCUMENTO IDENTIFICACIÓN (DNI/RUC)</div>
            <div class="col-md-6">{{ $data['DOCUMENTO IDENTIFICACIÓN (DNI/RUC)'] }}</div>
        </div>
    </li>
    <li>
    <div class="row">
            <div class="col-md-4">RUBRO</div>
            <div class="col-md-6">{{ $data['RUBRO'] }}</div>
        </div>
    </li>
    <li>
    <div class="row">
            <div class="col-md-4">MOTIVO DE RECLAMO</div>
            <div class="col-md-6">{{ $data['MOTIVO DE RECLAMO'] }}</div>
        </div>
    </li>
    <li>
    <div class="row">
            <div class="col-md-4">FORMA DE CONCLUSIÓN</div>
            <div class="col-md-6">{{ $data['FORMA DE CONCLUSIÓN'] }}</div>
        </div>
    </li>
    <li>
    <div class="row">
            <div class="col-md-4">DURACIÓN DEL RECLAMO</div>
            <div class="col-md-6">{{ $data['DURACIÓN DEL RECLAMO'] }}</div>
        </div>
    </li>
    <li>
        <div class="row">
            <div class="col-md-4">NÚMERO DE RECLAMO</div>
            <div class="col-md-6">{{ $data['NÚMERO DE RECLAMO'] }}</div>
        </div>
        </li>
    <li>
        <div class="row">
            <div class="col-md-4">AÑO DE RECLAMO</div>
            <div class="col-md-6">{{ $data['AÑO DE RECLAMO'] }}</div>
        </div></li>
    <li>
        <div class="row">
            <div class="col-md-4">OFICINA QUE ATENDIÓ EL RECLAMO</div>
            <div class="col-md-6">{{ $data['OFICINA QUE ATENDIÓ EL RECLAMO'] }}</div>
        </div>
        </li>
    <li>
        <div class="row">
            <div class="col-md-4">OFICINAS DEL INDECOPI EN EL DEPARTAMENTO DEL RECLAMANTE</div>
            <div class="col-md-6">{{ $data['OFICINAS DEL INDECOPI EN EL DEPARTAMENTO DEL RECLAMANTE'] }}</div>
        </div>
    </li>

    <li></li>
    <li></li>
</ul>

<br />
@if(count($sanciones))
<h4 class="text-center">Denuncias</h4>
<table class="table">
    <tbody>
        @foreach($sanciones as $sancion)
        <tr>
            <td>
               {{  $sancion['ACTIVIDAD ECONÓMICA'] }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
<br />

@if(count($reclamos))
<h4 class="text-center">Reclamo</h4>

<table class="table">
    <tbody>
        @foreach($reclamos as $reclamo)
        <tr>
            <td>
                {{ $reclamo['ACTIVIDAD ECONÓMICA'] }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection