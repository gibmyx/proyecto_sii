<?php

namespace App\modulos\proyectos\servicios;

use  App\modulos\proyectos\models\proyecto;
use App\modulos\servicios\guardar;

class guardarProyecto extends guardar
{
    public function __construct()
    {
        
    }

    public function create($params)
    { 
        
        proyecto::create($params);        
    }

    public function update($params)
    {
        //..
    }
}