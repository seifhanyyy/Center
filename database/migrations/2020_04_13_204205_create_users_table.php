<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('last name');
            $table->string('password');
            $table->integer('type')->default('3');
            $table->string('img')->default('Default.jpg');
            $table->string('email')->unique();
            $table->string('parent email')->nullable();
            $table->string('phonenum')->unique();
            $table->string('parentnum')->nullable();
            $table->boolean('gender');
            $table->string('year');
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
