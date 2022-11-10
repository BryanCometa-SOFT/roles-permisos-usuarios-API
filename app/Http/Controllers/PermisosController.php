<?php

namespace App\Http\Controllers;

use App\Models\Permisos;
use Illuminate\Http\Request;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = Permisos::all();
        return $permisos;
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
        $permiso = Permisos::create($request->all());
        return response()->json(["mensaje" => "Permiso creado con exito","data" => $permiso], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permisos  $permisos
     * @return \Illuminate\Http\Response
     */
    public function show(Permisos $permisos)
    {
        $permiso = Permisos::where('id', $request->id)->update($request->all());

        if($permiso > 0){
            return response()->json(["mensaje" => "Permiso editado con exito" ], 201);
        }else{
            return response()->json(["mensaje" => "Hubo un error al editar el permiso" ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permisos  $permisos
     * @return \Illuminate\Http\Response
     */
    public function edit(Permisos $permisos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permisos  $permisos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permisos $permisos)
    {
        $permiso = Permisos::where('id', $request->id)->update($request->all());
        if($permiso > 0){
            return response()->json(["mensaje" => "Permiso editado con exito" ], 201);
        }else{
            return response()->json(["mensaje" => "Hubo un error al editar el permiso" ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permisos = Permisos::where("id", $id)->delete();
        if($permisos > 0){
            return response()->json(["mensaje" => "El permiso fue eliminado con exito" ], 201);
        }else{
            return response()->json(["mensaje" => "Hubo un error al Eliminar el permiso" ], 404);
        }
    }
}
