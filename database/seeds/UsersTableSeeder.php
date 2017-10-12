<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        for ($i=0; $i <10 ; $i++) { 
          
            User::create([

                'name'=>str_random(),
                'email'=>str_random().'@gmail.com',
                'password'=>bcrypt('secret'),

            ]);

        }


    }
}
