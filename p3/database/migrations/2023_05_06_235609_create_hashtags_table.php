<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Leaving this in.  There are some interesting possibilities 
     * where hashtags can be parsed outand stored in a user-hashtag table
     * this would enable sorting and grouping by data having the same hashtags
     * 
     * Out of implementation scope for this Minimum Viable P3 Product
     */
    public function up(): void
    {
        Schema::create('hashtags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hashtags');
    }
};