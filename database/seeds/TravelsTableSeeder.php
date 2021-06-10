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
            $newTraveller = new Travel();
            
            $newTraveller->title = 'Grand Tour Giappone';
            $newTraveller->days = rand(6, 20);
            $newTraveller->description = 'Grand Tour Giappon per vedere tutte le meraviglie del paese del Sol Levante';
            $newTraveller->nations = 'Giappone';
            $newTraveller->price = rand(2000, 6000);

            $newTraveller->save();
        }
    }
}
