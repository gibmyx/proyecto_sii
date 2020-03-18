<?php

namespace App\modulos\proyectos\models;

use Illuminate\Database\Eloquent\Model;
use App\modulos\proyectos\observer\proyectoCreateObserve;
use App\modulos\proyectos\models\proyectoMiembros;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'user_id',
        'cantidad_personas',
        'estado',
    ];

    protected static function boot()
    {
        parent::boot();
        self::observe(proyectoCreateObserve::class);
    }

    public function miembros()
    {
        return $this->hasMany(proyectoMiembros::class, 'proyecto_id');
    }


    //SCOPES PARA FILTROS
    public function scopeNombre($query, $value)
    {
        if(!empty($value['nombre']) && isset($value['nombre'])){
            $nombre = $value['nombre'];
            return $query->where('nombre', 'like', "%{$nombre}%");
        }
    }
}
