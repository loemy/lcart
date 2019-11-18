<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class JamaicaStatesSeeder extends Seeder
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
            ['id' => 743830, 'country_code' => 'JM', 'name' => 'Surrey', 'active' => 1, 'slug' => 'surrey'],
            ['id' => 743835, 'country_code' => 'JM', 'name' => 'Middlesex', 'active' => 1, 'slug' => 'middlesex'],
            ['id' => 743841, 'country_code' => 'JM', 'name' => 'Cornwall', 'active' => 1, 'slug' => 'cornwall']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
