<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class AngolaStatesSeeder extends Seeder
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
            ['id' => 781520, 'country_code' => 'AO', 'name' => 'Bengo', 'active' => 1, 'slug' => 'bengo'],
            ['id' => 781526, 'country_code' => 'AO', 'name' => 'Benguela', 'active' => 1, 'slug' => 'benguela'],
            ['id' => 781536, 'country_code' => 'AO', 'name' => 'Bié', 'active' => 1, 'slug' => 'bie'],
            ['id' => 781545, 'country_code' => 'AO', 'name' => 'Cabinda', 'active' => 1, 'slug' => 'cabinda'],
            ['id' => 781550, 'country_code' => 'AO', 'name' => 'Cuando Cubango', 'active' => 1, 'slug' => 'cuando-cubango'],
            ['id' => 781559, 'country_code' => 'AO', 'name' => 'Cuanza Norte', 'active' => 1, 'slug' => 'cuanza-norte'],
            ['id' => 781572, 'country_code' => 'AO', 'name' => 'Cuanza Sur', 'active' => 1, 'slug' => 'cuanza-sur'],
            ['id' => 781585, 'country_code' => 'AO', 'name' => 'Cunene', 'active' => 1, 'slug' => 'cunene'],
            ['id' => 781592, 'country_code' => 'AO', 'name' => 'Huambo', 'active' => 1, 'slug' => 'huambo']


        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
