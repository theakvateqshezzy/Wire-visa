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
        // Schema::create('cities', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('state_code');
        //     $table->string('country_code');
        //     $table->double('latitude');
        //     $table->double('longitude');
        //     $table->unsignedBigInteger('country_id');
        //     $table->unsignedBigInteger('state_id');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('cities');
    }
};