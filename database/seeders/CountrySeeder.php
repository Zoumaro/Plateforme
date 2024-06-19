<?php

namespace Database\Seeders;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
    {
        if(Country::count() == 0) {
            $schema = file_get_contents(storage_path('countryCodes.json'));
            $countries = json_decode($schema, true);

            foreach ($countries as $country)  {

            Country::create([
                "name" => $country["name"],
                "phone_prefix" => $country["dial_code"],
                "code" => $country["code"],
            ]);

            }
        }
    }
}
