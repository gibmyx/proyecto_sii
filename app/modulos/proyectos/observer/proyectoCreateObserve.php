<?php

namespace App\modulos\proyectos\observer;

use  App\modulos\proyectos\models\Proyecto;
use  App\modulos\proyectos\flow\proyectoCreateFlow;

class proyectoCreateObserve
{
    public function created(Proyecto $proyecto)
    {
        $this->flow($proyecto);
    }


    public function flow($proyecto)
    {
        (new proyectoCreateFlow($proyecto))->run();
    }
}