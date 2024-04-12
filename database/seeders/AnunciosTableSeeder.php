<?php

namespace Database\Seeders;

use App\Models\Anuncio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnunciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $user = Auth::id();
        DB::table('anuncios')->insert([ 'name' => 'Pc gamer'
        , 'description' => 'Amd Ryzen 7 5700g + rtx2060'
        , 'value' => '4026'
        , 'userId' => $user 
    ]); 

    }
}
