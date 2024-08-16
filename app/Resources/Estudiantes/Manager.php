<?php

namespace App\Resources\Estudiantes;

use App\Models\estudiantes;

class Manager
{
    public function listarRegistros()
    {
        return estudiantes::all();//obteniendo los registros de la base de datos
    }

    public function actualizarEstudiantes($request, $id){
        return estudiantes::where("id", $id)->update([
            "nombre" => $request->nombre,
            "curso" => $request->curso,
            "telefono" => $request->telefono,
            "correo" => $request->correo
        ]);
    }

    public function eliminarEstudiante($id){
        $estudiante = estudiantes::find($id);
        return $estudiante->delete();

    }

    public function buscarEstudiante($id){
        return estudiantes::find($id);
    }

    public function crearEstudiante($request){
        return estudiantes::create([
            'nombre' => $request->nombre,
            'curso' => $request->curso,
            'telefono' => $request->telefono,
            'correo' => $request->correo
        ]);
    }
}
