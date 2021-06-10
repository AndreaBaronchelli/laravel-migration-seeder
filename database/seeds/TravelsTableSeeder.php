<?php

use Illuminate\Database\Seeder;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            $newTravel = new Travel();
            
            $newTravel->title = 'Grand Tour Giappone';
            $newTravel->days = rand(6, 20);
            $newTravel->description = 'Grand Tour Giappone per vedere tutte le meraviglie del paese del Sol Levante';
            $newTravel->nations = 'Giappone';
            $newTravel->price = rand(2000, 6000);
            $newTravel->isFlightIncluded = rand(0, 1);
            $newTravel->isConfirmed = rand(0, 1);

            $newTravel->save();
        }

    }
}
