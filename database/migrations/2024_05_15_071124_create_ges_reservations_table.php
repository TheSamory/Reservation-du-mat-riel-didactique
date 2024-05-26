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
        Schema::create('ges_reservations', function (Blueprint $table) {
            $table->id('id_ges_reserv');
            $table->unsignedBigInteger('id_etudiant')->nullable();
            $table->foreign('id_etudiant')->references('id_etudiant')->on('personnes');
            $table->string('reference');
            $table->string('periode');
            $table->date('date_reser');
            $table->string('statut')->default('reserver');
            $table->text('commentaire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ges_reservations');
    }
};