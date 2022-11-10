<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RolesPermisos;

class RolesPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Asignar permiso Rol administrador
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 1]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 2]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 3]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 4]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 5]);

        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 6]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 7]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 8]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 9]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 10]);

        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 11]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 12]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 13]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 14]);
        RolesPermisos::create(['id_rol' => 1,'id_permiso' => 15]);

        //Asignar permiso Rol Lector
        RolesPermisos::create(['id_rol' => 2,'id_permiso' => 1]);
        RolesPermisos::create(['id_rol' => 2,'id_permiso' => 6]);
        RolesPermisos::create(['id_rol' => 2,'id_permiso' => 11]);
    }
}
