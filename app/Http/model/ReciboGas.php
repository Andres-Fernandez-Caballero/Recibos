<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReciboGas extends Model
{

    protected $primaryKey = 'id';
    protected $fillable = ['mes','year','consumo','saldo','esta_paga'];

    public function getConsumoFormateado(){
        return $this->attributes['consumo'] . ' Cm³';
    }

    public function getSaldoFormateado(){
        return '$ '. $this->attributes['saldo'];
    }
}
