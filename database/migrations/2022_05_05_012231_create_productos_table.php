<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("referencia");
            $table->integer("precio")->default(0);
            $table->integer("peso")->default(0);
            $table->string("categoria");
            $table->integer("stock")->default(0);
            $table->timestamps();
            $table->enum("status", ["Active", "Inactive"])->default("Active");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
