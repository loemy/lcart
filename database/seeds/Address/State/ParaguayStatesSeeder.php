<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ParaguayStatesSeeder extends Seeder
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
            ['id' => 707230, 'country_code' => 'PY', 'name' => 'Alto Paraguay', 'active' => 1, 'slug' => 'alto-paraguay'],
            ['id' => 707231, 'country_code' => 'PY', 'name' => 'Alto Paraná', 'active' => 1, 'slug' => 'alto-parana'],
            ['id' => 707232, 'country_code' => 'PY', 'name' => 'Amambay', 'active' => 1, 'slug' => 'amambay'],
            ['id' => 707233, 'country_code' => 'PY', 'name' => 'Asunción', 'active' => 1, 'slug' => 'asuncion'],
            ['id' => 707234, 'country_code' => 'PY', 'name' => 'Boquerón', 'active' => 1, 'slug' => 'boqueron'],
            ['id' => 707235, 'country_code' => 'PY', 'name' => 'Caaguazú', 'active' => 1, 'slug' => 'caaguazu'],
            ['id' => 707236, 'country_code' => 'PY', 'name' => 'Caazapá', 'active' => 1, 'slug' => 'caazapa'],
            ['id' => 707237, 'country_code' => 'PY', 'name' => 'Canindeyú', 'active' => 1, 'slug' => 'canindeyu'],
            ['id' => 707238, 'country_code' => 'PY', 'name' => 'Central', 'active' => 1, 'slug' => 'central'],
            ['id' => 707239, 'country_code' => 'PY', 'name' => 'Concepción', 'active' => 1, 'slug' => 'concepcion'],
            ['id' => 707240, 'country_code' => 'PY', 'name' => 'Cordillera', 'active' => 1, 'slug' => 'cordillera'],
            ['id' => 707241, 'country_code' => 'PY', 'name' => 'Guairá', 'active' => 1, 'slug' => 'guaira'],
            ['id' => 707242, 'country_code' => 'PY', 'name' => 'Itapúa', 'active' => 1, 'slug' => 'itapua'],
            ['id' => 707244, 'country_code' => 'PY', 'name' => 'Ñeembucú', 'active' => 1, 'slug' => 'neembucu'],
            ['id' => 707245, 'country_code' => 'PY', 'name' => 'Paraguarí', 'active' => 1, 'slug' => 'paraguari'],
            ['id' => 707246, 'country_code' => 'PY', 'name' => 'Presidente Hayes', 'active' => 1, 'slug' => 'presidente-hayes'],
            ['id' => 709773, 'country_code' => 'PY', 'name' => 'Misiones', 'active' => 1, 'slug' => 'misiones'],
            ['id' => 709827, 'country_code' => 'PY', 'name' => 'San Pedro', 'active' => 1, 'slug' => 'san-pedro']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
