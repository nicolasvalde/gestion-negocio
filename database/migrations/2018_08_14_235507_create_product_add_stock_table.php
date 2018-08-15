<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductAddStockTable extends Migration
{

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('stock');
            // Schema declaration
            // Constraints declaration

        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('stock');
        });
    }
}
