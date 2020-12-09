<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('description');
            $table->string('address'); 
            $table->string('email'); 
            $table->longtext('phone');
            $table->string('label1'); 
            $table->string('label2'); 
            $table->string('label3'); 
            $table->string('label4'); 
            $table->string('label5'); 
            $table->string('label6'); 
            $table->string('label7'); 
            $table->string('label8');                                    
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
        Schema::dropIfExists('footer');
    }
}
