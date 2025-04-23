<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            [
                'nombre_completo' => 'Daniel Meléndez',
                'email' => 'daniel@example.com',
                'contraseña' => bcrypt('123456'),
                'rol' => 'admin',
                'notificaciones_activas' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_completo' => 'Laura Pérez',
                'email' => 'laura@example.com',
                'contraseña' => bcrypt('123456'),
                'rol' => 'usuario',
                'notificaciones_activas' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
