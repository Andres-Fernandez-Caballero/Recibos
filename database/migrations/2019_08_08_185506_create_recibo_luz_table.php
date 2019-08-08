<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Http\classes\ArraysEstaticos;

class CreateReciboLuzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibosLuz', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('mes',ArraysEstaticos::MESES_DEL_ANO);
            $table->integer('year');
            $table->double('consumo',12,2);
            $table->double('saldo',10,2);
            $table->boolean('esta_paga')->default(false);
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
        Schema::dropIfExists('recibos_luz');
    }
}
