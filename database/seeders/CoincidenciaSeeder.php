<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoincidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coincidencias')->insert([
            [
                'objeto_perdido_id' => 1,
                'objeto_encontrado_id' => 2,
                'estado_validación' => 'pendiente',
                'fecha_validación' => '2025-04-22',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
