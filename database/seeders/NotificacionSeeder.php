<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notificaciones')->insert([
            [
                'usuario_id' => 1,
                'mensaje' => 'Se ha encontrado un objeto que podría coincidir con el tuyo.',
                'fecha_envio' => '2025-04-22',
                'leido' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
