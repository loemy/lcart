<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class GreenlandStatesSeeder extends Seeder
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
            ['id' => 743905, 'country_code' => 'GL', 'name' => 'Avannaa', 'active' => 1, 'slug' => 'avannaa'],
            ['id' => 743907, 'country_code' => 'GL', 'name' => 'Kitaa', 'active' => 1, 'slug' => 'kitaa'],
            ['id' => 743923, 'country_code' => 'GL', 'name' => 'Tunu', 'active' => 1, 'slug' => 'tunu']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
