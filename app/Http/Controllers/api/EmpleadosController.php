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
         public function store(Request $request)
    {   
        $datosEmpleado = request()->except('_token');
        Empleado::insert($datosEmpleado);
        return response()->json($datosEmpleado);

    }
        public function edit($id)
    {
        
        $empleado = Empleado::findOrFail($id);

      //  return view('empleado.edit', compact('empleado'));
       // return responde()->json($empleado);
    }
    public function update(Request $request, $id)
    {

        Empleado::where('id','=',$id)->update();

        $empleado=Empleado::findOrFail($id);
        // return view('empleado.edit', compact('empleado'));
        return redirect('empleado')->with('mensaje','Empleado Modificado');
    }
    public function destroy($id)
    {      
        $empleado=Empleado::findOrFail($id);
        if(Storage::delete('public/'.$empleado)){

            Empleado::destroy($id);
        }
        
        return redirect('empleado')->with('mensaje', 'Empleado Borrado');
    }

}
