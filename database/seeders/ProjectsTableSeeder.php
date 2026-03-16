<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->titolo = $faker->sentence();
            $newProject->autore = $faker->name();
            //$newProject->categoria = $faker->word();
            $newProject->type_id = rand(1, 5);
            $newProject->contenuto = $faker->paragraph();
            $newProject->save();
        }
    }
}
