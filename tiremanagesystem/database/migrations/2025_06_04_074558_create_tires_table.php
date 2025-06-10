<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void {
        Schema::create('tires', function (Blueprint $table) {
            $table->id();
            $table->string('reference_no');
            $table->string('brand');
            $table->string('size');
            $table->decimal('price', 10, 2);
            $table->integer('warranty_distance');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('tires');
    }
};
