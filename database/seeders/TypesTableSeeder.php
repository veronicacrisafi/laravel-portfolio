<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $types = [
            'HTML',
            'CSS',
            'Javascript',
            'PHP',
            'Laravel',
            'React',
            'MySQL',
            'Bootstrap'
        ];
        foreach ($types as $type) {
            $newType = new Type();
            $newType->nome = $type;
            $newType->descrizione = $faker->sentence();
            $newType->save();
        }
    }
}
