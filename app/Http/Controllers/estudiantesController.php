<?php

namespace App\Http\Controllers;

use App\Models\estudiantes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class estudiantesController extends Controller
{

    public function update(Request $request, $id){
        
        $estudiante = estudiantes::where("id", $id)->update([
            "nombre" => $request->nombre,
            "curso" => $request->curso,
            "telefono" => $request->telefono,
            "correo" => $request->correo
        ]);

        if($estudiante == true){
            Alert::success("Se actualizó correctamente el registro"); //1: composer require realrashid/sweet-alert para enviar las alertas 2:in master layout @include('sweetalert::alert') 3:Alert::success('Success Title', 'Success Message');

            return redirect()->back();

        }else{
            dd("No se pudo actualizar");
        }

    }

    public function edit($id){
        
        $estudiante = estudiantes::find($id);
        return view('estudiantes.edit')
            ->with('estudiante', $estudiante);
    }
    public function delete($id){
        
        $estudiante = estudiantes::find($id);
        $estudiante->delete();
        alert::success("Se eliminó el registro exitosamente");
        return redirect()->route('estudiante.index');
    }



    public function index()
    {
        $estudiante = estudiantes::all(); //obteniendo los registros de la base de datos
        return view("estudiantes.index")
             ->with("estudiantes", $estudiante);
    }

    public function create()
    {
        return view("estudiantes.create");
    }

    public function store(Request $request)
    {
        estudiantes::create([
            "nombre" => $request->nombre,
            "curso" => $request->curso,
            "telefono" => $request->telefono,
            "correo" => $request->correo

        ]);
    }


}
