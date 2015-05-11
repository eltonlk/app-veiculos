<?php

use Illuminate\Database\Seeder;
use App\City as City;
use League\Csv\Reader as Reader;

class CityTableSeeder extends Seeder {

  public function run()
  {
    DB::statement("TRUNCATE TABLE cities CASCADE");

    $reader = Reader::createFromPath(base_path() . '/Base_de_dados_dos_municipios.csv');

    foreach($reader as $index => $row)
    {
      if (isset($row[1]) and isset($row[2]) and isset($row[3])) {
        $city = new City(['name' => $row[3], 'state_id' => $row[1]]);
        $city->id = $row[2];
        $city->save();
      }
    }
  }

}
