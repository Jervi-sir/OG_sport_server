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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('creator_id');
            $table->unsignedBigInteger('vice_id')->nullable();
            $table->string('logo')->nullable();
            $table->boolean('is_valid');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('users');
            $table->foreign('vice_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
