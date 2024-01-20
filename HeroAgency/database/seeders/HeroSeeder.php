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

        Hero::create([
            'name' => 'Hulk',
            'secret_identity' => 'Bruce Banner',
            'gender' => 'Mâle',
            'hair_color' => 'Brun',
            'original_planet' => 'Terre',
        ]);

        Hero::create([
            'name' => 'MM',
            'secret_identity' => 'Mateo Mesguen',
            'gender' => 'Mâle',
            'hair_color' => 'Blond',
            'original_planet' => 'Terre',
        ]);

        Hero::create([
            'name' => 'Thor',
            'secret_identity' => 'Thor',
            'gender' => 'Mâle',
            'hair_color' => 'Blond',
            'original_planet' => 'Asgard',
        ]);

        Hero::create([
            'name' => 'Naruto',
            'secret_identity' => 'Naruto Uzumaki',
            'gender' => 'Mâle',
            'hair_color' => 'Blond',
            'original_planet' => 'Konoha',
        ]);

        Hero::create([
            'name' => 'IronMan',
            'secret_identity' => 'Tony Stark',
            'gender' => 'Mâle',
            'hair_color' => 'Brun',
            'original_planet' => 'Terre',
        ]);

        Hero::create([
            'name' => 'Wonderwoman',
            'secret_identity' => 'Diana Prince',
            'gender' => 'Femelle',
            'hair_color' => 'Brune',
            'original_planet' => 'Themyscira',
        ]);
    }
}
