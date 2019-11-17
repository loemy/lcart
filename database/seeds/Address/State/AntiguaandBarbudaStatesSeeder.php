<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class AntiguaandBarbudaStatesSeeder extends Seeder
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
            ['id' => 778513, 'country_code' => 'AG', 'name' => 'Bermuda', 'active' => 1, 'slug' => 'bermuda'],
            ['id' => 778517, 'country_code' => 'AG', 'name' => 'Saint George', 'active' => 1, 'slug' => 'saint-george'],
            ['id' => 778530, 'country_code' => 'AG', 'name' => 'Saint John', 'active' => 1, 'slug' => 'saint-john'],
            ['id' => 778557, 'country_code' => 'AG', 'name' => 'Saint Mary', 'active' => 1, 'slug' => 'saint-mary'],
            ['id' => 778576, 'country_code' => 'AG', 'name' => 'Saint Paul', 'active' => 1, 'slug' => 'saint-paul'],
            ['id' => 778597, 'country_code' => 'AG', 'name' => 'Saint Peter', 'active' => 1, 'slug' => 'saint-peter'],
            ['id' => 778612, 'country_code' => 'AG', 'name' => 'Saint Philip', 'active' => 1, 'slug' => 'saint-philip']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
