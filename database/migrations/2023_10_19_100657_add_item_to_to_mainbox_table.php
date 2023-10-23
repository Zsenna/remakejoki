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
        Schema::table('mainbox', function (Blueprint $table) {
            //
            $table->string('itemTo', 100);
            $table->string('compt', 10000);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mainbox', function (Blueprint $table) {
            //
            $table->dropColumn('itemImg');
        });
    }
};
