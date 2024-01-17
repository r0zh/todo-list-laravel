<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call([
        //    EtiquetaTableSeeder::class
        //]);

        // Ejecto antes la factoría usario porque la tabla tarea tiene una clave foranea desde tarea a usuario
        \App\Models\Etiqueta::factory(30)->create();
        \App\Models\Usuario::factory(10)->create();
        \App\Models\Tarea::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
