<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class PapuaNewGuineaStatesSeeder extends Seeder
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
            ['id' => 778641, 'country_code' => 'PG', 'name' => 'Central', 'active' => 1, 'slug' => 'central'],
            ['id' => 778648, 'country_code' => 'PG', 'name' => 'Simbu', 'active' => 1, 'slug' => 'simbu'],
            ['id' => 778650, 'country_code' => 'PG', 'name' => 'Highlands Orientales', 'active' => 1, 'slug' => 'highlands-orientales'],
            ['id' => 778653, 'country_code' => 'PG', 'name' => 'Nueva Bretaña del Este', 'active' => 1, 'slug' => 'nueva-bretana-del-este'],
            ['id' => 778656, 'country_code' => 'PG', 'name' => 'Sepik del Este', 'active' => 1, 'slug' => 'sepik-del-este'],
            ['id' => 778664, 'country_code' => 'PG', 'name' => 'Enga', 'active' => 1, 'slug' => 'enga'],
            ['id' => 778668, 'country_code' => 'PG', 'name' => 'Golfo', 'active' => 1, 'slug' => 'golfo'],
            ['id' => 778672, 'country_code' => 'PG', 'name' => 'Madang', 'active' => 1, 'slug' => 'madang'],
            ['id' => 778676, 'country_code' => 'PG', 'name' => 'Manus', 'active' => 1, 'slug' => 'manus'],
            ['id' => 778679, 'country_code' => 'PG', 'name' => 'Milne Bay', 'active' => 1, 'slug' => 'milne-bay'],
            ['id' => 778684, 'country_code' => 'PG', 'name' => 'Morobe', 'active' => 1, 'slug' => 'morobe'],
            ['id' => 778690, 'country_code' => 'PG', 'name' => 'Nueva Irlanda', 'active' => 1, 'slug' => 'nueva-irlanda'],
            ['id' => 778694, 'country_code' => 'PG', 'name' => 'Oro', 'active' => 1, 'slug' => 'oro'],
            ['id' => 778697, 'country_code' => 'PG', 'name' => 'Bougainville', 'active' => 1, 'slug' => 'bougainville'],
            ['id' => 778699, 'country_code' => 'PG', 'name' => 'Highlands del Sur', 'active' => 1, 'slug' => 'highlands-del-sur'],
            ['id' => 778702, 'country_code' => 'PG', 'name' => 'Occidental', 'active' => 1, 'slug' => 'occidental'],
            ['id' => 778707, 'country_code' => 'PG', 'name' => 'Highlands Occidentales', 'active' => 1, 'slug' => 'highlands-occidentales'],
            ['id' => 778709, 'country_code' => 'PG', 'name' => 'Sandaun', 'active' => 1, 'slug' => 'sandaun']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
