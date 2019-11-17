<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class BelgiumStatesSeeder extends Seeder
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
            ['id' => 781679, 'country_code' => 'BE', 'name' => 'Antwerpen', 'active' => 1, 'slug' => 'antwerpen'],
            ['id' => 781680, 'country_code' => 'BE', 'name' => 'Brabant Wallon', 'active' => 1, 'slug' => 'brabant-wallon'],
            ['id' => 781681, 'country_code' => 'BE', 'name' => 'Hainaut', 'active' => 1, 'slug' => 'hainaut'],
            ['id' => 781682, 'country_code' => 'BE', 'name' => 'Liège', 'active' => 1, 'slug' => 'liege'],
            ['id' => 781683, 'country_code' => 'BE', 'name' => 'Limburg', 'active' => 1, 'slug' => 'limburg'],
            ['id' => 781684, 'country_code' => 'BE', 'name' => 'Luxembourg', 'active' => 1, 'slug' => 'luxembourg'],
            ['id' => 781685, 'country_code' => 'BE', 'name' => 'Namur', 'active' => 1, 'slug' => 'namur'],
            ['id' => 781686, 'country_code' => 'BE', 'name' => 'Oost-Vlaanderen', 'active' => 1, 'slug' => 'oost-vlaanderen'],
            ['id' => 781687, 'country_code' => 'BE', 'name' => 'Région de Bruxelles-Capitale', 'active' => 1, 'slug' => 'region-de-bruxelles-capitale'],
            ['id' => 781688, 'country_code' => 'BE', 'name' => 'Vlaams-Brabant', 'active' => 1, 'slug' => 'vlaams-brabant'],
            ['id' => 781689, 'country_code' => 'BE', 'name' => 'West-Vlaanderen', 'active' => 1, 'slug' => 'west-vlaanderen']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
