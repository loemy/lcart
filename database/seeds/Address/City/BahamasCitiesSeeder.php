<?php

use App\Models\Address\State;
use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{

     use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     * country_id, code, name, status
     * @return void
     */
    public function run()
    {
        State::create($this->state());
        $this->disableForeignKeys();
        $this->truncate('cities');
        $city=[
            ['id' => 34856, 'region_id' => 740660, 'country_code' => 'BS', 'name' => 'Nassau', 'active' => 1, 'slug' => 'nassau']

        ];

        City::create($city);
        $this->enableForeignKeys();

    }
}
