<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\modulos\proyectos\models\Proyecto;
use App\modulos\proyectos\servicios\guardarProyecto;
use Illuminate\Database\Eloquent\Builder;

class proyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            return view('ver_proyecto');
        }else{
            return redirect('/');
        }
    }



    public function ajax_get_proyecto(Request $request)
    {
        $user = Auth::user();
        $params = $request->post();

        $proyectos = (new Proyecto())->whereHas('miembros', function (Builder $query) use($user) {
            $query->where('user_id', $user->id);
        })->Nombre($params)->orderBy('id', 'desc')->get()->map(function (Proyecto $proyecto){
            return ['fecha' => $proyecto->created_at->format('d/m/Y h:m:s'),
                    'cantidad_personas' => $proyecto->cantidad_personas,
                    'miembros' => $proyecto->miembros->count(),
                    'tareas_completadas'=> '30',
                    'id' => $proyecto->id,
                    'nombre' => $proyecto->nombre,
                    'descripcion' => $proyecto->descripcion,
                    'estado' => $proyecto->estado,
                    'user_id' => $proyecto->user_id,
                ];
        })->toArray();

        $response = [
                    'proyectos' =>  $proyectos,
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
        $params = $request->post();
        $params['user_id'] = $user->id;
        $params['estado'] = 'activo';
        try {
            (new guardarProyecto())->save($params);
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
