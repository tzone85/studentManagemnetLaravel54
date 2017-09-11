<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('students');
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->boolean('sex');
            $table->string('phone', 50);
            $table->date('dob');
            $table->string('email', 50);
            $table->string('rac', 50);
            $table->boolean('status');
            $table->string('nationality', 50);
            $table->string('national_card', 50);
            $table->string('passport', 50);
            $table->string('village', 50);
            $table->string('cummune', 50);
            $table->string('district', 50);
            $table->string('province', 50);
            $table->string('current_address', 200);
            $table->date('dateregistered');
            $table->string('photo', 200);
            $table->integer('user_id');

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
        Schema::drop('students');
    }
}
