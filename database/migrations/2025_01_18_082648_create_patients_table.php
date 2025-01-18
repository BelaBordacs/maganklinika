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
        Schema::create('patients', function (Blueprint $table) {
            //$table->id(); // taj_szám az id
            $table->integer('taj_number')->primary();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('name');
            $table->date('birth_date');
            $table->integer('phone_number')->unique();
            $table->string('address');
            $table->string('email')->unique();
            //?????jelszó
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
