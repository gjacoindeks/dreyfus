<?php

use Illuminate\Database\Seeder;

class FotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fotos')->insert([

        	'nombre'=>str_random(10),
        	'descripcion'=>str_random(10),
        	'ruta'=>str_random(10)

        ]);
    }
}
