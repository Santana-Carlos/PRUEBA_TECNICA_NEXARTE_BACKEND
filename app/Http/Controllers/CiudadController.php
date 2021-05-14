<?php

namespace App\Http\Controllers;

use App\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    public function indexByDepartamento(Ciudad $ciudad)
    {
        return response()->json(["success" => true, "ciudades" => Ciudad::where('departamento_id', $ciudad->id)->get()], 200);
    }
}
