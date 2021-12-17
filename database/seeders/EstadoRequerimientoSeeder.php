<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estadorequerimiento;

class EstadoRequerimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estadorequerimiento::create([
            'estado' => 'FALTA AUTORIZACION CABA',
		    'sectorEstado' => '3',
        ]);
        Estadorequerimiento::create([
            'estado' => 'FALTA AUTORIZACION GERENCIA',
		    'sectorEstado' => '3',
        ]);
        Estadorequerimiento::create([
            'estado' => 'FINALIZADO',
		    'sectorEstado' => '3',
        ]);
        Estadorequerimiento::create([
            'estado' => 'PENDIENTE',
		    'sectorEstado' => '3',
        ]);
        Estadorequerimiento::create([
            'estado' => 'FINALIZADO',
		    'sectorEstado' => '1',
        ]);
        Estadorequerimiento::create([
            'estado' => 'PENDIENTE',
		    'sectorEstado' => '1',
        ]);
        Estadorequerimiento::create([
            'estado' => 'COMPRAS',
		    'sectorEstado' => '2',
        ]);
        Estadorequerimiento::create([
            'estado' => 'FINALIZADO',
		    'sectorEstado' => '2',
        ]);
        Estadorequerimiento::create([
            'estado' => 'PENDIENTE',
		    'sectorEstado' => '2',
        ]);
    }
}
