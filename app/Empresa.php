<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'GIRO',
        'RECURRENTE',
        'UBICACIÓN DEL PREDIO',
        'LATITUD',
        'LONGITUD',
        'RUTA IMAGEN LOTE MINIATURA',
        'ESTADO'

    ];
    
    protected $table = "sheet0$";
}
