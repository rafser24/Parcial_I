<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarcasSeeder extends Seeder
{
    public function run()
    {
        DB::table('marcas')->insert([
            ['nombre' => 'Samsung', 'estado' => true],
            ['nombre' => 'Apple', 'estado' => true],
            ['nombre' => 'Sony', 'estado' => true],
            ['nombre' => 'Dell', 'estado' => true],
        ]);
    }
}