<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    protected $fillable = [
        'modelo',
        'precio',
        'nombre_cotizante',
        'email_cotizante',
        'numero_cotizante',
        'fecha_creacion',
        'departamento_id',
        'ciudad_id'
    ];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id', 'id');
    }

    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad', 'ciudad_id', 'id');
    }
}
