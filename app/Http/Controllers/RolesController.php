<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\RolesPermisos;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::all();

        foreach ($roles as $key => $value) {
            $value->permisos = RolesPermisos::where("id_rol",$value->id)->get();
        }
        return $roles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = Roles::create(["nombre" => $request->nombre] );

        foreach ($request->permisos as $key => $value) {
            $rolPermiso = [
                'id_rol' => $roles->id,
                'id_permiso' =>  $value,
            ];
            $rolesPermisos = RolesPermisos::create($rolPermiso);
        }
        return response()->json(["mensaje" => "El Rol fue creado con exito"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $roles)
    {
        Roles::where('id',$request->id)->update(["nombre"=>$request->nombre]);

        $delete = RolesPermisos::where('id_rol',$request->id)->whereNotIn('id_permiso', $request->permisos)->delete();

        foreach ($request->permisos as $key => $value) {
            $roles = RolesPermisos::where("id_permiso", $value)->where("id_rol", $request->id)->get();
            if(sizeof($roles) < 1 ){
                $rolPermiso = [
                    'id_rol' => $request->id,
                    'id_permiso' =>  $value,
                ];
                $rolesPermisos = RolesPermisos::create($rolPermiso);
            }
        }

        return "Sé actualizó correctamente";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roles = Roles::where("id", $id)->delete();

        $rolesPermisos = RolesPermisos::all();
        foreach ($rolesPermisos as $key => $value) {
            if($value->id_rol == $id){
                RolesPermisos::where("id_rol", $id)->delete();
            }
        }

        if($roles > 0){
            return response()->json(["mensaje" => "El Rol fue eliminado con exito" ], 201);
        }else{
            return response()->json(["mensaje" => "Hubo un error al Eliminar el Rol" ], 404);
        }
    }
}
