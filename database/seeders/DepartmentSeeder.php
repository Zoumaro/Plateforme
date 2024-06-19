<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Department;
use App\Models\District;
use App\Models\Locality;
use App\Models\Municipality;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
    {
        if(Department::count() == 0) {

            $country = Country::where('name', 'Benin')->first();

            $data = [];
            $municipalities = [];
            $districts = [];
            $towns = [];
            $schema = file_get_contents(storage_path('decoupage_territorial_benin.json'));
            $objs = json_decode($schema, true);

            foreach ($objs as $obj)  {
                $department = Department::create([
                    "name" => $obj['department'],
                    "country_id" => $country->id
                ]);

                $municipalities = $obj['communes'];

                if ($department) {
                    foreach ($municipalities as $data) {
                        $municipality = Municipality::create([
                            "name" => $data['commune'],
                            "department_id" => $department->id
                        ]);

                        $districts = $data['arrondissements'];

                        if ($municipality) {
                            foreach ($districts as $data) {
                                $district = District::create([
                                    "name" => $data['arrondissement'],
                                    "municipality_id" => $municipality->id
                                ]);

                                $towns = $data['quartiers'];

                                if ($district) {
                                    foreach ($towns as $data) {
                                        Locality::create([
                                            "name" => $data['quartier'],
                                            "district_id" => $district->id
                                        ]);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
