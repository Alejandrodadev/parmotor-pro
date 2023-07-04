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
      Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('brand')->nullable();
        $table->string('model')->nullable();
        $table->string('year')->nullable();
        $table->string('price')->nullable();
        $table->string('displacement')->nullable();
        $table->string('power')->nullable();
        $table->string('transmission')->nullable();
        $table->string('cycle')->nullable();
        $table->string('cooling')->nullable();
        $table->string('cylinders')->nullable();
        $table->string('start')->nullable();
        $table->string('secondary_transmission')->nullable();
        $table->string('wheelbase')->nullable();
        $table->string('front_brake')->nullable();
        $table->string('rear_brake')->nullable();
        $table->string('seat_height')->nullable();
        $table->string('weight')->nullable();
        $table->string('tank_capacity')->nullable();
        $table->string('image_url')->nullable();
        $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('products');
    }
};
