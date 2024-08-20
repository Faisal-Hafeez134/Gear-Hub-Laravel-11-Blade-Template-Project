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
        Schema::create('porders', function (Blueprint $table) {
            $table->id('order_id');
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('bill')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->enum('Type', array('Active', 'Not Active'))->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('porders');
    }
};
