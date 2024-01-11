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
        Schema::create('tarea', function (Blueprint $table) {
            $table->id("idTar"); // crea por defecto el atributo id como clave primaria
            $table->text("text");
            $table->boolean("completa")->default(false);
            $table->timestamp("fecha");

            // Laravel crea automáticamente los campos created_at y updated_at
            // que, posteriormente gestionará de forma automatica
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarea');
    }
};
