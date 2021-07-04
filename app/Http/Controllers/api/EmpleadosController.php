<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    public function index()
    {
        $datos = Empleado::paginate(5);
       return response()->json($datos);
    }

     public function show(Empleado $id)
    {
        return response()->json($id);
    }
}
