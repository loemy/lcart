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
            ['id' => 743997, 'country_code' => 'BZ', 'name' => 'Belice', 'active' => 1, 'slug' => 'belice'],
            ['id' => 744000, 'country_code' => 'BZ', 'name' => 'Cayo', 'active' => 1, 'slug' => 'cayo'],
            ['id' => 744019, 'country_code' => 'BZ', 'name' => 'Corozal', 'active' => 1, 'slug' => 'corozal'],
            ['id' => 744051, 'country_code' => 'BZ', 'name' => 'Orange Walk', 'active' => 1, 'slug' => 'orange-walk'],
            ['id' => 744082, 'country_code' => 'BZ', 'name' => 'Stann Creek', 'active' => 1, 'slug' => 'stann-creek'],
            ['id' => 744110, 'country_code' => 'BZ', 'name' => 'Toledo', 'active' => 1, 'slug' => 'toledo']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
