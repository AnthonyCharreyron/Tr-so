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
        Schema::create('paiement', function (Blueprint $table) {
            $table->integer('id_paiement')->autoIncrement();
            $table->integer('id_compte');
            $table->integer('id_type');
            $table->integer('montant');
            $table->string('libelle', 100);
            $table->date('date');
            $table->string('remarque', 999)->default('Aucun');

            $table->foreign("id_compte")->references("id_compte")->on("compte")->onDelete("cascade");
            $table->foreign("id_type")->references("id_type")->on("type")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiement');
    }
};
