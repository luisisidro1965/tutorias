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
        Schema::create('tutorados', function (Blueprint $table) {
            $table->id();
            $table->string('matricula');
            $table->string('lugar_proc');
            $table->string('dirección');
            $table->string('fecha_nac');
            $table->string('teléfono');
            $table->string('edad');
            $table->enum('edo_civil', ['Soltero', 'Casado', 'Unión Libre', 'Divorciado' ]);

            $table->unsignedBigInteger('user_id')->unique();
            
            $table->foreign('user_id')
                            ->references('id')
                            ->on('users')
                            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutorados');
    }
};
