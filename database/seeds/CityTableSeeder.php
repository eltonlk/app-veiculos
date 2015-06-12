<?php

use Illuminate\Database\Seeder;
use App\City as City;
use League\Csv\Reader as Reader;

class CityTableSeeder extends Seeder {

  public function run()
  {
    DB::statement("TRUNCATE TABLE cities CASCADE");

    $reader = Reader::createFromPath(base_path() . '/database/municipios.csv');

    foreach($reader as $index => $row)
    {
      if (isset($row[1]) and isset($row[2]) and isset($row[3])) {
        $name = ucfirst(mb_strtolower($row[3], 'UTF-8'));

        $city = new City(['name' => $name, 'state_id' => $row[1]]);
        $city->id = $row[2];
        $city->save();
      }
    }
  }

}
