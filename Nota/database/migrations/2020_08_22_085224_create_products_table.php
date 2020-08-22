<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('puntos');
            $table->double('precio_lista', 8, 2);
            $table->double('20', 8, 2);
            $table->double('25', 8, 2);
            $table->double('30', 8, 2);
            $table->double('35', 8, 2);
            $table->double('40', 8, 2);
            $table->double('precio_integrado', 8, 2);
            $table->double('precio_sugerido', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
