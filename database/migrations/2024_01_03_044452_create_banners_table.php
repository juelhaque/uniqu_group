<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->text('about_banner')->nullable();
            $table->text('message_banner')->nullable();
            $table->text('charter_banner')->nullable();
            $table->text('mission_vision_banner')->nullable();
            $table->text('governance_banner')->nullable();
            $table->text('culture_banner')->nullable();
            $table->text('managment_banner')->nullable();
            $table->text('sprit_banner')->nullable();
            $table->text('social_banner')->nullable();
            $table->text('news_event_banner')->nullable();
            $table->text('career_banner')->nullable();
            $table->text('terms_condition_banner')->nullable();
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
        Schema::dropIfExists('banners');
    }
}
