<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $fillable = [
        'nombre',
        'departamento_id'
    ];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id', 'id');
    }

    public function cotizacion()
    {
        return $this->hasMany('App\Cotizacion');
    }
}
