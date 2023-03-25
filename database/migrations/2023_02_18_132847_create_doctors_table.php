<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->integer('telephone');
			$table->integer('speciality');
			$table->text('speciality_name');
			$table->string('docterate');
            $table->string('gender');
            $table->longText('image')->nullable();
			$table->integer('doctor_charge');
            $table->text('available_days');
            $table->text('time_from');
            $table->time('time_from');
            $table->time('time_to');
			$table->string('password');
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
        Schema::dropIfExists('doctors');
    }
};
