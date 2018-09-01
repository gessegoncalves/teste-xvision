    <?php

use Illuminate\Database\Seeder;
use App\Numero as Numero;
use Faker\Factory as Faker;

class NumeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('numeros')->truncate();
        $faker = Faker::create('pt_BR');


        foreach (range(1,150) as $i) {

            Numero::create([
                   'telefone'=>  '('. $faker->randomNumber(2,true) .')' .   $faker->randomNumber(4,true)  .'-'. $faker->randomNumber(4,true),
                   'usuario' => $faker->name(),
                   'custo'   => $faker->numberBetween(1.1,5.1)
            ]);
        }
    }
}