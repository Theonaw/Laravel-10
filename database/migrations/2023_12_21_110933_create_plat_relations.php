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
        Schema::table('plats', function (Blueprint $table) {
            $table->foreignId('categories_id')->references('id')->on('categories');
        });
        Schema::create('etiquettes_plats', function (Blueprint $table) {
            $table->foreignId('etiquettes_id')->references('id')->on('etiquettes');
            $table->foreignId('plats_id')->references('id')->on('plats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiquettes_plats');

        Schema::table('plats', function (Blueprint $table) {
            $table->dropForeign(['categories_id']);
        });
    }
};
