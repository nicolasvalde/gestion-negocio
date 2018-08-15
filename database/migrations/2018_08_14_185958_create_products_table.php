<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::create('products', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('descripcion');
            $table->float('precio_actual')->default(0);
            $table->float('margen_ganancia')->default(30);
            $table->integer('stock')->default(0);
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::drop('products');
    }
}
