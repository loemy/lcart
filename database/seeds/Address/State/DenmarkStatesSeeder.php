<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class DenmarkStatesSeeder extends Seeder
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
            ['id' => 738382, 'country_code' => 'DK', 'name' => 'Hovedstaden', 'active' => 1, 'slug' => 'hovedstaden'],
            ['id' => 738412, 'country_code' => 'DK', 'name' => 'Midtjylland', 'active' => 1, 'slug' => 'midtjylland'],
            ['id' => 738432, 'country_code' => 'DK', 'name' => 'Nordjylland', 'active' => 1, 'slug' => 'nordjylland'],
            ['id' => 738444, 'country_code' => 'DK', 'name' => 'Sjælland', 'active' => 1, 'slug' => 'sj%c3%a6lland'],
            ['id' => 738462, 'country_code' => 'DK', 'name' => 'Syddanmark', 'active' => 1, 'slug' => 'syddanmark']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
