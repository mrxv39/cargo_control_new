// database/migrations/2026_01_19_000001_create_empresas_table.php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();

            $table->string('name');                 // nombre empresa
            $table->string('cif')->nullable();      // CIF/NIF
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();

            $table->string('direccion')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('provincia')->nullable();
            $table->string('cp')->nullable();
            $table->string('pais')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
