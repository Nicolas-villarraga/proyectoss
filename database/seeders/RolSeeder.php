<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        $Rol1 =new Rol();
        $Rol1->nombrerol="Doctor";
        $Rol1->save();

        $Rol2=new Rol();
        $Rol2->nombrerol="Paciente";
        $Rol2->save();
    }
}
