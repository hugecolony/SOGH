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
        Schema::create('Gallery For Patient Reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Caption');
            $table->string('Video', 300);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Gallery For Patient Reviews');
    }
};
