<?php

use Illuminate\Database\Seeder;
use App\Chamada as Chamada;
use Faker\Factory as Faker;

class ChamadaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chamadas')->truncate();
        $faker = Faker::create('pt_BR');


        foreach (range(1,1000) as $i) {

            Chamada::create([
                   'origem'    => '('. $faker->randomNumber(2,true) .')' .   $faker->randomNumber(4,true)  .'-'. $faker->randomNumber(4,true),
                   'destino'   => '('. $faker->randomNumber(2,true) .')' .   $faker->randomNumber(4,true)  .'-'. $faker->randomNumber(4,true),
                   'tempo'     =>  $faker->numberBetween(1,10),
                   'custo'     =>  $faker->numberBetween(1.1,5.1),
                   'detalhes'  =>  $faker->sentence(3),
                   'data'      =>  $faker->date('Y-m-d')
            ]);
        }
    }
}