<?php

namespace App\Http\Controllers;

use App\Cotizacion;
use App\Departamento;
use App\Ciudad;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class CotizacionController extends Controller
{
    public function store(Request $request)
    {
        $request->fecha_creacion = Carbon::now();

        $validate = DB::table('cotizacions')
            ->select(
                'fecha_creacion',
                'email_cotizante'
                )
            ->where([
                ['fecha_creacion', '=', $request->fecha_creacion,],
                ['email_cotizante', '=', $request->email_cotizante]
            ])
            ->get();

        if (!$validate->isEmpty()) {
            return response()->json([
                "success" => false
            ]);
        }

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

        $departamento = Departamento::where('id', $request->departamento_id)->first();
        $ciudad = Ciudad::where('id', $request->ciudad_id)->first();

        $details = [
            'title' => 'Detalles de la cotización:',
            'modelo' => 'Modelo cotizado: ' . $request->modelo,
            'precio' => 'Precio del modelo: ' . $request->precio,
            'nombre' => 'Nombre del cotizante: ' . $request->nombre_cotizante,
            'email' => 'Email del cotizante: ' . $request->email_cotizante,
            'numero' => 'Número del cotizante: ' . $request->numero_cotizante,
            'departamento' => 'Departamento: ' . $departamento->nombre,
            'ciudad' => 'Ciudad: ' . $ciudad->nombre,
            'fecha' => 'Fecha de realización: ' . $request->fecha_creacion,
        ];

        $mails = ['diego.colmenares@uao.edu.co', 'diegocolmenares03@gmail.com', 'alvinyakitori0303@gmail.com', 'jose.santamarna@uao.edu.co'];
   
        Mail::to($mails)->send(new MyMail($details));

        return response()->json(["success" => true], 200);
    }
}