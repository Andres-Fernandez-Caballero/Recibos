<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\ReciboLuz;
use App\Http\classes\ArraysEstaticos;

class LuzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 1; $i <= 9; $i++):
            $recibo = new ReciboLuz([
                'mes' => ArraysEstaticos::MESES_DEL_ANO[$i],
                'year' => 2019,
                'consumo' => $faker->numberBetween(300,1000),
                'saldo' => $faker->numberBetween(300,1000),
            ]);
            $recibo->save();
        endfor;
    }
}
