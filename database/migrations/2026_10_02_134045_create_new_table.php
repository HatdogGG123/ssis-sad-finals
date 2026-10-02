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
            $table->id();                       // Auto-incrementing ID primary key
            $table->string('name');             // VARCHAR column for the product name
            $table->text('description');        // TEXT column for long details
            $table->decimal('price', 8, 2);     // DECIMAL column for currency (e.g., 999,999.99)
            $table->integer('stock_quantity');  // INT column for inventory
            $table->timestamps();               // Automatically adds 'created_at' and 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('new');
    }
};
