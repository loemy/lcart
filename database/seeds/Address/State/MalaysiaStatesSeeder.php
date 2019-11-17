<?php

use App\Models\Address\Country;
use App\Models\Address\State;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class MalaysiaStatesSeeder extends Seeder
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

            ['id' => 782219, 'country_code' => 'MY', 'name' => 'Johor', 'status' => 1, 'slug' => 'johor'],
            ['id' => 782220, 'country_code' => 'MY', 'name' => 'Kedah', 'status' => 1, 'slug' => 'kedah'],
            ['id' => 782221, 'country_code' => 'MY', 'name' => 'Kelantan', 'status' => 1, 'slug' => 'kelantan'],
            ['id' => 782222, 'country_code' => 'MY', 'name' => 'Kuala Lumpur', 'status' => 1, 'slug' => 'kuala-lumpur'],
            ['id' => 782223, 'country_code' => 'MY', 'name' => 'Melaka', 'status' => 1, 'slug' => 'melaka'],
            ['id' => 782224, 'country_code' => 'MY', 'name' => 'Negeri Sembilan', 'status' => 1, 'slug' => 'negeri-sembilan'],
            ['id' => 782225, 'country_code' => 'MY', 'name' => 'Pahang', 'status' => 1, 'slug' => 'pahang'],
            ['id' => 782226, 'country_code' => 'MY', 'name' => 'Penang', 'status' => 1, 'slug' => 'penang'],
            ['id' => 782227, 'country_code' => 'MY', 'name' => 'Perak', 'status' => 1, 'slug' => 'perak'],
            ['id' => 782228, 'country_code' => 'MY', 'name' => 'Perlis', 'status' => 1, 'slug' => 'perlis'],
            ['id' => 782229, 'country_code' => 'MY', 'name' => 'Putrajaya', 'status' => 1, 'slug' => 'putrajaya'],
            ['id' => 782230, 'country_code' => 'MY', 'name' => 'Sabah', 'status' => 1, 'slug' => 'sabah'],
            ['id' => 782231, 'country_code' => 'MY', 'name' => 'Sarawak', 'status' => 1, 'slug' => 'sarawak'],
            ['id' => 782232, 'country_code' => 'MY', 'name' => 'Selangor', 'status' => 1, 'slug' => 'selangor'],
            ['id' => 782233, 'country_code' => 'MY', 'name' => 'Terengganu', 'status' => 1, 'slug' => 'terengganu']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
