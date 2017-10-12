<?php

use Illuminate\Database\Seeder;
use App\Album;
use App\User;
class AlbumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $usuario = User::all();

        foreach ($usuario as $key) {
        
            $aleatorio = rand(0,5);

            for ($i=0; $i<$aleatorio ; $i++) { 
                
                Album::create([

                    'nombre'=>str_random(),
                    'descripcion'=>str_random(),
                    'user_id'=>$key->id,
                ]);

            }
        }


    }
}
