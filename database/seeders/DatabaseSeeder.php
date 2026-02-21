<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Llamamos a los seeders en orden (primero los catálogos)
        $this->call([
            MarcasSeeder::class,
            CategoriasSeeder::class,
            ProveedoresSeeder::class,
        ]);
    }
}