<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class BarbadosStatesSeeder extends Seeder
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
            ['id' => 742838, 'country_code' => 'BB', 'name' => 'Christ Church', 'active' => 1, 'slug' => 'christ-church'],
            ['id' => 742839, 'country_code' => 'BB', 'name' => 'Saint Andrew', 'active' => 1, 'slug' => 'saint-andrew'],
            ['id' => 742840, 'country_code' => 'BB', 'name' => 'Saint George', 'active' => 1, 'slug' => 'saint-george'],
            ['id' => 742841, 'country_code' => 'BB', 'name' => 'Saint James', 'active' => 1, 'slug' => 'saint-james'],
            ['id' => 742842, 'country_code' => 'BB', 'name' => 'Saint John', 'active' => 1, 'slug' => 'saint-john'],
            ['id' => 742843, 'country_code' => 'BB', 'name' => 'Saint Joseph', 'active' => 1, 'slug' => 'saint-joseph'],
            ['id' => 742844, 'country_code' => 'BB', 'name' => 'Saint Lucy', 'active' => 1, 'slug' => 'saint-lucy'],
            ['id' => 742845, 'country_code' => 'BB', 'name' => 'Saint Michael', 'active' => 1, 'slug' => 'saint-michael'],
            ['id' => 742846, 'country_code' => 'BB', 'name' => 'Saint Peter', 'active' => 1, 'slug' => 'saint-peter'],
            ['id' => 742847, 'country_code' => 'BB', 'name' => 'Saint Philip', 'active' => 1, 'slug' => 'saint-philip'],
            ['id' => 742848, 'country_code' => 'BB', 'name' => 'Saint Thomas', 'active' => 1, 'slug' => 'saint-thomas']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
