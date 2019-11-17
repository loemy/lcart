<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ElsalvadorStatesSeeder extends Seeder
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
            ['id' => 707144, 'country_code' => 'SV', 'name' => 'Usulutan', 'active' => 1, 'slug' => 'usulutan'],
            ['id' => 707147, 'country_code' => 'SV', 'name' => 'Santa Ana', 'active' => 1, 'slug' => 'santa-ana'],
            ['id' => 707148, 'country_code' => 'SV', 'name' => 'Chalatenango', 'active' => 1, 'slug' => 'chalatenango'],
            ['id' => 707150, 'country_code' => 'SV', 'name' => 'Morazán', 'active' => 1, 'slug' => 'morazan'],
            ['id' => 707151, 'country_code' => 'SV', 'name' => 'Ahuachapán', 'active' => 1, 'slug' => 'ahuachapan'],
            ['id' => 707153, 'country_code' => 'SV', 'name' => 'La Paz', 'active' => 1, 'slug' => 'la-paz'],
            ['id' => 707154, 'country_code' => 'SV', 'name' => 'San Vicente', 'active' => 1, 'slug' => 'san-vicente'],
            ['id' => 707155, 'country_code' => 'SV', 'name' => 'Cabañas', 'active' => 1, 'slug' => 'cabanas'],
            ['id' => 707156, 'country_code' => 'SV', 'name' => 'San Salvador', 'active' => 1, 'slug' => 'san-salvador'],
            ['id' => 707157, 'country_code' => 'SV', 'name' => 'Cuscatlán', 'active' => 1, 'slug' => 'cuscatlan'],
            ['id' => 708025, 'country_code' => 'SV', 'name' => 'La Libertad', 'active' => 1, 'slug' => 'la-libertad'],
            ['id' => 708070, 'country_code' => 'SV', 'name' => 'La Unión', 'active' => 1, 'slug' => 'la-union'],
            ['id' => 708096, 'country_code' => 'SV', 'name' => 'San Miguel', 'active' => 1, 'slug' => 'san-miguel'],
            ['id' => 708155, 'country_code' => 'SV', 'name' => 'Sonsonante', 'active' => 1, 'slug' => 'sonsonante']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
