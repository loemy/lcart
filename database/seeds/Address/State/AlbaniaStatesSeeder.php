<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class AlbanieStatesSeeder extends Seeder
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
            ['id' => 781457, 'country_code' => 'AL', 'name' => 'Berat', 'active' => 1, 'slug' => 'berat'],
            ['id' => 781461, 'country_code' => 'AL', 'name' => 'Dibër', 'active' => 1, 'slug' => 'diber'],
            ['id' => 781465, 'country_code' => 'AL', 'name' => 'Durrës', 'active' => 1, 'slug' => 'durres'],
            ['id' => 781468, 'country_code' => 'AL', 'name' => 'Elbasan', 'active' => 1, 'slug' => 'elbasan'],
            ['id' => 781473, 'country_code' => 'AL', 'name' => 'Fier', 'active' => 1, 'slug' => 'fier'],
            ['id' => 781477, 'country_code' => 'AL', 'name' => 'Gjirokastër', 'active' => 1, 'slug' => 'gjirokaster'],
            ['id' => 781481, 'country_code' => 'AL', 'name' => 'Korçë', 'active' => 1, 'slug' => 'korce'],
            ['id' => 781486, 'country_code' => 'AL', 'name' => 'Kukës', 'active' => 1, 'slug' => 'kukes'],
            ['id' => 781490, 'country_code' => 'AL', 'name' => 'Lezhë', 'active' => 1, 'slug' => 'lezhe'],
            ['id' => 781494, 'country_code' => 'AL', 'name' => 'Shkodër', 'active' => 1, 'slug' => 'shkoder'],
            ['id' => 781498, 'country_code' => 'AL', 'name' => 'Tiranë', 'active' => 1, 'slug' => 'tirane'],
            ['id' => 781501, 'country_code' => 'AL', 'name' => 'Vlorë', 'active' => 1, 'slug' => 'vlore']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
