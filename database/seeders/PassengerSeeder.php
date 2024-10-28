<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //vado a popolare con dati fittizi la tabella passenger
        for($i=0; $i<50 ; $i++){
            $newPassenger = new Passenger();
            $newPassenger->nome = $faker->firstName();
            $newPassenger->cognome = $faker->lastName();
            $newPassenger->data_nascita = $faker->dateTimeThisCentury();
            $newPassenger->classe = $faker->randomDigit();
            $newPassenger->numero_passeggero = $faker->randomNumber(5, true);
            $newPassenger->save();
        }
    }
}
