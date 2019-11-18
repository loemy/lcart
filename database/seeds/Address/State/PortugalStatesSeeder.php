<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class PortugalStatesSeeder extends Seeder
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
            ['id' => 782374, 'country_code' => 'PT', 'name' => 'Açores', 'active' => 1, 'slug' => 'acores'],
            ['id' => 782375, 'country_code' => 'PT', 'name' => 'Aveiro', 'active' => 1, 'slug' => 'aveiro'],
            ['id' => 782376, 'country_code' => 'PT', 'name' => 'Beja', 'active' => 1, 'slug' => 'beja'],
            ['id' => 782377, 'country_code' => 'PT', 'name' => 'Braga', 'active' => 1, 'slug' => 'braga'],
            ['id' => 782378, 'country_code' => 'PT', 'name' => 'Bragança', 'active' => 1, 'slug' => 'braganca'],
            ['id' => 782379, 'country_code' => 'PT', 'name' => 'Castelo Branco', 'active' => 1, 'slug' => 'castelo-branco'],
            ['id' => 782380, 'country_code' => 'PT', 'name' => 'Coimbra', 'active' => 1, 'slug' => 'coimbra'],
            ['id' => 782381, 'country_code' => 'PT', 'name' => 'Évora', 'active' => 1, 'slug' => 'evora'],
            ['id' => 782382, 'country_code' => 'PT', 'name' => 'Faro', 'active' => 1, 'slug' => 'faro'],
            ['id' => 782383, 'country_code' => 'PT', 'name' => 'Guarda', 'active' => 1, 'slug' => 'guarda'],
            ['id' => 782384, 'country_code' => 'PT', 'name' => 'Leiria', 'active' => 1, 'slug' => 'leiria'],
            ['id' => 782385, 'country_code' => 'PT', 'name' => 'Lisboa', 'active' => 1, 'slug' => 'lisboa'],
            ['id' => 782386, 'country_code' => 'PT', 'name' => 'Madeira', 'active' => 1, 'slug' => 'madeira'],
            ['id' => 782387, 'country_code' => 'PT', 'name' => 'Portalegre', 'active' => 1, 'slug' => 'portalegre'],
            ['id' => 782388, 'country_code' => 'PT', 'name' => 'Porto', 'active' => 1, 'slug' => 'porto'],
            ['id' => 782389, 'country_code' => 'PT', 'name' => 'Santarém', 'active' => 1, 'slug' => 'santarem'],
            ['id' => 782390, 'country_code' => 'PT', 'name' => 'Setúbal', 'active' => 1, 'slug' => 'setubal'],
            ['id' => 782391, 'country_code' => 'PT', 'name' => 'Viana do Castelo', 'active' => 1, 'slug' => 'viana-do-castelo'],
            ['id' => 782392, 'country_code' => 'PT', 'name' => 'Vila Real', 'active' => 1, 'slug' => 'vila-real'],
            ['id' => 782393, 'country_code' => 'PT', 'name' => 'Viseu', 'active' => 1, 'slug' => 'viseu']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
