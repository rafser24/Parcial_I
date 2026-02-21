<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Teléfonos Celulares', 'estado' => true],
            ['nombre' => 'Computadoras', 'estado' => true],
            ['nombre' => 'Audio y Video', 'estado' => true],
            ['nombre' => 'Accesorios', 'estado' => true],
        ]);
    }
}