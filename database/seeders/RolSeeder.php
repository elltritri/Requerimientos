<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'Admin']);
        $mantenimiento = Role::create(['name' => 'Mantenimiento']);
        $panol = Role::create(['name' => 'Panol']);
        $sistema = Role::create(['name' => 'Sistema']);


        Permission::create(['name' => 'usuarios.index',
                                        'description'=>'Ver listado de Usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios.edit',
                                        'description'=>'Editar Usuarios'])->syncRoles([$admin]);
                                        
        Permission::create(['name' => 'sectores.index',
                                        'description'=>'Ver listado de sectores'])->syncRoles([$admin]);
        Permission::create(['name' => 'sectores.create',
                                        'description'=>'Crear Sectores'])->syncRoles([$admin]);
        Permission::create(['name' => 'sectores.edit',
                                        'description'=>'Editar Sectores'])->syncRoles([$admin]);
        Permission::create(['name' => 'sectores.destroy',
                                        'description'=>'Eliminar Sectores'])->syncRoles([$admin]);

        Permission::create(['name' => 'requerimiento.index',
                                        'description'=>'Ver listado de requerimientos'])->syncRoles([$admin]);
        Permission::create(['name' => 'requerimiento.create',
                                        'description'=>'Crear requerimientos'])->syncRoles([$admin]);
        Permission::create(['name' => 'requerimiento.edit',
                                        'description'=>'Editar requerimientos'])->syncRoles([$admin]);
        Permission::create(['name' => 'requerimiento.destroy',
                                        'description'=>'Eliminar requerimientos'])->syncRoles([$admin]);

        Permission::create(['name' => 'dotaciones.index',
                                        'description'=>'Ver listado de dotaciones'])->syncRoles([$admin]);
        Permission::create(['name' => 'dotaciones.create',
                                        'description'=>'Crear dotaciones'])->syncRoles([$admin]);
        Permission::create(['name' => 'dotaciones.edit',
                                        'description'=>'Editar dotaciones'])->syncRoles([$admin]);
        Permission::create(['name' => 'dotaciones.destroy',
                                        'description'=>'Eliminar dotaciones'])->syncRoles([$admin]);

        
        Permission::create(['name' => 'requerimientossistema',
                                        'description'=>'Ver requerimientos sistemas'])->syncRoles([$admin, $sistema]);
        Permission::create(['name' => 'requerimientospanol',
                                        'description'=>'Ver requerimientos Mantenimiento'])->syncRoles([$admin, $panol]); 
        Permission::create(['name' => 'requerimientosmantenimiento',
                                        'description'=>'Ver requerimientos Mantenimiento'])->syncRoles([$admin, $mantenimiento]); 
                                                                                      

                                        
                                        
        

        
        


    }
}
