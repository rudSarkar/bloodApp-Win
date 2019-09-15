<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestBloodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_blood', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('blood_group');
            $table->string('mobile');

            $table->bigInteger('division')->unsigned();
            $table->foreign('division')->references('id')->on('divisions');

            $table->bigInteger('district')->unsigned();
            $table->foreign('district')->references('id')->on('districts');

            $table->bigInteger('upazila')->unsigned();
            $table->foreign('upazila')->references('id')->on('upazilas');
            
            $table->string('when_need');
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
        Schema::dropIfExists('request_blood');
    }
}
