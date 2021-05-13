<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //FORMA AUTOMÁTICA DE AGREGAR DATOS FAKE A LA BD
        // Curso::factory(50)->create(); es recomendable hacerlo en DatabaseSeeder al ser solo 1 línea de código

        //FORMA MANUAL DE AGREGAR DATOS A LA BD
        // $curso1 = new Curso();
        // $curso1->name = "Laravel";
        // $curso1->description = "El mejor framework backend";
        // $curso1->category = "Desarrollo web";
        // $curso1->save();

        // $curso2 = new Curso();
        // $curso2->name = "Vue.js";
        // $curso2->description = "El mejor framework frontend";
        // $curso2->category = "Desarrollo web";
        // $curso2->save();

        // $curso3 = new Curso();
        // $curso3->name = "Tailwind";
        // $curso3->description = "El mejor framework CSS";
        // $curso3->category = "Desarrollo web";
        // $curso3->save();
    }
}
