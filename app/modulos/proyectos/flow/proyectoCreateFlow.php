<?php

namespace App\modulos\proyectos\flow;

use  App\modulos\proyectos\models\Proyecto;
use  App\modulos\proyectos\models\proyectoMiembros;
use  Illuminate\Support\Facades\DB;


class proyectoCreateFlow extends proyectoFlow
{

    public function run()
    {
        $this->guardarcreador();
    }

    public function guardarcreador()
    {
        $proyecto = $this->proyecto;
        DB::transaction(function () use ($proyecto) {
            proyectoMiembros::create([  
                'user_id' => $proyecto->user_id,
                'proyecto_id' => $proyecto->id   
            ]);      
        });
       
    }
}