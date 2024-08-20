<?php

namespace App\Http\Controllers;

use App\Resources\Estudiantes\Manager;
use Illuminate\Http\Request;

class estuiantesControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $manager;
    public function __construct()
    {
        $this->manager = new Manager();
    }
    public function index()
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->listarRegistros()
        ]);
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
        return response()->json([
            "status" => 200,
            "data" => $this->manager->crearEstudiante($request)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->buscarEstudiante($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->actualizarEstudiantes($request, $id)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            "status" => 200,
            "data" => $this->manager->eliminarEstudiante($id)
        ]);
    }
}
