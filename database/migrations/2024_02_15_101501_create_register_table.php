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
        Schema::create('register', function (Blueprint $table) {

            $table->id();
            $table->string('Title');
            $table->string('description');
            $table->date('Start_date');
            $table->date('End_date');
            $table->string('Status');
            $table->unsignedTinyInteger('Progress');

            // $table->string('cnic');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
