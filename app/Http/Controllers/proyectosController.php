<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  App\modulos\proyectos\models\proyecto;

class proyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $response = [
                    'proyectos' =>  (new proyecto())->where('user_id', $user->id)->get()->map(function (proyecto $proyecto){
                                        return ['fecha' => $proyecto->created_at->format('d/m/Y'),
                                                'tareas' => '50',
                                                'tareas_completadas'=> '30',
                                                'id' => $proyecto->id,
                                                'nombre' => $proyecto->nombre,
                                                'descripcion' => $proyecto->descripcion,
                                                'estado' => $proyecto->estado,
                                            ];
                                    })->toArray(),
                    'load' => [['tiene_datos' => 1]]                
                ];       
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
            //..
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        try {
            proyecto::create([
                    'nombre' => !empty($request->post('nombre')) ? $request->post('nombre') : '',
                    'descripcion' => !empty($request->post('descripcion')) ? $request->post('descripcion') : '',
                    'cantidad_personas' => !empty($request->post('cantidad_personas')) ? $request->post('cantidad_personas') : '',
                    'user_id' => $user->id,
                    'estado' => 'activo'
            ]);
        } catch (\Exception $e) {
            throw new \Exception("Ah ocurrido un error");
        }
        $response = [
                'message' => "Se a creado el proyecto con exito"
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
