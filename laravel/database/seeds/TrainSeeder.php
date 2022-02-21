<?php

use Faker\Generator as Faker;
use App\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //METODO GENERAZIONE DATI A MANO
    //     //metodo inserimento manuale
    //     $trains = [
    //         [
    //             'azienda' => 'Ferrovie dello stato',
    //             'stazione_partenza' => 'Linate',
    //             'stazione_arrivo' => 'Roma',
    //             'giorno' => '2022-02-22',
    //             'orario_partenza' => '16:10:00',
    //             'orario_arrivo' => '18:10:00',
    //             'codice_treno' => 'CET45F5J5',
    //             'numero_carrozze' => '5',
    //             'in_orario' => false,
    //             'cancellato' => false,
    //         ],            
    //         [
    //             'azienda' => 'Italo',
    //             'stazione_partenza' => 'Linate',
    //             'stazione_arrivo' => 'Roma',
    //             'giorno' => '2022-02-22',
    //             'orario_partenza' => '16:10:00',
    //             'orario_arrivo' => '18:10:00',
    //             'codice_treno' => 'CET45F5J5',
    //             'numero_carrozze' => '5',
    //             'in_orario' => false,
    //             'cancellato' => false,
    //         ],
    //     ];

    //     foreach ($trains as $train) {
    //         $newTrain = new Train();
    //         $newTrain->azienda = $train['azienda']; 
    //         $newTrain->stazione_partenza = $train['stazione_partenza']; 
    //         $newTrain->stazione_arrivo = $train['stazione_arrivo']; 
    //         $newTrain->giorno = $train['giorno']; 
    //         $newTrain->orario_partenza = $train['orario_partenza']; 
    //         $newTrain->orario_arrivo = $train['orario_arrivo']; 
    //         $newTrain->codice_treno = $train['codice_treno']; 
    //         $newTrain->numero_carrozze = $train['numero_carrozze']; 
    //         $newTrain->in_orario = $train['in_orario']; 
    //         $newTrain->cancellato = $train['cancellato']; 
    //         $newTrain->fill($train);
    //         $newTrain->save();
    //     }
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train(); //Trains
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city() ;
            $newTrain->stazione_arrivo = $faker->city() ;
            $newTrain->giorno = $faker->date('Y-m-d');
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->ean8();
            $newTrain->numero_carrozze = $faker->numberBetween(10, 50);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
            $newTrain->save();
        }
    }
}
