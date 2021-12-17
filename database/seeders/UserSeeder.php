<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email'=> 'admin@asd.com',
            'password' => bcrypt('asdasdasd')
        ])->assignRole('Admin');
        
        User::create([
            'name' => 'Agustin',
            'email'=> 'agustin@asd.com',
            'password' => bcrypt('asdasdasd')
        ])->assignRole('Sistema');

        User::create([
            'name' => 'Pablo',
            'email'=> 'pablo@asd.com',
            'password' => bcrypt('asdasdasd')
        ])->assignRole('Mantenimiento');

        User::create([
            'name' => 'osvaldo',
            'email'=> 'osvaldo@asd.com',
            'password' => bcrypt('asdasdasd')
        ])->assignRole('Panol');


        
    }
}
