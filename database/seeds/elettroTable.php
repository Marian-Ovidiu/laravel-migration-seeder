<?php

use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Elettrodomestico;

class elettroTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i <= 10; $i++){

            $elettro = new Elettrodomestico();

            $elettro->nome = $faker->name();
            $elettro->marchio = $faker->name();
            $elettro->prezzo = rand(0, 127);
            $elettro->pezzi_disponibili = rand(0, 127);
            $elettro->pezzi_venduti = rand(0, 127);

            $elettro->save();

        }

    }
}
