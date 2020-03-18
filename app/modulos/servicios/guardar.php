<?php

namespace App\modulos\servicios;

use Illuminate\Http\Request;

class guardar
{
    protected $request;

    public function __construct()
    {
        $this->request = Request::capture();
    }

    public function save($params = [])
    {
        if(isset($params['id']) && !empty($params['id'])){
             $this->update($params);
        }

        $this->create($params);
    }

    public function create($params){
        $params;
    }

    public function update($params){
        $params;
    }
}