<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class SaintLuciaStatesSeeder extends Seeder
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
            ['id' => 780441, 'country_code' => 'LC', 'name' => 'Castries', 'active' => 1, 'slug' => 'castries'],
            ['id' => 780442, 'country_code' => 'LC', 'name' => 'Choiseul', 'active' => 1, 'slug' => 'choiseul'],
            ['id' => 780443, 'country_code' => 'LC', 'name' => 'Dauphin', 'active' => 1, 'slug' => 'dauphin'],
            ['id' => 780444, 'country_code' => 'LC', 'name' => 'Dennery', 'active' => 1, 'slug' => 'dennery'],
            ['id' => 780445, 'country_code' => 'LC', 'name' => 'Gros Islet', 'active' => 1, 'slug' => 'gros-islet'],
            ['id' => 780446, 'country_code' => 'LC', 'name' => 'Laborie', 'active' => 1, 'slug' => 'laborie'],
            ['id' => 780447, 'country_code' => 'LC', 'name' => 'Micoud', 'active' => 1, 'slug' => 'micoud'],
            ['id' => 780448, 'country_code' => 'LC', 'name' => 'Praslin', 'active' => 1, 'slug' => 'praslin'],
            ['id' => 780449, 'country_code' => 'LC', 'name' => 'Soufriere', 'active' => 1, 'slug' => 'soufriere'],
            ['id' => 780450, 'country_code' => 'LC', 'name' => 'Vieux Fort', 'active' => 1, 'slug' => 'vieux-fort'],
            ['id' => 780451, 'country_code' => 'LC', 'name' => 'Anse la Raye', 'active' => 1, 'slug' => 'anse-la-raye']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
