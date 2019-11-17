<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class CostaRicaStatesSeeder extends Seeder
{

     use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     * country_id, code, name, status
     * @return void
     */
    public function run()
    {
        Country::create($this->country());
        $this->disableForeignKeys();
        $this->truncate('states');
        $state=[
            ['id' => 710200, 'country_code' => 'CR', 'name' => 'Alajuela', 'active' => 1, 'slug' => 'alajuela'],
            ['id' => 710216, 'country_code' => 'CR', 'name' => 'Cartago', 'active' => 1, 'slug' => 'cartago'],
            ['id' => 710225, 'country_code' => 'CR', 'name' => 'Guanacaste', 'active' => 1, 'slug' => 'guanacaste'],
            ['id' => 710237, 'country_code' => 'CR', 'name' => 'Heredia', 'active' => 1, 'slug' => 'heredia'],
            ['id' => 710248, 'country_code' => 'CR', 'name' => 'Limón', 'active' => 1, 'slug' => 'limon'],
            ['id' => 710255, 'country_code' => 'CR', 'name' => 'Puntarenas', 'active' => 1, 'slug' => 'puntarenas'],
            ['id' => 710268, 'country_code' => 'CR', 'name' => 'San José', 'active' => 1, 'slug' => 'san-jose']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
