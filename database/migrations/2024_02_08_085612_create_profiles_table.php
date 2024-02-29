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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('avarta')->nullable();
            $table->string('age')->nullable();
            $table->string('day')->nullable();
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('gender')->nullable();
            $table->string('gender_interest')->nullable();
            $table->string('relationship_interest')->nullable();
            $table->string('educational_background')->nullable();
            $table->string('professional_background')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('belief')->nullable();
            $table->longText('about')->nullable();
            $table->string('occupation')->nullable();
            $table->string('age_bracket')->nullable();
            $table->longText('prospective_partner')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('google_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('reg_channel');
            $table->string('is_onboarded')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
