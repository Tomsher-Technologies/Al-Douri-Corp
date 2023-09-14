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
        Schema::table('home_banners', function (Blueprint $table) {
            $table->string('ar_heading')->nullable()->after('heading');
            $table->string('ar_content')->nullable()->after('content');
            $table->string('ar_btn_text')->nullable()->after('btn_text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_banners', function (Blueprint $table) {
            $table->dropColumn('ar_heading');
            $table->dropColumn('ar_content');
            $table->dropColumn('ar_btn_text');
        });
    }
};
