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
       Schema::create('collection_product_color', function (Blueprint $table) {
            $table->id();

            $table->foreignId('collection_id')
                ->constrained('collections')
                ->cascadeOnDelete();

            $table->foreignId('product_color_id')
                ->constrained('product_colors')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collection_product_color');
    }
};
