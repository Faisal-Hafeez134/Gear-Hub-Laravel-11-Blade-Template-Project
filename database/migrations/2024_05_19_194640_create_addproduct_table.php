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
        Schema::create('addproduct', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->default('null');
            $table->string('category_name')->default('null');
            $table->string('slug')->default('null');
            $table->string('description')->default('null');
            $table->decimal('price', 10, 2);
            $table->integer('quantity')->default(0);

            $table->string('brand')->default('null');
            $table->string('Status')->default('null');
            $table->string('image1')->default('null');
            $table->string('image2')->default('null');
            $table->string('image3')->default('null');
            // $table->text('features')->default('null'); // JSON or serialized array for storing features
            // $table->text('specifications')->default('null');
            $table->string('type')->default('null'); // JSON or serialized array for storing specifications
            // $table->string('status')->default('null'); // 'active' or 'inactive'

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addproduct');
    }
};
