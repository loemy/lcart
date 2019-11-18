<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class SouthAfricaStatesSeeder extends Seeder
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
            ['id' => 782672, 'country_code' => 'ZA', 'name' => 'Eastern Cape', 'active' => 1, 'slug' => 'eastern-cape'],
            ['id' => 782673, 'country_code' => 'ZA', 'name' => 'Free State', 'active' => 1, 'slug' => 'free-state'],
            ['id' => 782674, 'country_code' => 'ZA', 'name' => 'Gauteng', 'active' => 1, 'slug' => 'gauteng'],
            ['id' => 782675, 'country_code' => 'ZA', 'name' => 'KwaZulu-Natal', 'active' => 1, 'slug' => 'kwazulu-natal'],
            ['id' => 782676, 'country_code' => 'ZA', 'name' => 'Limpopo', 'active' => 1, 'slug' => 'limpopo'],
            ['id' => 782677, 'country_code' => 'ZA', 'name' => 'Mpumalanga', 'active' => 1, 'slug' => 'mpumalanga'],
            ['id' => 782678, 'country_code' => 'ZA', 'name' => 'North-West', 'active' => 1, 'slug' => 'north-west'],
            ['id' => 782679, 'country_code' => 'ZA', 'name' => 'Northern Cape', 'active' => 1, 'slug' => 'northern-cape'],
            ['id' => 782680, 'country_code' => 'ZA', 'name' => 'Western Cape', 'active' => 1, 'slug' => 'western-cape']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
