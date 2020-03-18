<?php

namespace App\modulos\proyectos\flow;

use  App\modulos\proyectos\models\Proyecto;

class proyectoFlow
{
    protected $proyecto;

    public function __construct(Proyecto $proyecto)
    {
        $this->proyecto = $proyecto;
    }
}