<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeginKeyRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recibos', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')
                ->references('id')->on('recibo_categorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recibos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
        });
    }
}
