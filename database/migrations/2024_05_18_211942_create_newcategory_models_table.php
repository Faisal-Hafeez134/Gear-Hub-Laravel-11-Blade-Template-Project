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
        Schema::create('newcategory_models', function (Blueprint $table) {
            $table->id();
            $table->string('category_name')->default('null');
            $table->string('slug')->default('null');
            // $table->string('phone')->default('null');
            $table->string('description')->default('null');
            $table->string('meta_title')->default('null');
            $table->string('meta_description')->default('null');
            $table->string('meta_keywords')->default('null');

            $table->string('image')->default('null');
            $table->string('status')->default('null');
            // $table->string('image')->default('null');
            // $table->boolean('status')->default(1);
            // $table->boolean('popular')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newcategory_models');
    }
};
