<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sectore;

class SectoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sectore::create([
            'sectores' => 'SISTEMAS',
        ]);
        Sectore::create([
            'sectores' => 'MANTENIMIENTO',
        ]);
        Sectore::create([
            'sectores' => 'PAÑOL',
        ]);
    }
}
