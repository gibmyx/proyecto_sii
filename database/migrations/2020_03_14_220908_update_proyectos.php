<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProyectos extends Migration
{
    public function up()
    {
        Schema::table('proyectos', function (Blueprint $table) { 
            $table->string('estado', 55)->after('descripcion')->default('activo');
            $table->integer('cantidad_personas')->after('descripcion')->default('5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proyectos', function (Blueprint $table) {
            $table->dropColumn('estado');
            $table->dropColumn('cantidad_personas');
        });
    }
}
