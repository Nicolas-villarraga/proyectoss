<?php

namespace Database\Seeders;

use App\Models\Estado;
use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $Estado1 =new Estado();
        $Estado1->nombreestado="Activo";
        $Estado1->save();

        $Estado2 =new Estado();
        $Estado2->nombreestado="Inactivo";
        $Estado2->save();

        $Estado3 =new Estado();
        $Estado3->nombreestado="Cancelado";


    }
}
