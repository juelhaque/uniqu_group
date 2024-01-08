<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 20);
            $table->string('email', 80);
            $table->string('about_title', 100);
            $table->text('about_description')->nullable();
            $table->text('business_sector1_icon')->nullable();
            $table->text('business_sector1_title')->nullable();
            $table->text('business_sector1_details')->nullable();
            $table->text('business_sector2_icon')->nullable();
            $table->text('business_sector2_title')->nullable();
            $table->text('business_sector2_details')->nullable();
            $table->text('about_image')->nullable();
            $table->text('about_image2')->nullable();
            $table->text('about_image3')->nullable();
            $table->text('about_image4')->nullable();
            $table->text('company_logo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('address');
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
        Schema::dropIfExists('company_profiles');
    }
}
