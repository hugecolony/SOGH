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
        Schema::create('Complaint Area', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name');
            $table->string('Email');
            $table->dateTime('Date');
            $table->string('Status');
            $table->string('Detail');
            $table->boolean('Approved');
            $table->string('Against')->unique();

            $table->unique(['Against'], 'complaint area_againsts_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Complaint Area');
    }
};
