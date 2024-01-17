<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchievmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('achievments', function (Blueprint $table) {
            $table->id();
            $table->string('group')->nullable();
            $table->string('company')->nullable();
            $table->string('business')->nullable();
            $table->string('employee')->nullable();
            $table->string('group_data')->nullable();
            $table->string('company_data')->nullable();
            $table->string('business_data')->nullable();
            $table->string('employee_data')->nullable();
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
        Schema::dropIfExists('achievments');
    }
}
