<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managments', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('name');
            $table->string('designation');
            $table->string('facebook');
            $table->string('linkdin');
            $table->string('twitter');
            $table->text('speech')->nullable();
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
        Schema::dropIfExists('managments');
    }
}
