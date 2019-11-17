<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ColombiaStatesSeeder extends Seeder
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
            ['id' => 781771, 'country_code' => 'CO', 'name' => 'Amazonas', 'active' => 1, 'slug' => 'amazonas'],
            ['id' => 781772, 'country_code' => 'CO', 'name' => 'Antioquia', 'active' => 1, 'slug' => 'antioquia'],
            ['id' => 781773, 'country_code' => 'CO', 'name' => 'Arauca', 'active' => 1, 'slug' => 'arauca'],
            ['id' => 781774, 'country_code' => 'CO', 'name' => 'Atlántico', 'active' => 1, 'slug' => 'atlantico'],
            ['id' => 781775, 'country_code' => 'CO', 'name' => 'Bolívar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 781776, 'country_code' => 'CO', 'name' => 'Boyacá', 'active' => 1, 'slug' => 'boyaca'],
            ['id' => 781777, 'country_code' => 'CO', 'name' => 'Caldas', 'active' => 1, 'slug' => 'caldas'],
            ['id' => 781778, 'country_code' => 'CO', 'name' => 'Caquetá', 'active' => 1, 'slug' => 'caqueta'],
            ['id' => 781779, 'country_code' => 'CO', 'name' => 'Casanare', 'active' => 1, 'slug' => 'casanare'],
            ['id' => 781780, 'country_code' => 'CO', 'name' => 'Cauca', 'active' => 1, 'slug' => 'cauca'],
            ['id' => 781781, 'country_code' => 'CO', 'name' => 'Cesar', 'active' => 1, 'slug' => 'cesar'],
            ['id' => 781782, 'country_code' => 'CO', 'name' => 'Chocó', 'active' => 1, 'slug' => 'choco'],
            ['id' => 781783, 'country_code' => 'CO', 'name' => 'Córdoba', 'active' => 1, 'slug' => 'cordoba'],
            ['id' => 781784, 'country_code' => 'CO', 'name' => 'Cundinamarca', 'active' => 1, 'slug' => 'cundinamarca'],
            ['id' => 781785, 'country_code' => 'CO', 'name' => 'Distrito Capital de Bogotá', 'active' => 1, 'slug' => 'distrito-capital-de-bogota'],
            ['id' => 781786, 'country_code' => 'CO', 'name' => 'Guainía', 'active' => 1, 'slug' => 'guainia'],
            ['id' => 781787, 'country_code' => 'CO', 'name' => 'Guaviare', 'active' => 1, 'slug' => 'guaviare'],
            ['id' => 781788, 'country_code' => 'CO', 'name' => 'Huila', 'active' => 1, 'slug' => 'huila'],
            ['id' => 781789, 'country_code' => 'CO', 'name' => 'La Guajira', 'active' => 1, 'slug' => 'la-guajira'],
            ['id' => 781790, 'country_code' => 'CO', 'name' => 'Magdalena', 'active' => 1, 'slug' => 'magdalena'],
            ['id' => 781791, 'country_code' => 'CO', 'name' => 'Meta', 'active' => 1, 'slug' => 'meta'],
            ['id' => 781792, 'country_code' => 'CO', 'name' => 'Nariño', 'active' => 1, 'slug' => 'narino'],
            ['id' => 781793, 'country_code' => 'CO', 'name' => 'Norte de Santander', 'active' => 1, 'slug' => 'norte-de-santander'],
            ['id' => 781794, 'country_code' => 'CO', 'name' => 'Providencia y Santa Catalina, Archipiélago de San Andrés', 'active' => 1, 'slug' => 'providencia-y-santa-catalina-archipielago-de-san-andres'],
            ['id' => 781795, 'country_code' => 'CO', 'name' => 'Putumayo', 'active' => 1, 'slug' => 'putumayo'],
            ['id' => 781796, 'country_code' => 'CO', 'name' => 'Quindío', 'active' => 1, 'slug' => 'quindio'],
            ['id' => 781797, 'country_code' => 'CO', 'name' => 'Risaralda', 'active' => 1, 'slug' => 'risaralda'],
            ['id' => 781798, 'country_code' => 'CO', 'name' => 'Santander', 'active' => 1, 'slug' => 'santander'],
            ['id' => 781799, 'country_code' => 'CO', 'name' => 'Sucre', 'active' => 1, 'slug' => 'sucre'],
            ['id' => 781800, 'country_code' => 'CO', 'name' => 'Tolima', 'active' => 1, 'slug' => 'tolima'],
            ['id' => 781801, 'country_code' => 'CO', 'name' => 'Valle del Cauca', 'active' => 1, 'slug' => 'valle-del-cauca'],
            ['id' => 781802, 'country_code' => 'CO', 'name' => 'Vaupés', 'active' => 1, 'slug' => 'vaupes'],
            ['id' => 781803, 'country_code' => 'CO', 'name' => 'Vichada', 'active' => 1, 'slug' => 'vichada']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
