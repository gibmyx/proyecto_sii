<?php

namespace App\Http\Controllers;

use App\modulos\dashboard\servicios\guardarUsuario;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard($id)
    {
        return view('dashboard', compact('id'));
    }

    public function ajax_get_usuario($id)
    {
        $datos = User::where('id', $id)->get()->map(function (User $user){
            return [
                'id' => $user->id,
                'nombre' => $user->name,
                'foto' => $user->profile,
                'descripcion' => !empty($user->descripcion) ? $user->descripcion : '',
                'email' => $user->email,
                'proyectos' => $user->proyectos()->count(),
                'tareas' => 0,
                'seguidores' => 0
            ];
        })->toArray();
        $response = [
            'perfil' =>  $datos[0]
        ];
        return response()->json($response, 200);
    }

    public function ajax_guardar_perfil(Request $request){
        $params = $request->input();
        try {
            (new guardarUsuario())->save($params);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        $response = [
            'message' => "Se a creado el proyecto con exito"
        ];
    }
}
