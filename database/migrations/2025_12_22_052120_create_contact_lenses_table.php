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
        Schema::create('contact_lenses', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string('brand')->nullable();
            $table->decimal('power', 4, 2);
            $table->string('price')->nullable();
            $table->text('description');
            $table->integer('water_content');
            $table->string('protection');
            $table->string('usage');
            $table->decimal('base');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_lenses');
    }
};
