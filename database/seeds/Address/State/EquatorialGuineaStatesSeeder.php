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
            ['id' => 780940, 'country_code' => 'GQ', 'name' => 'Annobón', 'active' => 1, 'slug' => 'annobon'],
            ['id' => 780942, 'country_code' => 'GQ', 'name' => 'Bioko Norte', 'active' => 1, 'slug' => 'bioko-norte'],
            ['id' => 780946, 'country_code' => 'GQ', 'name' => 'Bioko Sur', 'active' => 1, 'slug' => 'bioko-sur'],
            ['id' => 780949, 'country_code' => 'GQ', 'name' => 'Centro Sur', 'active' => 1, 'slug' => 'centro-sur'],
            ['id' => 780955, 'country_code' => 'GQ', 'name' => 'Kié-ntem', 'active' => 1, 'slug' => 'kie-ntem'],
            ['id' => 780962, 'country_code' => 'GQ', 'name' => 'Litoral', 'active' => 1, 'slug' => 'litoral'],
            ['id' => 780971, 'country_code' => 'GQ', 'name' => 'Wele-nzas', 'active' => 1, 'slug' => 'wele-nzas']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
