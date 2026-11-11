<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('contact'); // contact, wholesale, sample_request, franchise
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('city')->nullable();
            $table->string('business_type')->nullable(); // Cafe, Catering, Corporate, Individual
            $table->string('volume_needed')->nullable();
            $table->string('flavor_interest')->nullable();
            $table->text('message')->nullable();
            $table->string('status')->default('new'); // new, contacted, sample_sent, converted, closed
            $table->text('admin_notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
