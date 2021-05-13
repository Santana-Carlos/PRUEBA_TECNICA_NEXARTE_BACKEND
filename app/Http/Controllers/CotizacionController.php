<?php

namespace App\Http\Controllers;

use App\Cotizacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CotizacionController extends Controller
{
    public function store(Request $request)
    {
        $request->fecha_creacion = Carbon::now();

        DB::table('cotizacions')->insert([
            'modelo' => $request->modelo,
            'precio' => $request->precio,
            'nombre_cotizante' => $request->nombre_cotizante,
            'email_cotizante' => $request->email_cotizante,
            'numero_cotizante' => $request->numero_cotizante,
            'fecha_creacion' => $request->fecha_creacion,
            'departamento_id' => $request->departamento_id,
            'ciudad_id' => $request->ciudad_id
        ]);

        return response()->json(["success" => true], 200);
    }
}
