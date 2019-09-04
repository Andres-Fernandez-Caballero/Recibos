<?php

namespace App;

use App\interfaces\RListable;
use Illuminate\Database\Eloquent\Model;

class ReciboGas extends Model implements RListable
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
