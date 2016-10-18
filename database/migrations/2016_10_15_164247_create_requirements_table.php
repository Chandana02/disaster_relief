<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('volunteerId')->unsigned();
            $table->integer('areaCode')->unsigned();
            $table->string('requirement');
            $table->timestamps();
        });

        Schema::table('requirements', function ($table) {
            $table->foreign('areaCode')
                        ->references('id')
                        ->on('areas');
            $table->foreign('volunteerId')
                        ->references('id')
                        ->on('volunteers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requirements');
    }
}
