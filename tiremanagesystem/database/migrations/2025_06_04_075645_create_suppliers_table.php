<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('tire_id');
            $table->string('tire_size');
            $table->string('brand');
            $table->text('address')->nullable();
            $table->string('country');
            $table->string('phone_number');
            $table->string('email');
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('tire_id')->references('id')->on('tires')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('suppliers');
    }
};
