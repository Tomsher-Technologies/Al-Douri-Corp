<?php

use App\Models\Division;
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
        Schema::create('division_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Division::class);
            $table->string('title')->nullable();
            $table->string('menu_text')->nullable();
            $table->longText('content_1')->nullable();
            $table->longText('content_2')->nullable();
            $table->string('lang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('division_translations');
    }
};
