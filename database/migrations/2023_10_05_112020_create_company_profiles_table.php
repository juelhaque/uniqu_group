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
            $table->text('professional_repair_description')->nullable();
            $table->text('about_image')->nullable();
            $table->text('company_logo')->nullable();
            $table->text('professional_repair_image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('instagram')->nullable();
            $table->string('repaired_device')->nullable();
            $table->string('repaire_specialist')->nullable();
            $table->string('years_of_work')->nullable();
            $table->string('service_lab')->nullable();
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
