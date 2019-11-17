<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class BoliviaStatesSeeder extends Seeder
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
            ['id' => 858, 'country_code' => 'BO', 'name' => 'Sucre', 'active' => 1, 'slug' => 'sucre'],
            ['id' => 859, 'country_code' => 'BO', 'name' => 'Santa Cruz de la Sierra', 'active' => 1, 'slug' => 'santa-cruz-de-la-sierra'],
            ['id' => 860, 'country_code' => 'BO', 'name' => 'Cochabamba', 'active' => 1, 'slug' => 'cochabamba'],
            ['id' => 861, 'country_code' => 'BO', 'name' => 'La Paz', 'active' => 1, 'slug' => 'la-paz'],
            ['id' => 707066, 'country_code' => 'BO', 'name' => 'Beni', 'active' => 1, 'slug' => 'beni'],
            ['id' => 707067, 'country_code' => 'BO', 'name' => 'Chuquisaca', 'active' => 1, 'slug' => 'chuquisaca'],
            ['id' => 707070, 'country_code' => 'BO', 'name' => 'Oruro', 'active' => 1, 'slug' => 'oruro'],
            ['id' => 707071, 'country_code' => 'BO', 'name' => 'Pando', 'active' => 1, 'slug' => 'pando'],
            ['id' => 707072, 'country_code' => 'BO', 'name' => 'Potosí', 'active' => 1, 'slug' => 'potosi'],
            ['id' => 707074, 'country_code' => 'BO', 'name' => 'Tarija', 'active' => 1, 'slug' => 'tarija']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
