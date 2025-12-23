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
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('front_image');
            $table->string('back_image')->nullable();
            $table->string('type');
            $table->string('gender');
            $table->text('description')->nullable();
            $table->string('price')->nullable();
            $table->foreignId('brand_id')
                ->nullable()
                ->constrained('brands')
                ->cascadeOnDelete();
            $table->foreignId('shape_id')
                ->nullable()
                ->constrained('shapes')
                ->cascadeOnDelete();
            $table->foreignId('frame_id')
                    ->nullable()
                    ->constrained('frames')
                    ->cascadeOnDelete();
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections');
    }
};
