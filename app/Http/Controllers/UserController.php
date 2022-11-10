<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;

class UserController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $users = User::all();
       foreach ($users as $key => $value) {
        $rolData = Roles::where('id', $value->id_rol )->first();
        $value->id_rol = $rolData;
       }
       return $users;
   }

    public function store(Request $request)
    {
        $emailCount = User::where('email', $request->email)->get()->count() ;

        if($emailCount > 0){
            return response()->json(["mensaje" => "El correo ya se encuentra registrado"], 404);
        }

        $user = User::create($request->all());
        return response()->json(["mensaje" => "Usuario creado con exito","data" => $user], 201);
    }

    public function update(Request $request, User $user)
    {
        $emailCount = User::where('email', $request->email)->get()->count() ;

        if($emailCount > 1){
            return response()->json(["mensaje" => "El correo ya se encuentra registrado"], 404);
        }

        $user = User::where('id', $request->id)->update($request->all());

        if($user > 0){
            return response()->json(["mensaje" => "Usuario editado con exito" ], 201);
        }else{
            return response()->json(["mensaje" => "Hubo un error al editar el usuario" ], 404);
        }
    }

    public function destroy($id)
    {

        $user = User::where("id", $id)->delete();
        if($user > 0){
            return response()->json(["mensaje" => "Usuario eliminado con exito" ], 201);
        }else{
            return response()->json(["mensaje" => "Hubo un error al Eliminar el usuario" ], 404);
        }
    }
}
