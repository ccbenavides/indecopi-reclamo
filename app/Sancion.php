<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sancion extends Model
{

    protected $fillable = [
        'DEPARTAMENTO',
        'PROVINCIA',
        'DISTRITO',
        'ACTIVIDAD ECONÓMICA',
        'PROVEEDOR (RAZÓN SOCIAL)',
        'DOCUMENTO IDENTIFICACIÓN (DNI/RUC)',
        'MATERIA RIS= PRODUCTO/SERVICIO',
        'HECHO INFRACTOR',
        'TIPO DE SANCIÓN_(AMONESTACIÓN O MULTA)',
        'MONTO DE MULTA (UITs)',
        'NÚMERO DE RESOLUCIÓN',
        'AÑO DE RESOLUCIÓN',
        'OFICINAS DEL INDECOPI SEGÚN DEPARTAMENTO DONDE OCURRIÓ EL CONFLI'
    ];

    protected $table = "sancion";

}
