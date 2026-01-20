<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();

            // VIAJE depende de EMPRESA (obligatorio)
            $table->foreignId('empresa_id')
                ->constrained('empresas')
                ->cascadeOnDelete();

            // opcional: creador/operador
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            // Campos típicos (ajusta a tu negocio)
            $table->string('referencia')->nullable();
            $table->date('fecha_salida')->nullable();
            $table->date('fecha_llegada')->nullable();
            $table->string('origen')->nullable();
            $table->string('destino')->nullable();
            $table->json('notas')->nullable();


            $table->timestamps();

            $table->index(['empresa_id', 'user_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
