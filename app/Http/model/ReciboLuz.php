<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReciboLuz extends Model
{
    protected $table = 'recibosLuz';
    protected $primaryKey = 'id';
    protected $fillable = ['mes','year','consumo','saldo','esta_paga'];

    public function getConsumoFormateado(){
        return $this->attributes['consumo'].' KW';
    }
    public function getSaldoFormateado(){
        return '$ '. $this->attributes['saldo'];
    }
}
