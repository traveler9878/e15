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
        //
        Schema::table('notes',  function (Blueprint $table){
            //code below was throwing SQL errors, did the join in the tabel create and it worked fine
            //used name to join on leaving this here for the talking point.
            //$table->bigInteger('user_id')->unsigned()->nullable();
            //$table->foreign('user_id')->refernces('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};