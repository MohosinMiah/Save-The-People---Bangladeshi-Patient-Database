<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hospital_id');
            $table->string('patient_name',100);
            $table->dateTime('issue_date');   
            $table->string('diseases_name',100);  
            $table->dateTime('date_birth'); 
            $table->integer('age'); 
            $table->string('nationality',40);
            $table->string('phone',20)->nullable();
            $table->string('gender',10);
            $table->text('note')->nullable();
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
        Schema::dropIfExists('hospital_patients');
    }
}
