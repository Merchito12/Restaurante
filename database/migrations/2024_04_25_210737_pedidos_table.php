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
     Schema::create("pedidos", function (Blueprint $table) {
        $table->id();
        $table->string("id_cliente");

        $table->string("nombre");
        $table->string("email");
         $table->integer("numero");
         $table->string("direccion");
         $table->string("productos");
         $table->string("estado");
         
         $table->timestamps();
    });}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
