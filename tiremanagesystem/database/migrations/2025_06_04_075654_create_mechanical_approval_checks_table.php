<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('mechanical_approval_checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('request_id');
            $table->string('steering_system_status');
            $table->string('suspension_status');
            $table->string('alignment_status');
            $table->string('balance_status');
            $table->string('grease_point_status');
            $table->text('comments')->nullable();
            $table->string('mechanic_officer');
            $table->string('approval_status');
            $table->timestamp('updated_at')->nullable();

            $table->foreign('request_id')->references('id')->on('tire_requests')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('mechanical_approval_checks');
    }
};
