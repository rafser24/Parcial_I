<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    public function run()
    {
        DB::table('proveedores')->insert([
            ['nombre' => 'Tech Supply S.A.', 'telefono' => '2255-8899', 'estado' => true],
            ['nombre' => 'Distribuidora Global', 'telefono' => '2233-4455', 'estado' => true],
            ['nombre' => 'ElectroMundo SV', 'telefono' => '2500-1122', 'estado' => true],
        ]);
    }
}