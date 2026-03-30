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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45); // IPv6 max length
            $table->text('user_agent')->nullable();
            $table->string('browser')->nullable();
            $table->string('device_type')->nullable(); // mobile, desktop, tablet
            $table->date('visited_date');
            $table->unsignedInteger('hits')->default(1);
            $table->timestamps();
            
            // Helpful index for fast daily querying
            $table->index(['visited_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
