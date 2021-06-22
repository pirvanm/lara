<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //https://laravel.com/docs/8.x/migrations#creating-tables
        Schema::create('order_products', function (Blueprint $table) {
            // ce coloane vrei si cat vrei 
            $table->bigIncrements('id');
            $table->string('nume');
            $table->string('prenume');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
