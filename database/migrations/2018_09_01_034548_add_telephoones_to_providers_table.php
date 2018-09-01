<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTelephoonesToProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('providers', function (Blueprint $table) {
            $table->integer('id_telephone')->unsigned();
            $table->foreign('telephone')->references('id')->on('Provider_Phones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('providers', function (Blueprint $table) {
            $table->foreign('id_telephone')->references('id')->on('provider_phones')->onDelete('cascade');
            $table->dropForeign('products_id_category_foreign');
            $table->dropColumn('id_telephone');
        });
    }
}
