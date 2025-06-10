<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void {
        Schema::create('tire_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->string('delivery_place_office');
            $table->string('delivery_place_town');
            $table->date('last_replacement_date');
            $table->string('existing_tire_make');
            $table->string('tire_size_required');
            $table->string('tire_brand_required');
            $table->integer('number_of_tires');
            $table->decimal('total_price', 10, 2);
            $table->integer('warranty');
            $table->string('cost_center');
            $table->integer('present_km_reading');
            $table->integer('previous_km_reading');
            $table->text('tire_wear_pattern')->nullable();
            $table->text('images')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->string('mechanic_approval_status')->nullable();
            $table->string('section_approval_status')->nullable();
            $table->string('transport_approval_status')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('tire_requests');
    }
};
