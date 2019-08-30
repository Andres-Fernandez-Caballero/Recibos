<?php

use App\Http\classes\ArraysEstaticos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReciboGasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibo_gas', function (Blueprint $table) {
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
        Schema::dropIfExists('recibo_gas');
    }
}
