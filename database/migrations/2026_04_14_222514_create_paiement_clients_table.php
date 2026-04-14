<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('paiement_clients', function (Blueprint $table) {
            $table->id();

            $table->foreignId('couture_id')->constrained()->cascadeOnDelete();

            $table->decimal('montant', 10, 2);

            $table->enum('mode', ['caisse', 'mobile money']);

            $table->date('date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiement_clients');
    }
};
