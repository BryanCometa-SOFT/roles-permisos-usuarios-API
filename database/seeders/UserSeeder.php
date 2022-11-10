<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'nombre' => 'Bryan',
            'apellido' => 'Cometa',
            'telefono' => '3015724171',
            'id_rol' => 1,
            'email'=> 'bryanteveperdomo2@gmail.com',
            'password' => '$2y$10$vMIcR90cxiFT.hkzJiIGEOl3Spw0OZ.YNmX2Hl/V43YFMDGwxLSHi', //12345678,
        ]);

        User::create([
            'nombre' => 'Pepito',
            'apellido' => 'Perez',
            'telefono' => '3015724221',
            'id_rol' => 2,
            'email'=> 'pepito@gmail.com',
            'password' => '$2y$10$vMIcR90cxiFT.hkzJiIGEOl3Spw0OZ.YNmX2Hl/V43YFMDGwxLSHi', //12345678,
        ]);

        User::create([
            'nombre' => 'Alex',
            'apellido' => 'Perez',
            'telefono' => '30157242221',
            'id_rol' => 3,
            'email'=> 'Alex@gmail.com',
            'password' => '$2y$10$vMIcR90cxiFT.hkzJiIGEOl3Spw0OZ.YNmX2Hl/V43YFMDGwxLSHi', //12345678,
        ]);

        User::create([
            'nombre' => 'Barto',
            'apellido' => 'Perez',
            'telefono' => '30157242221',
            'id_rol' => 3,
            'email'=> 'Barto@gmail.com',
            'password' => '$2y$10$vMIcR90cxiFT.hkzJiIGEOl3Spw0OZ.YNmX2Hl/V43YFMDGwxLSHi', //12345678,
        ]);


    }
}
