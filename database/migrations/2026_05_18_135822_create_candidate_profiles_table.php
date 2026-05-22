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
        Schema::create('candidate_profiles', function (Blueprint $table){

        $table->id();

        $table->string('name');

        $table->string('position');

        $table->string('constituency');

        $table->string('party');

        $table->string('slogan')->nullable();

        $table->longText('biography')->nullable();

        $table->string('photo')->nullable();

        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_profiles');
    }
};
