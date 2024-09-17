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
        Schema::create('Carrers', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Type');
            $table->string('Qualification');
            $table->string('Description');
            $table->string('Location');
            $table->string('Terms');
            $table->date('ClosingOn');
            $table->tinyInteger('status')->default(0)->comment('1=hidden,0=visible');
            $table->timestamps();
            $table->string('Attachment');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Carrers');
    }
};
