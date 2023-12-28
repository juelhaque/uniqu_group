<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('address1', 50)->nullable();
            $table->string('location1', 200)->nullable();
            $table->string('phone1', 20)->nullable();
            $table->string('email1', 80)->nullable();
            $table->string('offday1', 80)->nullable();

            $table->string('address2', 50)->nullable();
            $table->string('location2', 200)->nullable();
            $table->string('phone2', 20)->nullable();
            $table->string('email2', 80)->nullable();
            $table->string('offday2', 80)->nullable();

            $table->string('address3', 50)->nullable();
            $table->string('location3', 200)->nullable();
            $table->string('phone3', 20)->nullable();
            $table->string('email3', 80)->nullable();
            $table->string('offday3', 80)->nullable();

            $table->string('address4', 50)->nullable();
            $table->string('location4', 200)->nullable();
            $table->string('phone4', 20)->nullable();
            $table->string('email4', 80)->nullable();
            $table->string('offday4', 80)->nullable();

            $table->text('image')->nullable();
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
        Schema::dropIfExists('contact_infos');
    }
}
