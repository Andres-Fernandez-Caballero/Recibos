<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReciboLuz extends Model
{
    protected $table = 'recibosLuz';
    protected $primaryKey = 'id';
    protected $fillable = ['mes','consumo','saldo','esta_paga'];
}
