<?php

namespace App\modulos\dashboard\servicios;

use     App\User;
use     App\modulos\servicios\guardar;
use     Illuminate\Support\Facades\DB;

class guardarUsuario extends guardar
{
    public function __construct()
    {

    }

    public function create($params)
    {
        DB::transaction(function () use ($params) {
            User::create($params);
        });
    }

    public function update($params)
    {
        DB::transaction(function () use ($params) {
            $user = User::find($params['id']);
            $user->update($params);
        });
    }


}
