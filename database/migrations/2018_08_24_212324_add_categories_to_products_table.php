<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoriesToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
           // $table->integer('id_category')->unsigned();
           // $table->foreign('id_category')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('id_category')->references('id')->on('products')->onDelete('cascade');
            $table->dropForeign('products_id_category_foreign');
            $table->dropColumn('id_category');
        });
    }
}
