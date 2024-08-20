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
        Schema::create('admin_login', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('fullname');
            $table->string('email');
            $table->string('password');
            $table->string('picture');
            $table->string('type')->default("admin");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_login');
    }
};
