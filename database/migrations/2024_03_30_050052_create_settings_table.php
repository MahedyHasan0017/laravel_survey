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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('logo')->nullable();
            $table->text('about_company')->nullable();
            $table->string('facebook_url')->nullable()->default('f');
            $table->string('youtube_url')->nullable()->default('y');
            $table->string('twitter_url')->nullable()->default('t');
            $table->string('instagram_url')->nullable()->default('i');
            $table->string('others_url')->nullable();
            $table->string('active_phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
