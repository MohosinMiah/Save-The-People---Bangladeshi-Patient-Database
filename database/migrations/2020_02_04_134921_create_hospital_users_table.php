<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hospital_name',200);
            $table->string('phone',20);
            $table->string('email',100);
            $table->string('division',100);
            $table->string('city',100);
            $table->string('thana',100);
            $table->integer('post_code',10);
            $table->string('password',100);
            $table->boolean('status')->nullable();
            $table->integer('opt_code',10)->nullable();
            $table->string('photo',100);
            $table->text('street_address')->nullable();
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
        Schema::dropIfExists('hospital_users');
    }
}
