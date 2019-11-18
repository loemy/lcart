<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class HongKongStatesSeeder extends Seeder
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
            ['id' => 781983, 'country_code' => 'HK', 'name' => 'Hong Kong Island', 'active' => 1, 'slug' => 'hong-kong-island'],
            ['id' => 781984, 'country_code' => 'HK', 'name' => 'Kowloon', 'active' => 1, 'slug' => 'kowloon'],
            ['id' => 781985, 'country_code' => 'HK', 'name' => 'New Territories', 'active' => 1, 'slug' => 'new-territories']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
