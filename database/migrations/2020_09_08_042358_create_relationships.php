<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelationships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table)
        {
        $table->foreign('id_charges')->references('id')->on('charges')->onUpdate('cascade');
        $table->foreign('id_states')->references('id')->on('states')->onUpdate('cascade');
        $table->foreign('id_documenttypes')->references('id')->on('documenttypes')->onUpdate('cascade');
        });

       Schema::table('products', function ($table)
        {
        $table->foreign('id_states')->references('id')->on('states')->onUpdate('cascade');
        });

       Schema::table('product_user', function ($table)
        {
        $table->foreign('id_products')->references('id')->on('products')->onUpdate('cascade');
        $table->foreign('id_users')->references('id')->on('users')->onUpdate('cascade');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relationships');
    }
}
