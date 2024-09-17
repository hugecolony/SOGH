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
        Schema::create('Doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('department_id');
            $table->char('Name');
            $table->char('Designation');
            $table->string('Educational_Credentials');
            $table->char('Email');
            $table->timestamp('Incoming_Time')->nullable();
            $table->timestamp('Outgoing_Time')->nullable();
            $table->string('Description')->nullable();
            $table->string('image', 300)->nullable();;
            $table->string('Facebook_URL')->nullable();
            $table->string('Linkedin_URL')->nullable();
            $table->string('Expertise')->nullable();;
            $table->char('Qualification')->nullable();;
            $table->tinyInteger('status')->default(0)->comment('1=hidden,0=visible');
            $table->char('Awards')->nullable();
            $table->char('Professional_Membership')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Doctors');
    }
};
