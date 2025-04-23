<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('objetos')->insert([
            [
                'tipo_objeto' => 'Mochila',
                'descripción' => 'Mochila azul con libros de ingeniería',
                'estado' => 'perdido',
                'fecha_reporte' => '2025-04-22',
                'lugar' => 'Biblioteca',
                'punto_entrega' => 'Recepción',
                'foto' => 'mochila.jpg',
                'usuario_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipo_objeto' => 'USB',
                'descripción' => 'USB negra de 16GB marca Kingston',
                'estado' => 'encontrado',
                'fecha_reporte' => '2025-04-20',
                'lugar' => 'Laboratorio 3',
                'punto_entrega' => 'Dirección Académica',
                'foto' => 'usb.jpg',
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
