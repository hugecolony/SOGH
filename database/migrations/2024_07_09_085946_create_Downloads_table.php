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
        Schema::create('Downloads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('File', 300);
            $table->string('FileName');
            $table->timestamps();
            $table->unique(['File', 'FileName'], 'downloads');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Downloads');
    }
};
