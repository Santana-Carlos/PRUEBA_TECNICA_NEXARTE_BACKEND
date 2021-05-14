<?php

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    public function run()
    {
        DB::table('ciudads')->insert([
            'nombre' => 'Bogotá',
            'departamento_id' => '1'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Medellín',
            'departamento_id' => '2'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Cali',
            'departamento_id' => '3'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Palmira',
            'departamento_id' => '3'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Yumbo',
            'departamento_id' => '3'
        ]);
    }
}
