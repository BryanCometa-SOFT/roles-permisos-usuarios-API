<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permisos;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Roles
        Permisos::create(['permiso' => 'Ver Roles']);
        Permisos::create(['permiso' => 'Crear Roles']);
        Permisos::create(['permiso' => 'Editar Roles']);
        Permisos::create(['permiso' => 'Actualizar Roles']);
        Permisos::create(['permiso' => 'Eliminar Roles']);

        //Usuarios
        Permisos::create(['permiso' => 'Ver Usuarios']);
        Permisos::create(['permiso' => 'Crear Usuarios']);
        Permisos::create(['permiso' => 'Editar Usuarios']);
        Permisos::create(['permiso' => 'Actualizar Usuarios']);
        Permisos::create(['permiso' => 'Eliminar Usuarios']);

        //Permisos
        Permisos::create(['permiso' => 'Ver Permisos']);
        Permisos::create(['permiso' => 'Crear Permisos']);
        Permisos::create(['permiso' => 'Editar Permisos']);
        Permisos::create(['permiso' => 'Actualizar Permisos']);
        Permisos::create(['permiso' => 'Eliminar Permisos']);
    }
}
