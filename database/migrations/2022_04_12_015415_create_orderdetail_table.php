<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->increments('order_id');
            $table->float('total');
            $table->integer('quantity');
            $table->integer('cart_id')->unsigned();
            $table->foreign('cart_id')->references('cart_id')->on('cart');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderdetail');
    }
};
