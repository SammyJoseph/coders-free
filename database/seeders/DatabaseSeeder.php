<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(CursoSeeder::class); //permite que CursoSeeder se ejecute en la consola con db:seed
        User::factory(10)->create();
        Curso::factory(50)->create();
    }
}
