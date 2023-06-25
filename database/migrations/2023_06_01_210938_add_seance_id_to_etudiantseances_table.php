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
        Schema::table('etudiantseances', function (Blueprint $table) {
            $table->unsignedBigInteger('seance_id');
            $table->foreign('seance_id')->references('id')->on('seances');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('etudiantseances', function (Blueprint $table) {
            $table->dropColumn('seance_id');
            //
        });
    }
};
