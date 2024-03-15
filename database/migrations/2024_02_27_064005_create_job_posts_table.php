<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('email');
            $table->string('job_location');
            $table->string('phone');
            $table->string('job_type')->nullable();
            $table->longText('job_description');
            $table->longText('experience');
            $table->longText('education');
            $table->string('salary');
            $table->string('gender')->nullable();
            $table->date('published_date');
            $table->date('deadline_date');
            $table->string('company_name');
            $table->string('company_logo');
            $table->longText('company_details');
            $table->string('company_website');
            $table->string('fb_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('linkdin_link')->nullable();
            $table->string('other_benefit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};
