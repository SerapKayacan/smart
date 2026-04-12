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
        Schema::table('tab_panels', function (Blueprint $table) {
            $table->dropColumn([
                'nav_button_text',
                'description',
                'bullet_1',
                'bullet_2',
                'bullet_3',
                'button_text',
                'button_link'
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tab_panels', function (Blueprint $table) {
            $table->string('nav_button_text')->nullable();
            $table->text('description')->nullable();
            $table->string('bullet_1')->nullable();
            $table->string('bullet_2')->nullable();
            $table->string('bullet_3')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
        });
    }
};
