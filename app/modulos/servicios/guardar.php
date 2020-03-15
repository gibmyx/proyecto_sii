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
             return $this->update($params);
        }

        return $this->create($params);
    }

    public function create($params){
        return $params;
    }

    public function update($params){
        return $params;
    }
}