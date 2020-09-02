<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('qty');
            $table->date('stockdate');
            $table->string('status');


            $table->foreignId('product_id')->references('id')->on('products')
            ->onDelete('cascade');
            $table->foreignId('brand_id')->references('id')->on('brands')
            ->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')
            ->onDelete('cascade');

            $table->foreignId('shop_id')->references('id')->on('shops')
            ->onDelete('cascade');

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
        Schema::dropIfExists('instocks');
    }
}
