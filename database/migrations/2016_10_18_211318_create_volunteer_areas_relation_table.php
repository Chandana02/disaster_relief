<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteerAreasRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteerArea', function (Blueprint $table) {
            $table->integer('volunteerId')->unsigned();
            $table->integer('areaCode')->unsigned();
            $table->timestamps();
        });

        Schema::table('volunteerArea', function (Blueprint $table) {
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
        Schema::drop('volunteerArea');
    }
}
