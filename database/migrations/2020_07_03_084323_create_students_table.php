<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('std_id');
            $table->integer('roll_number')->unique();
            $table->date('date_of_admission');
            $table->string('admission_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('father_name',255);
            $table->string('mother_name',255);
            $table->string('father_occupation',255);
            $table->string('relision',100);
            $table->string('blood_group',100)->nullable();
            $table->string('email');
            $table->integer('phone')->unsigned();
            $table->integer('alt_phone')->unsigned();
            $table->string('class',100);
            $table->string('section',100);
            $table->text('address_line_1');
            $table->text('address_line_2')->nullable();
            $table->string('nationality');
            $table->string('state');
            $table->integer('pin');
            $table->string('id_proof_name',250);
            $table->string('id_proof_Number')->unique();
            $table->text('short_bio');
            $table->string('std_image',255);
            $table->string('parent_image',255);
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
        Schema::dropIfExists('students');
    }
}
