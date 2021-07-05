<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\EmpleadosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/empleados', [EmpleadosController::class,'index']);

Route::get('/empleados/{id}', [EmpleadosController::class,'show']);

Route::get('empleado/agregado', [EmpleadosController::class,'store']);