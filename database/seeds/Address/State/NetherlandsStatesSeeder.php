<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class NetherlandsStatesSeeder extends Seeder
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
            ['id' => 782234, 'country_code' => 'NL', 'name' => 'Drenthe', 'active' => 1, 'slug' => 'drenthe'],
            ['id' => 782235, 'country_code' => 'NL', 'name' => 'Flevoland', 'active' => 1, 'slug' => 'flevoland'],
            ['id' => 782236, 'country_code' => 'NL', 'name' => 'Friesland', 'active' => 1, 'slug' => 'friesland'],
            ['id' => 782237, 'country_code' => 'NL', 'name' => 'Gelderland', 'active' => 1, 'slug' => 'gelderland'],
            ['id' => 782238, 'country_code' => 'NL', 'name' => 'Groningen', 'active' => 1, 'slug' => 'groningen'],
            ['id' => 782239, 'country_code' => 'NL', 'name' => 'Limburg', 'active' => 1, 'slug' => 'limburg'],
            ['id' => 782240, 'country_code' => 'NL', 'name' => 'Noord-Brabant', 'active' => 1, 'slug' => 'noord-brabant'],
            ['id' => 782241, 'country_code' => 'NL', 'name' => 'Noord-Holland', 'active' => 1, 'slug' => 'noord-holland'],
            ['id' => 782242, 'country_code' => 'NL', 'name' => 'Overijssel', 'active' => 1, 'slug' => 'overijssel'],
            ['id' => 782243, 'country_code' => 'NL', 'name' => 'Utrecht', 'active' => 1, 'slug' => 'utrecht'],
            ['id' => 782244, 'country_code' => 'NL', 'name' => 'Zeeland', 'active' => 1, 'slug' => 'zeeland'],
            ['id' => 782245, 'country_code' => 'NL', 'name' => 'Zuid-Holland', 'active' => 1, 'slug' => 'zuid-holland']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
