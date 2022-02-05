<?php

namespace Database\Seeders;

use App\Models\Especialidad;
use Illuminate\Database\Seeder;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
        $Especialidad1 =new Especialidad();
        $Especialidad1->nombreespecialidad="Oftalmologia";

        $Especialidad1->save();

        $Especialidad2 =new Especialidad();
        $Especialidad2->nombreespecialidad="Optometria";

        $Especialidad2->save();
    }
}
