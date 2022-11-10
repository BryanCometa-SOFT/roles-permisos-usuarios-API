<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\PermisosController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/** Usuarios */
Route::get('usuarios', [UserController::class, 'index'] );
Route::post('usuarios', [UserController::class, 'store'] );
Route::put('usuarios', [UserController::class, 'update'] );
Route::delete('usuarios/{id}', [UserController::class, 'destroy'] );

/** roles */
Route::get('roles', [RolesController::class, 'index'] );
Route::post('roles', [RolesController::class, 'store'] );
Route::put('roles', [RolesController::class, 'update'] );
Route::delete('roles/{id}', [RolesController::class, 'destroy'] );

/** permisos */
Route::get('permisos', [PermisosController::class, 'index'] );
Route::post('permisos', [PermisosController::class, 'store'] );
Route::put('permisos', [PermisosController::class, 'update'] );
Route::delete('permisos/{id}', [PermisosController::class, 'destroy'] );
