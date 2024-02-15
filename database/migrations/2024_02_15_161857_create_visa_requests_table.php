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
            $table->dateTime('approved_at');
            $table->dateTime('rejected_at');
            $table->unsignedBigInteger('parent_id');
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