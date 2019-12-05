<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivos';
    protected $fillable = [
        'usuario_id',
        'tipo_identificacion',
        'url_identidad1',
        'url_identidad2',
        'url_foto',
        'url_domicilio',
    ];
}
