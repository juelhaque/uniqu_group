<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelcomeNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcome_notes', function (Blueprint $table) {
            $table->id();
            $table->string('welcome_note', 100);
            $table->text('about_description')->nullable();
            $table->text('accessories')->nullable();
            $table->text('analysis')->nullable();
            $table->text('about_image')->nullable();
            $table->text('about_image2')->nullable();
            $table->text('about_image3')->nullable();
            $table->text('about_image4')->nullable();
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
        Schema::dropIfExists('welcome_notes');
    }
}
