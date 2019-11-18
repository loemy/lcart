<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class LebanonStatesSeeder extends Seeder
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
            ['id' => 783324, 'country_code' => 'LB', 'name' => 'Greater Beirut', 'active' => 1, 'slug' => 'greater-beirut'],
            ['id' => 783325, 'country_code' => 'LB', 'name' => 'Beqaa', 'active' => 1, 'slug' => 'beqaa'],
            ['id' => 783326, 'country_code' => 'LB', 'name' => 'Zahle', 'active' => 1, 'slug' => 'zahle'],
            ['id' => 783327, 'country_code' => 'LB', 'name' => 'North Lebanon', 'active' => 1, 'slug' => 'north-lebanon'],
            ['id' => 783328, 'country_code' => 'LB', 'name' => 'South Lebanon', 'active' => 1, 'slug' => 'south-lebanon'],
            ['id' => 783329, 'country_code' => 'LB', 'name' => 'Nabatieh', 'active' => 1, 'slug' => 'nabatieh'],
            ['id' => 783330, 'country_code' => 'LB', 'name' => 'Chouf', 'active' => 1, 'slug' => 'chouf'],
            ['id' => 783331, 'country_code' => 'LB', 'name' => 'Mount Liban', 'active' => 1, 'slug' => 'mount-liban']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
