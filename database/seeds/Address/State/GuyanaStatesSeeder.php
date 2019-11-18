<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class GuyanaStatesSeeder extends Seeder
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
            ['id' => 746514, 'country_code' => 'GY', 'name' => 'Barima-Waini', 'active' => 1, 'slug' => 'barima-waini'],
            ['id' => 746525, 'country_code' => 'GY', 'name' => 'Cuyuni-Mazaruni', 'active' => 1, 'slug' => 'cuyuni-mazaruni'],
            ['id' => 746537, 'country_code' => 'GY', 'name' => 'Demerara-Mahaica', 'active' => 1, 'slug' => 'demerara-mahaica'],
            ['id' => 746543, 'country_code' => 'GY', 'name' => 'Berbice Oriental-Corentyne', 'active' => 1, 'slug' => 'berbice-oriental-corentyne'],
            ['id' => 746548, 'country_code' => 'GY', 'name' => 'Islas Essequibo-Demerara Occidental', 'active' => 1, 'slug' => 'islas-essequibo-demerara-occidental'],
            ['id' => 746553, 'country_code' => 'GY', 'name' => 'Mahaica-Berbice', 'active' => 1, 'slug' => 'mahaica-berbice'],
            ['id' => 746558, 'country_code' => 'GY', 'name' => 'Pomeroon-Supenaam', 'active' => 1, 'slug' => 'pomeroon-supenaam'],
            ['id' => 746565, 'country_code' => 'GY', 'name' => 'Potaro-Siparuni', 'active' => 1, 'slug' => 'potaro-siparuni'],
            ['id' => 746572, 'country_code' => 'GY', 'name' => 'Alto Demerara-Berbice', 'active' => 1, 'slug' => 'alto-demerara-berbice'],
            ['id' => 746580, 'country_code' => 'GY', 'name' => 'Alto Takutu-Alto Essequibo', 'active' => 1, 'slug' => 'alto-takutu-alto-essequibo']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
