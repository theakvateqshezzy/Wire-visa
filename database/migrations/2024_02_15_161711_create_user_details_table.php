<?php

use App\Enums\RoleType;
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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('avatar_id')->nullable();
            $table->dateTime('dashboard_at')->nullable();
            $table->boolean('is_approved')->default(true);
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('invited_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};