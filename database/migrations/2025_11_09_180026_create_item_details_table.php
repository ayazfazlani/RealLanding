<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('item_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portfolio_item_id')->constrained()->onDelete('cascade'); // Added foreign key
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0); // Added for ordering
            $table->boolean('is_active')->default(true); // Added for activation
            $table->timestamps();
            $table->softDeletes(); // Added soft deletes
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('item_details');
    }
};