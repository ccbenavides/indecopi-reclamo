<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamo extends Model
{
    protected $fillable = [
        'DEPARTAMENTO',
        'PROVINCIA',
        'DISTRITO',
        'ACTIVIDAD ECONÓMICA',
        'PROVEEDOR (RAZÓN SOCIAL)',
        'DOCUMENTO IDENTIFICACIÓN (DNI/RUC)',
        'RUBRO',
        'MOTIVO DE RECLAMO',
        'FORMA DE CONCLUSIÓN',
        'DURACIÓN DEL RECLAMO',
        'NÚMERO DE RECLAMO',
        'AÑO DE RECLAMO',
        'OFICINA QUE ATENDIÓ EL RECLAMO',
        'OFICINAS DEL INDECOPI EN EL DEPARTAMENTO DEL RECLAMANTE'
    ];

    protected $table = "reclamos";
}
