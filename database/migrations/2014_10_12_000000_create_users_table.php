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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('blood_group');

            $table->bigInteger('division')->unsigned();
            $table->foreign('division')->references('id')->on('divisions');

            $table->bigInteger('district')->unsigned();
            $table->foreign('district')->references('id')->on('districts');

            $table->bigInteger('upazila')->unsigned();
            $table->foreign('upazila')->references('id')->on('upazilas');

            $table->string('mobile');
            $table->string('last_donate_date')->nullable();
            $table->string('isAdmin')->nullable();
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
