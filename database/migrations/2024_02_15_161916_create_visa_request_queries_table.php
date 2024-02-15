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
        Schema::create('visa_request_queries', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->boolean('is_resolved');
            $table->unsignedBigInteger('visa_request_document_id')->nullable();
            $table->unsignedBigInteger('visa_request_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_request_queries');
    }
};