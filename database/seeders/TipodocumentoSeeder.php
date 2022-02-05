<?php

namespace Database\Seeders;

use App\Models\Tipodocumento;
use Illuminate\Database\Seeder;

class TipodocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $tipo1 =new Tipodocumento();
        $tipo1->nombredocumento="Tarjeta de identidad";
        $tipo1->save();
        
        $tipo2 =new Tipodocumento();
        $tipo2->nombredocumento="Cedula de ciudadania";
        $tipo2->save();
        
        $tipo3 =new Tipodocumento();
        $tipo3->nombredocumento="Cedula de extranjeria";
        $tipo3->save();
        
        $tipo4 =new Tipodocumento();
        $tipo4->nombredocumento="Visa";
        $tipo4->save();
        
        $tipo5 =new Tipodocumento();
        $tipo5->nombredocumento="Pasaporte";
        $tipo5->save();
        
        $tipo6 =new Tipodocumento();
        $tipo6->nombredocumento="Nit";
        $tipo6->save();

    }
}
