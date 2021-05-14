<?php

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'Bogotá DC',
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Antioquia',
        ]);

        DB::table('departamentos')->insert([
            'nombre' => 'Valle del Cauca',
        ]);
    }
}
