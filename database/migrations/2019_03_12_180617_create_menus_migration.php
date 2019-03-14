<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusMigration extends Migration
{

    public function up()
    {
        Schema::create('Menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 150);
            $table->string('slug', 150)->unique();
            $table->string('url', 150)->nullable();
            $table->unsignedInteger('padre')->nullable();
            $table->smallInteger('orden')->default(0);
            $table->boolean('activo')->default(1);
            $table->string('icono')->nullable();
            $table->timestamp('creacion')->nullable();
            $table->timestamp('actualizacion')->nullable();
        });
    }

    public function down()
    {
        Schema::table('Menus', function (Blueprint $table) {
            Schema::dropIfExists('Menus');
        });
    }
}
