<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_det', function (Blueprint $table) {
            $table->increments('id');

            
            $table->foreign('productId')->references('id')->on('products');
            $table->foreign('categoryId')->references('id')->on('category');
            $table->foreign('subCategoryId')->references('id')->on('sub_category');

            $table->foreign('orderId')->references('id')->on('order_mast');
            $table->string('size')->nullable();
            $table->integer('color')->nullable();
            $table->integer('quantity')->nullable()->default('1');
            $table->integer('paidPrice');
            $table->integer('status')->default('1');
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
        Schema::dropIfExists('order_det');
    }
}
