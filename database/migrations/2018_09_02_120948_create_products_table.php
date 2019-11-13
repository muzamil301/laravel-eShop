<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('brandName', 100);
            $table->string('decription', 100);
            $table->integer('price');
            $table->integer('discountPrice')->nullable();
            $table->string('size', 191)->nullable(); /* small, medium, large, xl,xxl */
            $table->string('color', 191)->nullable(); /* small, medium, large, xl,xxl */

            $table->unsignedInteger('categoryId')->references('id');
            $table->foreign('categoryId')->references('id')->on('category');

            $table->unsignedInteger('subCategoryId')->references('id');
            $table->foreign('subCategoryId')->references('id')->on('sub_category');
            $table->string('imgUrl', 191)->nullable();
            $table->integer('quantity')->default('1');
            $table->boolean('status')->default('1');
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
        Schema::dropIfExists('products');
    }
}
