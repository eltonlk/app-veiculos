<?php

use Illuminate\Database\Seeder;
use App\State as State;

class StateTableSeeder extends Seeder {

  public function run()
  {
    DB::statement("TRUNCATE TABLE states CASCADE");

    $state = new State(['abbr' => 'AC', 'name' => 'Acre']);
    $state->id = 12;
    $state->save();

    $state = new State(['abbr' => 'AL', 'name' => 'Alagoas']);
    $state->id = 27;
    $state->save();

    $state = new State(['abbr' => 'AP', 'name' => 'Amapá']);
    $state->id = 16;
    $state->save();

    $state = new State(['abbr' => 'AM', 'name' => 'Amazonas']);
    $state->id = 13;
    $state->save();

    $state = new State(['abbr' => 'BA', 'name' => 'Bahia']);
    $state->id = 29;
    $state->save();

    $state = new State(['abbr' => 'CE', 'name' => 'Ceará']);
    $state->id = 23;
    $state->save();

    $state = new State(['abbr' => 'DF', 'name' => 'Distrito Federal']);
    $state->id = 53;
    $state->save();

    $state = new State(['abbr' => 'ES', 'name' => 'Espírito Santo']);
    $state->id = 32;
    $state->save();

    $state = new State(['abbr' => 'GO', 'name' => 'Goiás']);
    $state->id = 52;
    $state->save();

    $state = new State(['abbr' => 'MA', 'name' => 'Maranhão']);
    $state->id = 21;
    $state->save();

    $state = new State(['abbr' => 'MT', 'name' => 'Mato Grosso']);
    $state->id = 51;
    $state->save();

    $state = new State(['abbr' => 'MS', 'name' => 'Mato Grosso do Sul']);
    $state->id = 50;
    $state->save();

    $state = new State(['abbr' => 'MG', 'name' => 'Minas Gerais']);
    $state->id = 31;
    $state->save();

    $state = new State(['abbr' => 'PA', 'name' => 'Pará']);
    $state->id = 15;
    $state->save();

    $state = new State(['abbr' => 'PB', 'name' => 'Paraíba']);
    $state->id = 25;
    $state->save();

    $state = new State(['abbr' => 'PR', 'name' => 'Paraná']);
    $state->id = 41;
    $state->save();

    $state = new State(['abbr' => 'PE', 'name' => 'Pernambuco']);
    $state->id = 26;
    $state->save();

    $state = new State(['abbr' => 'PI', 'name' => 'Piauí']);
    $state->id = 22;
    $state->save();

    $state = new State(['abbr' => 'RJ', 'name' => 'Rio de Janeiro']);
    $state->id = 33;
    $state->save();

    $state = new State(['abbr' => 'RN', 'name' => 'Rio Grande do Norte']);
    $state->id = 24;
    $state->save();

    $state = new State(['abbr' => 'RS', 'name' => 'Rio Grande do Sul']);
    $state->id = 43;
    $state->save();

    $state = new State(['abbr' => 'RO', 'name' => 'Rondônia']);
    $state->id = 11;
    $state->save();

    $state = new State(['abbr' => 'RR', 'name' => 'Roraima']);
    $state->id = 14;
    $state->save();

    $state = new State(['abbr' => 'SC', 'name' => 'Santa Catarina']);
    $state->id = 42;
    $state->save();

    $state = new State(['abbr' => 'SP', 'name' => 'São Paulo']);
    $state->id = 35;
    $state->save();

    $state = new State(['abbr' => 'SE', 'name' => 'Sergipe']);
    $state->id = 28;
    $state->save();

    $state = new State(['abbr' => 'TO', 'name' => 'Tocantins']);
    $state->id = 17;
    $state->save();
  }

}
