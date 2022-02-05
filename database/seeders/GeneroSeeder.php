<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $Genero1 = new Genero();

        $Genero1->nombregenero = "Maculino";
        

        $Genero1->save();

        $Genero2 = new Genero();
        $Genero2->nombregenero = "Femenino";

        $Genero2->save();

    }
}
