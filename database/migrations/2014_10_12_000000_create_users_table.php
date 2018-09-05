<?php

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
            $table->string('full_name');
            $table->string('name')->unique();
            $table->string('region');
            $table->string('city');
            $table->string('post_number');
            $table->string('address');
            $table->string('birthday');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id'); //Id uloge
            $table->integer('photo_id'); //Id slike
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
        Schema::drop('users');
    }
}
