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
        Schema::create('visa_requests', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('label');
            $table->dateTime('submitted_at')->nullable();
            $table->dateTime('rejected_at')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('assigned_to');
            $table->unsignedBigInteger('visa_request_criteria_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visa_requests');
    }
};