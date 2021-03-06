<?php

namespace Database\Seeders;



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
        // \App\Models\User::factory(10)->create();

        $this->call(GeneroSeeder::class);
        $this->call(EspecialidadSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(TipodocumentoSeeder::class);
     }
}
