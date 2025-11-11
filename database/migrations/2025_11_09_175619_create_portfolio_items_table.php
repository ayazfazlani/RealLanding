<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_items', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->foreignId('portfolio_category_id')->constrained()->onDelete('cascade'); // Fixed typo
            $table->string('image')->nullable(); // Changed from 'file' to 'string'
            $table->text('short_description')->nullable(); // Changed to text for longer content
            $table->boolean('is_active')->default(true);
            $table->timestamps();
            $table->softDeletes(); // Added soft deletes for consistency
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_items');
    }
};