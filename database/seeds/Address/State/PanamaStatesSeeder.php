<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
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
            ['id' => 710290, 'country_code' => 'PA', 'name' => 'Boca Del Toro', 'active' => 1, 'slug' => 'boca-del-toro'],
            ['id' => 710306, 'country_code' => 'PA', 'name' => 'Coclé', 'active' => 1, 'slug' => 'cocle'],
            ['id' => 710347, 'country_code' => 'PA', 'name' => 'Colón', 'active' => 1, 'slug' => 'colon'],
            ['id' => 710382, 'country_code' => 'PA', 'name' => 'Chiriquí', 'active' => 1, 'slug' => 'chiriqui'],
            ['id' => 710475, 'country_code' => 'PA', 'name' => 'Darién', 'active' => 1, 'slug' => 'darien'],
            ['id' => 710500, 'country_code' => 'PA', 'name' => 'Herrera', 'active' => 1, 'slug' => 'herrera'],
            ['id' => 710545, 'country_code' => 'PA', 'name' => 'Los Santos', 'active' => 1, 'slug' => 'los-santos'],
            ['id' => 710607, 'country_code' => 'PA', 'name' => 'Panamá City', 'active' => 1, 'slug' => 'panama-city'],
            ['id' => 710712, 'country_code' => 'PA', 'name' => 'Veraguas', 'active' => 1, 'slug' => 'veraguas'],
            ['id' => 710796, 'country_code' => 'PA', 'name' => 'San Blas', 'active' => 1, 'slug' => 'san-blas']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
