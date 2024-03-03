<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        Train::truncate();
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->azienda=fake()->azienda();
            $train->stazione_di_partenza=fake()->city();
            $train->stazione_di_arrivo=fake()->city();
            $train->orario_di_partenza=fake()->time();
            $train->orario_di_arrivo=fake()->time();
            $train->codice_del_treno='A'.rand(1, 999);
            $train->numero_di_carrozze=rand(2, 15);
            $train->in_orario=true;
            $train->cancellato='false';
            $train->save();
        }
    }
}
