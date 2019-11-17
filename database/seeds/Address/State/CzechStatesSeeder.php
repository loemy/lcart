<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class CzechStatesSeeder extends Seeder
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
            ['id' => 783217, 'country_code' => 'CZ', 'name' => 'Hlavní město Praha', 'active' => 1, 'slug' => 'hlavni-mesto-praha'],
            ['id' => 783218, 'country_code' => 'CZ', 'name' => 'Jihočeský', 'active' => 1, 'slug' => 'jihocesky'],
            ['id' => 783219, 'country_code' => 'CZ', 'name' => 'Jihomoravský', 'active' => 1, 'slug' => 'jihomoravsky'],
            ['id' => 783220, 'country_code' => 'CZ', 'name' => 'Karlovarský', 'active' => 1, 'slug' => 'karlovarsky'],
            ['id' => 783221, 'country_code' => 'CZ', 'name' => 'Kraj Vysočina', 'active' => 1, 'slug' => 'kraj-vysocina'],
            ['id' => 783222, 'country_code' => 'CZ', 'name' => 'Královéhradecký', 'active' => 1, 'slug' => 'kralovehradecky'],
            ['id' => 783223, 'country_code' => 'CZ', 'name' => 'Liberecký', 'active' => 1, 'slug' => 'liberecky'],
            ['id' => 783224, 'country_code' => 'CZ', 'name' => 'Moravskoslezský', 'active' => 1, 'slug' => 'moravskoslezsky'],
            ['id' => 783225, 'country_code' => 'CZ', 'name' => 'Olomoucký', 'active' => 1, 'slug' => 'olomoucky'],
            ['id' => 783226, 'country_code' => 'CZ', 'name' => 'Pardubický', 'active' => 1, 'slug' => 'pardubicky'],
            ['id' => 783227, 'country_code' => 'CZ', 'name' => 'Plzeňský', 'active' => 1, 'slug' => 'plzensky'],
            ['id' => 783228, 'country_code' => 'CZ', 'name' => 'Středočeský', 'active' => 1, 'slug' => 'stredocesky'],
            ['id' => 783229, 'country_code' => 'CZ', 'name' => 'Ústecký', 'active' => 1, 'slug' => 'ustecky'],
            ['id' => 783230, 'country_code' => 'CZ', 'name' => 'Zlínský', 'active' => 1, 'slug' => 'zlinsky']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
