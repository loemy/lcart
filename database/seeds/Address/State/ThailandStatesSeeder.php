<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ThailandStatesSeeder extends Seeder
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
            ['id' => 782702, 'country_code' => 'TH', 'name' => 'Central', 'active' => 1, 'slug' => 'central'],
            ['id' => 782703, 'country_code' => 'TH', 'name' => 'East', 'active' => 1, 'slug' => 'east'],
            ['id' => 782704, 'country_code' => 'TH', 'name' => 'North', 'active' => 1, 'slug' => 'north'],
            ['id' => 782705, 'country_code' => 'TH', 'name' => 'North-East', 'active' => 1, 'slug' => 'north-east'],
            ['id' => 782706, 'country_code' => 'TH', 'name' => 'South', 'active' => 1, 'slug' => 'south'],
            ['id' => 782707, 'country_code' => 'TH', 'name' => 'West', 'active' => 1, 'slug' => 'west']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
