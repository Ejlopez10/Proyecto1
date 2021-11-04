<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trabajador;
class TrabajadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trabajador::factory(500)->create();
        //
    }
}
