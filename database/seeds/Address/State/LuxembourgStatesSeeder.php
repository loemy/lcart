<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class LuxembourgStatesSeeder extends Seeder
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
            ['id' => 743438, 'country_code' => 'LU', 'name' => 'Clervaux', 'active' => 1, 'slug' => 'clervaux'],
            ['id' => 743447, 'country_code' => 'LU', 'name' => 'Diekirch', 'active' => 1, 'slug' => 'diekirch'],
            ['id' => 743460, 'country_code' => 'LU', 'name' => 'Redange', 'active' => 1, 'slug' => 'redange'],
            ['id' => 743490, 'country_code' => 'LU', 'name' => 'Vianden', 'active' => 1, 'slug' => 'vianden'],
            ['id' => 743503, 'country_code' => 'LU', 'name' => 'Wiltz', 'active' => 1, 'slug' => 'wiltz'],
            ['id' => 743536, 'country_code' => 'LU', 'name' => 'Echternach', 'active' => 1, 'slug' => 'echternach'],
            ['id' => 743545, 'country_code' => 'LU', 'name' => 'Grevenmacher', 'active' => 1, 'slug' => 'grevenmacher'],
            ['id' => 743578, 'country_code' => 'LU', 'name' => 'Remich', 'active' => 1, 'slug' => 'remich'],
            ['id' => 743606, 'country_code' => 'LU', 'name' => 'Capellen', 'active' => 1, 'slug' => 'capellen'],
            ['id' => 743618, 'country_code' => 'LU', 'name' => 'Esch-sur-Alzette', 'active' => 1, 'slug' => 'esch-sur-alzette'],
            ['id' => 743651, 'country_code' => 'LU', 'name' => 'Luxemburgo', 'active' => 1, 'slug' => 'luxemburgo'],
            ['id' => 743663, 'country_code' => 'LU', 'name' => 'Mersch', 'active' => 1, 'slug' => 'mersch']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
