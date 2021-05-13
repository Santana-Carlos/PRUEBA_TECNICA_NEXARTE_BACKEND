<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function ciudades()
    {
        return $this->hasMany('App\Ciudad');
    }

    public function cotizacion()
    {
        return $this->hasMany('App\Cotizacion');
    }
}
