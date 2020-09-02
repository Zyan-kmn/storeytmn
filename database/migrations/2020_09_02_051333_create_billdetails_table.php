<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilldetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('billdetails', function (Blueprint $table) {
            $table->id();
           
            $table->string('qty');
            $table->foreignId('product_id')->references('id')->on('products')
            ->onDelete('cascade');

           $table->foreignId('bill_id')->references('id')->on('bills')
           ->onDelete('cascade');

             $table->softDeletes();
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
        Schema::dropIfExists('billdetails');
    }
}
