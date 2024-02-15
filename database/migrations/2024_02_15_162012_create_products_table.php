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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_free')->default(false);
            $table->string('is_active')->default(true);
            $table->string('is_custom')->default(false);
            $table->unsignedFloat('price');
            $table->unsignedFloat('discount_percent')->default(0);
            $table->unsignedInteger('duration')->default(30);
            $table->string('icon');
            $table->string('stripe_price_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};