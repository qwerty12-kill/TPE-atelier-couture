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
        Schema::create('coutures', function (Blueprint $table) {
            $table->id();

            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->foreignId('agent_id')->constrained()->cascadeOnDelete();

            $table->string('type_habit');
            $table->text('description')->nullable();

            $table->date('date_depot');
            $table->date('date_retrait');

            $table->enum('statut', ['en cours', 'termine', 'livre'])->default('en cours');

            $table->decimal('montant', 10, 2);

            $table->longText('mesures')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coutures');
    }
};
