<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->unsignedBigInteger('services_id');
            $table->unsignedBigInteger('units_id');
            $table->time('appointment');
            $table->unsignedBigInteger('barbers_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone', 25);
            $table->boolean('another_person')->nullable();
            $table->string('name_person_checked')->nullable();

            $table->foreign('services_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('units_id')->references('id')->on('units')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('barbers_id')->references('id')->on('barbers')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduling');
    }
}
