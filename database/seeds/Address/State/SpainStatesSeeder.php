<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class SpainStatesSeeder extends Seeder
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
            ['id' => 781838, 'country_code' => 'ES', 'name' => 'A Coruña', 'active' => 1, 'slug' => 'a-coruna'],
            ['id' => 781839, 'country_code' => 'ES', 'name' => 'Álava', 'active' => 1, 'slug' => 'alava'],
            ['id' => 781840, 'country_code' => 'ES', 'name' => 'Albacete', 'active' => 1, 'slug' => 'albacete'],
            ['id' => 781841, 'country_code' => 'ES', 'name' => 'Alicante', 'active' => 1, 'slug' => 'alicante'],
            ['id' => 781842, 'country_code' => 'ES', 'name' => 'Almería', 'active' => 1, 'slug' => 'almeria'],
            ['id' => 781843, 'country_code' => 'ES', 'name' => 'Asturias', 'active' => 1, 'slug' => 'asturias'],
            ['id' => 781844, 'country_code' => 'ES', 'name' => 'Ávila', 'active' => 1, 'slug' => 'avila'],
            ['id' => 781845, 'country_code' => 'ES', 'name' => 'Badajoz', 'active' => 1, 'slug' => 'badajoz'],
            ['id' => 781846, 'country_code' => 'ES', 'name' => 'Barcelona', 'active' => 1, 'slug' => 'barcelona'],
            ['id' => 781847, 'country_code' => 'ES', 'name' => 'Burgos', 'active' => 1, 'slug' => 'burgos'],
            ['id' => 781848, 'country_code' => 'ES', 'name' => 'Cáceres', 'active' => 1, 'slug' => 'caceres'],
            ['id' => 781849, 'country_code' => 'ES', 'name' => 'Cádiz', 'active' => 1, 'slug' => 'cadiz'],
            ['id' => 781850, 'country_code' => 'ES', 'name' => 'Cantabria', 'active' => 1, 'slug' => 'cantabria'],
            ['id' => 781851, 'country_code' => 'ES', 'name' => 'Castellón', 'active' => 1, 'slug' => 'castellon'],
            ['id' => 781852, 'country_code' => 'ES', 'name' => 'Ciudad Real', 'active' => 1, 'slug' => 'ciudad-real'],
            ['id' => 781853, 'country_code' => 'ES', 'name' => 'Córdoba', 'active' => 1, 'slug' => 'cordoba'],
            ['id' => 781854, 'country_code' => 'ES', 'name' => 'Cuenca', 'active' => 1, 'slug' => 'cuenca'],
            ['id' => 781855, 'country_code' => 'ES', 'name' => 'Girona', 'active' => 1, 'slug' => 'girona'],
            ['id' => 781856, 'country_code' => 'ES', 'name' => 'Granada', 'active' => 1, 'slug' => 'granada'],
            ['id' => 781857, 'country_code' => 'ES', 'name' => 'Guadalajara', 'active' => 1, 'slug' => 'guadalajara'],
            ['id' => 781858, 'country_code' => 'ES', 'name' => 'Guipúzcoa', 'active' => 1, 'slug' => 'guipuzcoa'],
            ['id' => 781859, 'country_code' => 'ES', 'name' => 'Huelva', 'active' => 1, 'slug' => 'huelva'],
            ['id' => 781860, 'country_code' => 'ES', 'name' => 'Huesca', 'active' => 1, 'slug' => 'huesca'],
            ['id' => 781861, 'country_code' => 'ES', 'name' => 'Illes Balears', 'active' => 1, 'slug' => 'illes-balears'],
            ['id' => 781862, 'country_code' => 'ES', 'name' => 'Jaén', 'active' => 1, 'slug' => 'jaen'],
            ['id' => 781863, 'country_code' => 'ES', 'name' => 'La Rioja', 'active' => 1, 'slug' => 'la-rioja'],
            ['id' => 781864, 'country_code' => 'ES', 'name' => 'Las Palmas', 'active' => 1, 'slug' => 'las-palmas'],
            ['id' => 781865, 'country_code' => 'ES', 'name' => 'León', 'active' => 1, 'slug' => 'leon'],
            ['id' => 781866, 'country_code' => 'ES', 'name' => 'Lleida', 'active' => 1, 'slug' => 'lleida'],
            ['id' => 781867, 'country_code' => 'ES', 'name' => 'Lugo', 'active' => 1, 'slug' => 'lugo'],
            ['id' => 781868, 'country_code' => 'ES', 'name' => 'Madrid', 'active' => 1, 'slug' => 'madrid'],
            ['id' => 781869, 'country_code' => 'ES', 'name' => 'Málaga', 'active' => 1, 'slug' => 'malaga'],
            ['id' => 781870, 'country_code' => 'ES', 'name' => 'Murcia', 'active' => 1, 'slug' => 'murcia'],
            ['id' => 781871, 'country_code' => 'ES', 'name' => 'Navarra', 'active' => 1, 'slug' => 'navarra'],
            ['id' => 781872, 'country_code' => 'ES', 'name' => 'Ourense', 'active' => 1, 'slug' => 'ourense'],
            ['id' => 781873, 'country_code' => 'ES', 'name' => 'Palencia', 'active' => 1, 'slug' => 'palencia'],
            ['id' => 781874, 'country_code' => 'ES', 'name' => 'Pontevedra', 'active' => 1, 'slug' => 'pontevedra'],
            ['id' => 781875, 'country_code' => 'ES', 'name' => 'Salamanca', 'active' => 1, 'slug' => 'salamanca'],
            ['id' => 781876, 'country_code' => 'ES', 'name' => 'Santa Cruz de Tenerife', 'active' => 1, 'slug' => 'santa-cruz-de-tenerife'],
            ['id' => 781877, 'country_code' => 'ES', 'name' => 'Segovia', 'active' => 1, 'slug' => 'segovia'],
            ['id' => 781878, 'country_code' => 'ES', 'name' => 'Sevilla', 'active' => 1, 'slug' => 'sevilla'],
            ['id' => 781879, 'country_code' => 'ES', 'name' => 'Soria', 'active' => 1, 'slug' => 'soria'],
            ['id' => 781880, 'country_code' => 'ES', 'name' => 'Tarragona', 'active' => 1, 'slug' => 'tarragona'],
            ['id' => 781881, 'country_code' => 'ES', 'name' => 'Teruel', 'active' => 1, 'slug' => 'teruel'],
            ['id' => 781882, 'country_code' => 'ES', 'name' => 'Toledo', 'active' => 1, 'slug' => 'toledo'],
            ['id' => 781883, 'country_code' => 'ES', 'name' => 'Valencia', 'active' => 1, 'slug' => 'valencia'],
            ['id' => 781884, 'country_code' => 'ES', 'name' => 'Valladolid', 'active' => 1, 'slug' => 'valladolid'],
            ['id' => 781885, 'country_code' => 'ES', 'name' => 'Vizcaya', 'active' => 1, 'slug' => 'vizcaya'],
            ['id' => 781886, 'country_code' => 'ES', 'name' => 'Zamora', 'active' => 1, 'slug' => 'zamora'],
            ['id' => 781887, 'country_code' => 'ES', 'name' => 'Zaragoza', 'active' => 1, 'slug' => 'zaragoza']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
