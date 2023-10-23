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
        Schema::create('ourproduct', function (Blueprint $table) {
            $table->id('ourproduct_id');
            $table->string('itemImg', 100);
            $table->string('itemText', 100);
            $table->string('itemDesc', 10000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourproduct');
    }
};
