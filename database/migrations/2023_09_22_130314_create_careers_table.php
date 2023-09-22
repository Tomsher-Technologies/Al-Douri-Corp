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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable()->comment('Part Time, Full Time');
            $table->text('title')->nullable();
            $table->text('ar_title')->nullable();
            $table->text('description')->nullable();
            $table->text('ar_description')->nullable();
            $table->string('slug')->nullable();
            $table->string('last_date')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
