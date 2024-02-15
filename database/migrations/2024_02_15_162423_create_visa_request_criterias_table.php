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
        Schema::create('visa_request_criterias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nationality_country_id');
            $table->unsignedBigInteger('from_city_id');
            $table->unsignedBigInteger('to_city_id');
            $table->unsignedBigInteger('visa_type_id');
            $table->integer('length_start');
            $table->integer('length_end');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_request_criterias');
    }
};