<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_structures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('class_id'); 
            $table->string('year');
            $table->string('month'); 
            $table->float('tution_fee');
            $table->float('exam_fee')->nullable();
            $table->float('transport_fee'); 
            $table->float('hostel_fee'); 
            $table->float('libray_fee');
            $table->float('event_fee')->nullable();
            $table->float('extra_cur_act_fee')->nullable();
            $table->float('total')->nullable();
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
        Schema::dropIfExists('fees_structures');
    }
}
