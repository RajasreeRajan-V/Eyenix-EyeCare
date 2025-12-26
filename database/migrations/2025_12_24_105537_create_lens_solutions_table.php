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
        Schema::create('lens_solutions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->foreignId('contact_lens_id')
                    ->constrained('contact_lenses')
                    ->cascadeOnDelete();          
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lens_solutions');
    }
};
