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
        // database/migrations/xxxx_xx_xx_create_businesses_table.php
     Schema::create('businesses', function (Blueprint $table) {
                 $table->id();
                 $table->string('name');
                 $table->string('address')->nullable();
                 $table->string('phone')->nullable();
                 $table->string('email')->nullable();
                 $table->string('logo_path')->nullable();
                 $table->timestamps();
             });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
