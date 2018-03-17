<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $fillable = [
        'departamento',
        'provincia',
        'distrito',
        'actividad_economica',
        'materia',
        'hecho_infractor',
        'tipo_sancion',
        'monto',
        'num_resolucion',
        'anio_resolucion',
        'sede_indecopi',
        'proveedor_id',
    ];
}
