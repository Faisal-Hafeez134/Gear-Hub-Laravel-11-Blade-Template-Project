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
        Schema::create('porders_items', function (Blueprint $table) {
            $table->id();


            $table->bigInteger('productid')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('price')->nullable();

            $table->foreignId('order_id')->constrained('porders', 'order_id')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porders_items');
    }
};
