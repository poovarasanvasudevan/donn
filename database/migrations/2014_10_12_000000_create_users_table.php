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
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('abhyasiid')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phoneno')->nullable();
            $table->longText('address')->nullable();
            $table->longText('city')->nullable();
            $table->longText('country')->nullable();
            $table->longText('postalcode')->nullable();
            $table->longText('image')->nullable();
            $table->integer('passwordmismatch')->nullable();
            $table->string('passwordresettoken')->nullable();
            $table->boolean('active')->default(TRUE);
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
