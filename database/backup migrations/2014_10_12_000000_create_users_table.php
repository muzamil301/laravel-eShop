<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName')->nullable();
            $table->string('gender');
            $table->integer('phone')->nullable();
            $table->integer('phoneSecondary')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('address');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('paymentType')->nullable();
            $table->string('isVerified')->default('0');
            $table->integer('status')->default('1');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
