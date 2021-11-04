<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->char('RTN Cliente');
            $table->string('Nombre_Producto');
            $table->date('Fecha_Compra');
            $table->date('Fecha_Vence');
            $table->decimal('Precio');
            $table->decimal('Total');
            $table->decimal('ISV(Impuesto/venta)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
