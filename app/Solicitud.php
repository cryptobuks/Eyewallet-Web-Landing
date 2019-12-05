<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nombres', 'email', 'identificacion', 'direccion', 'pais', 'ciudad', 'postal', 'celular', 'tipo', 'estado'
    ];

    public function rules(Request $request)
    {
        return [
            'nombres' => 'required|max:100',
            'email' => 'required',
            'identificacion' => 'required',
            'direccion' => 'required',
            'pais' => 'required',
            'ciudad' => 'required',
            'postal' => 'required',
            'celular' => 'required',
            'tipo' => 'required',
        ];
    }
}
