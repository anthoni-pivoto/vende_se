<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Anuncios;
use Illuminate\Database\Seeder;
use \App\Models\User;
use Nette\Utils\Random;
>>>>>>> 225a56dfdc26eab88f556ab296ab68833ca2f258

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
<<<<<<< HEAD
    public function run(){
    $this->call(UsersTableSeeder::class);
    $this->call(AnunciosTableSeeder::class);

    }
    
=======
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Anuncios::factory()->create([
            'name'=> ,
        ]);
    }
>>>>>>> 225a56dfdc26eab88f556ab296ab68833ca2f258
}
