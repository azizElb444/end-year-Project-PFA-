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
        Schema::table('etudiant_examens', function (Blueprint $table) {
            $table->unsignedBigInteger('examen_id');
            $table->foreign('examen_id')->references('id')->on('examens');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('etudiant_examens', function (Blueprint $table) {
            $table->dropColumn('examen_id');
            //
        });
    }
};
