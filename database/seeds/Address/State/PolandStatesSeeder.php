<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class PolandStatesSeeder extends Seeder
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
            ['id' => 782358, 'country_code' => 'PL', 'name' => 'dolnośląskie', 'active' => 1, 'slug' => 'dolnoslaskie'],
            ['id' => 782359, 'country_code' => 'PL', 'name' => 'kujawsko-pomorskie', 'active' => 1, 'slug' => 'kujawsko-pomorskie'],
            ['id' => 782360, 'country_code' => 'PL', 'name' => 'lubelskie', 'active' => 1, 'slug' => 'lubelskie'],
            ['id' => 782361, 'country_code' => 'PL', 'name' => 'lubuskie', 'active' => 1, 'slug' => 'lubuskie'],
            ['id' => 782362, 'country_code' => 'PL', 'name' => 'mazowieckie', 'active' => 1, 'slug' => 'mazowieckie'],
            ['id' => 782363, 'country_code' => 'PL', 'name' => 'małopolskie', 'active' => 1, 'slug' => 'malopolskie'],
            ['id' => 782364, 'country_code' => 'PL', 'name' => 'opolskie', 'active' => 1, 'slug' => 'opolskie'],
            ['id' => 782365, 'country_code' => 'PL', 'name' => 'podkarpackie', 'active' => 1, 'slug' => 'podkarpackie'],
            ['id' => 782366, 'country_code' => 'PL', 'name' => 'podlaskie', 'active' => 1, 'slug' => 'podlaskie'],
            ['id' => 782367, 'country_code' => 'PL', 'name' => 'pomorskie', 'active' => 1, 'slug' => 'pomorskie'],
            ['id' => 782368, 'country_code' => 'PL', 'name' => 'śląskie', 'active' => 1, 'slug' => 'slaskie'],
            ['id' => 782369, 'country_code' => 'PL', 'name' => 'świętokrzyskie', 'active' => 1, 'slug' => 'swietokrzyskie'],
            ['id' => 782370, 'country_code' => 'PL', 'name' => 'warmińsko-mazurskie', 'active' => 1, 'slug' => 'warminsko-mazurskie'],
            ['id' => 782371, 'country_code' => 'PL', 'name' => 'wielkopolskie', 'active' => 1, 'slug' => 'wielkopolskie'],
            ['id' => 782372, 'country_code' => 'PL', 'name' => 'zachodniopomorskie', 'active' => 1, 'slug' => 'zachodniopomorskie'],
            ['id' => 782373, 'country_code' => 'PL', 'name' => 'łódzkie', 'active' => 1, 'slug' => 'lodzkie']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
