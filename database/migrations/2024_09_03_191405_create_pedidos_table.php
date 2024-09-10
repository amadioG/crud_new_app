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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id(); 
            $table->string('cod_ped'); 
            $table->string('cliente'); 
            $table->string('produto'); 
            $table->integer('quant'); 
            $table->decimal('valor_ped', 10, 2);
            $table->decimal('valor_desc', 10, 2); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};