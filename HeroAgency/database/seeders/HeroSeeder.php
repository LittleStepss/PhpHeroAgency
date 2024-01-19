<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Hero::create([
            'name' => 'Superman',
            'secret_identity' => 'Clark Kent',
            'gender' => 'Mâle',
            'hair_color' => 'Brun',
            'original_planet' => 'Krypton',
        ]);

        Hero::create([
            'name' => 'Batman',
            'secret_identity' => 'Bruce Wayne',
            'gender' => 'Mâle',
            'hair_color' => 'Brun',
            'original_planet' => 'Terre',
        ]);

        Hero::create([
            'name' => 'PignonBoy',
            'secret_identity' => 'François Pignon',
            'gender' => 'Mâle',
            'hair_color' => 'Brun',
            'original_planet' => 'Terre',
        ]);
    }
}
