<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * This would link the notes to a row for each hashtag in the notes hashtag list
     * Out of scope of Minimum Viable P3 Product 
     */
    public function up(): void
    {
        Schema::create('hashtag_note', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hashtag_note');
    }
};