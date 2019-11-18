<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class SanMarinoStatesSeeder extends Seeder
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
            ['id' => 780453, 'country_code' => 'SM', 'name' => 'Acquaviva', 'active' => 1, 'slug' => 'acquaviva'],
            ['id' => 780454, 'country_code' => 'SM', 'name' => 'Borgo Maggiore', 'active' => 1, 'slug' => 'borgo-maggiore'],
            ['id' => 780455, 'country_code' => 'SM', 'name' => 'Chiesanuova', 'active' => 1, 'slug' => 'chiesanuova'],
            ['id' => 780456, 'country_code' => 'SM', 'name' => 'Montegiardino', 'active' => 1, 'slug' => 'montegiardino'],
            ['id' => 780457, 'country_code' => 'SM', 'name' => 'Domagnano', 'active' => 1, 'slug' => 'domagnano'],
            ['id' => 780458, 'country_code' => 'SM', 'name' => 'Faetano', 'active' => 1, 'slug' => 'faetano'],
            ['id' => 780459, 'country_code' => 'SM', 'name' => 'Fiorentino', 'active' => 1, 'slug' => 'fiorentino'],
            ['id' => 780460, 'country_code' => 'SM', 'name' => 'San Marino', 'active' => 1, 'slug' => 'san-marino'],
            ['id' => 780461, 'country_code' => 'SM', 'name' => 'Serravalle', 'active' => 1, 'slug' => 'serravalle']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
