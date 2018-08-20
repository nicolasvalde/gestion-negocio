<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{

    public function up()
    {
        Schema::create('providers', function(Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social', 40);
            $table->string('direccion', 50);
            $table->string('telefono', 25);
            $table->string('mail', 50);
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('providers');
    }
}
