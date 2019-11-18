<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class SingaporeStatesSeeder extends Seeder
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
            ['id' => 782502, 'country_code' => 'SG', 'name' => 'Central', 'active' => 1, 'slug' => 'central'],
            ['id' => 782503, 'country_code' => 'SG', 'name' => 'Central East', 'active' => 1, 'slug' => 'central-east'],
            ['id' => 782504, 'country_code' => 'SG', 'name' => 'Central North', 'active' => 1, 'slug' => 'central-north'],
            ['id' => 782505, 'country_code' => 'SG', 'name' => 'Central West', 'active' => 1, 'slug' => 'central-west'],
            ['id' => 782506, 'country_code' => 'SG', 'name' => 'City Central', 'active' => 1, 'slug' => 'city-central'],
            ['id' => 782507, 'country_code' => 'SG', 'name' => 'East Coast', 'active' => 1, 'slug' => 'east-coast'],
            ['id' => 782508, 'country_code' => 'SG', 'name' => 'Far East', 'active' => 1, 'slug' => 'far-east'],
            ['id' => 782509, 'country_code' => 'SG', 'name' => 'North', 'active' => 1, 'slug' => 'north'],
            ['id' => 782510, 'country_code' => 'SG', 'name' => 'West', 'active' => 1, 'slug' => 'west']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
