<?php

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    public function run()
    {
        DB::table('ciudads')->insert([
            'nombre' => 'Leticia',
            'departamento_id' => '1'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Medellin',
            'departamento_id' => '2'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Arauca',
            'departamento_id' => '3'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Barranquilla',
            'departamento_id' => '4'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Cartagena',
            'departamento_id' => '5'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Tunja',
            'departamento_id' => '6'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Manizales',
            'departamento_id' => '7'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Florencia',
            'departamento_id' => '8'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Yopal',
            'departamento_id' => '9'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Popayán',
            'departamento_id' => '10'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Valledupar',
            'departamento_id' => '11'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Quindó',
            'departamento_id' => '12'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Monteria',
            'departamento_id' => '13'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Bogotá',
            'departamento_id' => '14'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Iníra',
            'departamento_id' => '15'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'San José del Guaviare',
            'departamento_id' => '16'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Neiva',
            'departamento_id' => '17'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Rioacha',
            'departamento_id' => '18'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Santamarta',
            'departamento_id' => '19'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Villavicencio',
            'departamento_id' => '20'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Pasto',
            'departamento_id' => '21'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Cúcuta',
            'departamento_id' => '22'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Mocoa',
            'departamento_id' => '23'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Armenia',
            'departamento_id' => '24'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Pereira',
            'departamento_id' => '25'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'San Andrés',
            'departamento_id' => '26'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Bucaramanga',
            'departamento_id' => '27'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Sincelejo',
            'departamento_id' => '28'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Ibagué',
            'departamento_id' => '29'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Cali',
            'departamento_id' => '30'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Mitú',
            'departamento_id' => '31'
        ]);

        DB::table('ciudads')->insert([
            'nombre' => 'Puerto Carreño',
            'departamento_id' => '32'
        ]);
    }
}
