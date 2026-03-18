<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TableTechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologies = [
            'HTML',
            'CSS',
            'Javascript',
            'PHP',
            'Laravel',
            'React',
            'MySQL',
            'Bootstrap'
        ];

        foreach ($technologies as $technology) {
            $newTechnology = new Technology();
            $newTechnology->nome = $technology;
            $newTechnology->colore = $faker->hexColor();
            $newTechnology->save();
        }
    }
}
