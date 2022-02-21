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
        //metodo inserimento manuale
        $trains = [
            [
                'azienda' => 'Ferrovie dello stato',
                'stazione_partenza' => 'Linate',
                'stazione_arrivo' => 'Roma',
                'giorno' => '2022-02-22',
                'orario_partenza' => '16:10:00',
                'orario_arrivo' => '18:10:00',
                'codice_treno' => 'CET45F5J5',
                'numero_carrozze' => '5',
                'in_orario' => false,
                'cancellato' => false,
            ],            
            [
                'azienda' => 'Italo',
                'stazione_partenza' => 'Linate',
                'stazione_arrivo' => 'Roma',
                'giorno' => '2022-02-22',
                'orario_partenza' => '16:10:00',
                'orario_arrivo' => '18:10:00',
                'codice_treno' => 'CET45F5J5',
                'numero_carrozze' => '5',
                'in_orario' => false,
                'cancellato' => false,
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda']; 
            $newTrain->stazione_partenza = $train['stazione_partenza']; 
            $newTrain->stazione_arrivo = $train['stazione_arrivo']; 
            $newTrain->giorno = $train['giorno']; 
            $newTrain->orario_partenza = $train['orario_partenza']; 
            $newTrain->orario_arrivo = $train['orario_arrivo']; 
            $newTrain->codice_treno = $train['codice_treno']; 
            $newTrain->numero_carrozze = $train['numero_carrozze']; 
            $newTrain->in_orario = $train['in_orario']; 
            $newTrain->cancellato = $train['cancellato']; 
            $newTrain->fill($train);
            $newTrain->save();
        }
    }
}
