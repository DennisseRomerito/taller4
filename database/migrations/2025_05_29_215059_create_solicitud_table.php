<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->string('tema');
            $table->text('descripcion');
            $table->enum('area', ['ti', 'contabilidad', 'administrativo', 'operativo']);
            $table->timestamp('fecha_registro')->nullable();
            $table->timestamp('fecha_cierre')->nullable();
            $table->enum('estado', ['solicitado', 'aprobado', 'rechazado']);
            $table->text('observacion')->nullable();
            $table->boolean('usuarioExt');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitud');
    }
};
