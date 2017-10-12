<?php

use Illuminate\Database\Seeder;
use App\Album;
use App\Foto;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	/*DB::statement('SET FOREIGN_KEY_CHEKS = 0');
    	Foto::truncate();
    	Album::truncate();
    	User::truncate();
*/

       $this->call(UsersTableSeeder::class);
       $this->call(AlbumesTableSeeder::class);
       $this->call(FotosSeeder::class);
    }
}
