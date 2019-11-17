<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ArgentinaStatesSeeder extends Seeder
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
            ['id' => 781594, 'country_code' => 'AR', 'name' => 'Buenos Aires', 'active' => 1, 'slug' => 'buenos-aires'],
            ['id' => 781595, 'country_code' => 'AR', 'name' => 'Capital Federal', 'active' => 1, 'slug' => 'capital-federal'],
            ['id' => 781596, 'country_code' => 'AR', 'name' => 'Catamarca', 'active' => 1, 'slug' => 'catamarca'],
            ['id' => 781597, 'country_code' => 'AR', 'name' => 'Chaco', 'active' => 1, 'slug' => 'chaco'],
            ['id' => 781598, 'country_code' => 'AR', 'name' => 'Chubut', 'active' => 1, 'slug' => 'chubut'],
            ['id' => 781599, 'country_code' => 'AR', 'name' => 'Córdoba', 'active' => 1, 'slug' => 'cordoba'],
            ['id' => 781600, 'country_code' => 'AR', 'name' => 'Corrientes', 'active' => 1, 'slug' => 'corrientes'],
            ['id' => 781601, 'country_code' => 'AR', 'name' => 'Entre Ríos', 'active' => 1, 'slug' => 'entre-rios'],
            ['id' => 781602, 'country_code' => 'AR', 'name' => 'Formosa', 'active' => 1, 'slug' => 'formosa'],
            ['id' => 781603, 'country_code' => 'AR', 'name' => 'Jujuy', 'active' => 1, 'slug' => 'jujuy'],
            ['id' => 781604, 'country_code' => 'AR', 'name' => 'La Pampa', 'active' => 1, 'slug' => 'la-pampa'],
            ['id' => 781605, 'country_code' => 'AR', 'name' => 'La Rioja', 'active' => 1, 'slug' => 'la-rioja'],
            ['id' => 781606, 'country_code' => 'AR', 'name' => 'Mendoza', 'active' => 1, 'slug' => 'mendoza'],
            ['id' => 781607, 'country_code' => 'AR', 'name' => 'Misiones', 'active' => 1, 'slug' => 'misiones'],
            ['id' => 781608, 'country_code' => 'AR', 'name' => 'Neuquén', 'active' => 1, 'slug' => 'neuquen'],
            ['id' => 781609, 'country_code' => 'AR', 'name' => 'Río Negro', 'active' => 1, 'slug' => 'rio-negro'],
            ['id' => 781610, 'country_code' => 'AR', 'name' => 'Salta', 'active' => 1, 'slug' => 'salta'],
            ['id' => 781611, 'country_code' => 'AR', 'name' => 'San Juan', 'active' => 1, 'slug' => 'san-juan'],
            ['id' => 781612, 'country_code' => 'AR', 'name' => 'San Luis', 'active' => 1, 'slug' => 'san-luis'],
            ['id' => 781613, 'country_code' => 'AR', 'name' => 'Santa Cruz', 'active' => 1, 'slug' => 'santa-cruz'],
            ['id' => 781614, 'country_code' => 'AR', 'name' => 'Santa Fe', 'active' => 1, 'slug' => 'santa-fe'],
            ['id' => 781615, 'country_code' => 'AR', 'name' => 'Santiago del Estero', 'active' => 1, 'slug' => 'santiago-del-estero'],
            ['id' => 781616, 'country_code' => 'AR', 'name' => 'Tierra del Fuego', 'active' => 1, 'slug' => 'tierra-del-fuego'],
            ['id' => 781617, 'country_code' => 'AR', 'name' => 'Tucumán', 'active' => 1, 'slug' => 'tucuman']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
