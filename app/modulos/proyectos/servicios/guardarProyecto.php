<?php

namespace App\modulos\proyectos\servicios;

use     App\modulos\proyectos\models\Proyecto;
use     App\modulos\proyectos\models\proyectoMiembros;
use     App\modulos\servicios\guardar;
use     Illuminate\Support\Facades\DB;

class guardarProyecto extends guardar
{
    public function __construct()
    {

    }

    public function create($params)
    {
        DB::transaction(function () use ($params) {
            Proyecto::create($params);
        });
    }

    public function update($params)
    {
        //..
    }


}
