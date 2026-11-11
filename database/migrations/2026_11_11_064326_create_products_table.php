<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('category'); // wholesale, retail, cold_drinks
            $table->string('tagline')->nullable();
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->decimal('original_price', 8, 2)->nullable();
            $table->string('piece_count');
            $table->string('size')->default('100ml');
            $table->string('shelf_life')->default('9 Months');
            $table->string('holding_time')->default('40+ Minutes Leak-Proof');
            $table->string('flavor');
            $table->string('image');
            $table->boolean('is_bestseller')->default(false);
            $table->boolean('is_featured')->default(true);
            $table->boolean('in_stock')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
