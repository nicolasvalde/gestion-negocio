<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration
{

    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 25);
            $table->string('apellido', 25);
            $table->string('telefono', 25);
            $table->string('mail', 40);
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('clients');
    }
}
