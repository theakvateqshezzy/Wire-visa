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
        // Schema::create('countries', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('iso3');
        //     $table->unsignedInteger('numeric_code');
        //     $table->string('iso2');
        //     $table->string('phonecode');
        //     $table->string('capital');
        //     $table->string('currency');
        //     $table->string('currency_name');
        //     $table->string('currency_symbol');
        //     $table->string('tld');
        //     $table->string('native');
        //     $table->string('region');
        //     $table->string('region_id');
        //     $table->string('subregion');
        //     $table->string('subregion_id');
        //     $table->string('nationality');
        //     $table->string('timezones');
        //     $table->string('translations');
        //     $table->double('latitude');
        //     $table->double('longitude');
        //     $table->string('emoji');
        //     $table->string('emojiU');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('countries');
    }
};