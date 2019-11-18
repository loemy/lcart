<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class SwitzerlandStatesSeeder extends Seeder
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
            ['id' => 781730, 'country_code' => 'CH', 'name' => 'Aargau', 'active' => 1, 'slug' => 'aargau'],
            ['id' => 781731, 'country_code' => 'CH', 'name' => 'Appenzell Ausserrhoden', 'active' => 1, 'slug' => 'appenzell-ausserrhoden'],
            ['id' => 781732, 'country_code' => 'CH', 'name' => 'Appenzell Innerrhoden', 'active' => 1, 'slug' => 'appenzell-innerrhoden'],
            ['id' => 781733, 'country_code' => 'CH', 'name' => 'Basel-Landschaft', 'active' => 1, 'slug' => 'basel-landschaft'],
            ['id' => 781734, 'country_code' => 'CH', 'name' => 'Basel-Stadt', 'active' => 1, 'slug' => 'basel-stadt'],
            ['id' => 781735, 'country_code' => 'CH', 'name' => 'Bern', 'active' => 1, 'slug' => 'bern'],
            ['id' => 781736, 'country_code' => 'CH', 'name' => 'Freiburg', 'active' => 1, 'slug' => 'freiburg'],
            ['id' => 781737, 'country_code' => 'CH', 'name' => 'Genf', 'active' => 1, 'slug' => 'genf'],
            ['id' => 781738, 'country_code' => 'CH', 'name' => 'Glarus', 'active' => 1, 'slug' => 'glarus'],
            ['id' => 781739, 'country_code' => 'CH', 'name' => 'Graubünden', 'active' => 1, 'slug' => 'graubunden'],
            ['id' => 781740, 'country_code' => 'CH', 'name' => 'Jura', 'active' => 1, 'slug' => 'jura'],
            ['id' => 781741, 'country_code' => 'CH', 'name' => 'Luzern', 'active' => 1, 'slug' => 'luzern'],
            ['id' => 781742, 'country_code' => 'CH', 'name' => 'Neuenburg', 'active' => 1, 'slug' => 'neuenburg'],
            ['id' => 781743, 'country_code' => 'CH', 'name' => 'Nidwalden', 'active' => 1, 'slug' => 'nidwalden'],
            ['id' => 781744, 'country_code' => 'CH', 'name' => 'Obwalden', 'active' => 1, 'slug' => 'obwalden'],
            ['id' => 781745, 'country_code' => 'CH', 'name' => 'Schaffhausen', 'active' => 1, 'slug' => 'schaffhausen'],
            ['id' => 781746, 'country_code' => 'CH', 'name' => 'Schwyz', 'active' => 1, 'slug' => 'schwyz'],
            ['id' => 781747, 'country_code' => 'CH', 'name' => 'Solothurn', 'active' => 1, 'slug' => 'solothurn'],
            ['id' => 781748, 'country_code' => 'CH', 'name' => 'St. Gallen', 'active' => 1, 'slug' => 'st-gallen'],
            ['id' => 781749, 'country_code' => 'CH', 'name' => 'Tessin', 'active' => 1, 'slug' => 'tessin'],
            ['id' => 781750, 'country_code' => 'CH', 'name' => 'Thurgau', 'active' => 1, 'slug' => 'thurgau'],
            ['id' => 781751, 'country_code' => 'CH', 'name' => 'Uri', 'active' => 1, 'slug' => 'uri'],
            ['id' => 781752, 'country_code' => 'CH', 'name' => 'Waadt', 'active' => 1, 'slug' => 'waadt'],
            ['id' => 781753, 'country_code' => 'CH', 'name' => 'Wallis', 'active' => 1, 'slug' => 'wallis'],
            ['id' => 781754, 'country_code' => 'CH', 'name' => 'Zug', 'active' => 1, 'slug' => 'zug'],
            ['id' => 781755, 'country_code' => 'CH', 'name' => 'Zürich', 'active' => 1, 'slug' => 'zurich']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
