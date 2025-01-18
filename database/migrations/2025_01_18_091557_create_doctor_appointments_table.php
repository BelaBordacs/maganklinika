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
        Schema::create('doctor_appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->references('doctor_id')->on('doctors')->primary(); //key
            $table->datetime('start_time')->primary(); //key
            $table->foreignId('taj_number')->references('taj_number')->on('patients');
            $table->foreignId('treatment_id')->references('treatment_id')->on('treatments');
            $table->enum('status', ['booked','done', 'deleted_by_doctor', 'cancelled_by_patient']);
            $table->integer('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_appointments');
    }
};
