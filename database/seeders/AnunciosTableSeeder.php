<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AnunciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anuncios')->insert([
            'name' => 'Ferrari',
            'description' => '750cc - 1000torq',
            'value' => '9999',
            'userId' => '1'
        ]);

        DB::table('anuncios')->insert([
            'name' => 'Corvete 1988',
            'description' => '250cc',
            'value' => '3',
            'userId' => '1'
        ]);
    }
}
