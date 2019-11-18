<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class PakistanStatesSeeder extends Seeder
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
            ['id' => 782352, 'country_code' => 'PK', 'name' => 'Azad Kashmir', 'active' => 1, 'slug' => 'azad-kashmir'],
            ['id' => 782353, 'country_code' => 'PK', 'name' => 'Balochistan', 'active' => 1, 'slug' => 'balochistan'],
            ['id' => 782354, 'country_code' => 'PK', 'name' => 'Islamabad', 'active' => 1, 'slug' => 'islamabad'],
            ['id' => 782355, 'country_code' => 'PK', 'name' => 'Khyber Pakhtunkhwa', 'active' => 1, 'slug' => 'khyber-pakhtunkhwa'],
            ['id' => 782356, 'country_code' => 'PK', 'name' => 'Punjab', 'active' => 1, 'slug' => 'punjab'],
            ['id' => 782357, 'country_code' => 'PK', 'name' => 'Sindh', 'active' => 1, 'slug' => 'sindh']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
