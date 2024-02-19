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
        Schema::create('visa_request_documents', function (Blueprint $table) {
            $table->id();
            $table->dateTime('rejected_at')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->unsignedBigInteger('file_id');
            $table->unsignedBigInteger('visa_request_criteria_document_id');
            $table->unsignedBigInteger('visa_request_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_request_documents');
    }
};