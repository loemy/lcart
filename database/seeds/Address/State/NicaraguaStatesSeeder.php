<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class NicaraguaStatesSeeder extends Seeder
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
            ['id' => 868, 'country_code' => 'NI', 'name' => 'Managua', 'active' => 1, 'slug' => 'managua'],
            ['id' => 707257, 'country_code' => 'NI', 'name' => 'Boaco', 'active' => 1, 'slug' => 'boaco'],
            ['id' => 707258, 'country_code' => 'NI', 'name' => 'Carazo', 'active' => 1, 'slug' => 'carazo'],
            ['id' => 707259, 'country_code' => 'NI', 'name' => 'Chinandega', 'active' => 1, 'slug' => 'chinandega'],
            ['id' => 707260, 'country_code' => 'NI', 'name' => 'Chontales', 'active' => 1, 'slug' => 'chontales'],
            ['id' => 707261, 'country_code' => 'NI', 'name' => 'Estelí', 'active' => 1, 'slug' => 'esteli'],
            ['id' => 707263, 'country_code' => 'NI', 'name' => 'Jinotega', 'active' => 1, 'slug' => 'jinotega'],
            ['id' => 707265, 'country_code' => 'NI', 'name' => 'Madriz', 'active' => 1, 'slug' => 'madriz'],
            ['id' => 707267, 'country_code' => 'NI', 'name' => 'Masaya', 'active' => 1, 'slug' => 'masaya'],
            ['id' => 707268, 'country_code' => 'NI', 'name' => 'Matagalpa', 'active' => 1, 'slug' => 'matagalpa'],
            ['id' => 707269, 'country_code' => 'NI', 'name' => 'Nueva Segovia', 'active' => 1, 'slug' => 'nueva-segovia'],
            ['id' => 707270, 'country_code' => 'NI', 'name' => 'Rivas', 'active' => 1, 'slug' => 'rivas'],
            ['id' => 707271, 'country_code' => 'NI', 'name' => 'Río San Juan', 'active' => 1, 'slug' => 'rio-san-juan'],
            ['id' => 711859, 'country_code' => 'NI', 'name' => 'Granada', 'active' => 1, 'slug' => 'granada'],
            ['id' => 711874, 'country_code' => 'NI', 'name' => 'Leon', 'active' => 1, 'slug' => 'leon'],
            ['id' => 711964, 'country_code' => 'NI', 'name' => 'Región Autonoma del Atlantico Norte', 'active' => 1, 'slug' => 'region-autonoma-del-atlantico-norte'],
            ['id' => 711972, 'country_code' => 'NI', 'name' => 'Región Autonoma del Atlantico Sur', 'active' => 1, 'slug' => 'region-autonoma-del-atlantico-sur']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
