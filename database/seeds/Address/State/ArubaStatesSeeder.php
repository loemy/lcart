<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ArubaStatesSeeder extends Seeder
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
            ['id' => 781508, 'country_code' => 'AW', 'name' => 'Palm Beach', 'active' => 1, 'slug' => 'palm-beach'],
            ['id' => 781509, 'country_code' => 'AW', 'name' => 'Noord', 'active' => 1, 'slug' => 'noord'],
            ['id' => 781510, 'country_code' => 'AW', 'name' => 'Paradera', 'active' => 1, 'slug' => 'paradera'],
            ['id' => 781511, 'country_code' => 'AW', 'name' => 'Oranjestad', 'active' => 1, 'slug' => 'oranjestad'],
            ['id' => 781512, 'country_code' => 'AW', 'name' => 'Santa Cruz', 'active' => 1, 'slug' => 'santa-cruz'],
            ['id' => 781513, 'country_code' => 'AW', 'name' => 'Pos Chiquito', 'active' => 1, 'slug' => 'pos-chiquito'],
            ['id' => 781514, 'country_code' => 'AW', 'name' => 'Savaneta', 'active' => 1, 'slug' => 'savaneta'],
            ['id' => 781515, 'country_code' => 'AW', 'name' => 'San Nicolas', 'active' => 1, 'slug' => 'san-nicolas'],
            ['id' => 781516, 'country_code' => 'AW', 'name' => 'Seroe Colorado', 'active' => 1, 'slug' => 'seroe-colorado']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
