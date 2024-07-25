<?php

namespace Database\Seeders;

use App\Models\Bengkel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BengkelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bengkel::create([
            'name' => 'Bengkel Umum 1',
            'type' => 'Umum',
            'location' => 'Jakarta'
        ]);

        Bengkel::create([
            'name' => 'Bengkel Spesialis 1',
            'type' => 'Spesialis',
            'location' => 'Bandung'
        ]);
    }
}
