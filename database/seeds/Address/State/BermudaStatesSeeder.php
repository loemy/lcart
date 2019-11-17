<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class BermudaStatesSeeder extends Seeder
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
            ['id' => 742826, 'country_code' => 'BM', 'name' => 'Devonshire', 'active' => 1, 'slug' => 'devonshire'],
            ['id' => 742827, 'country_code' => 'BM', 'name' => 'Hamilton', 'active' => 1, 'slug' => 'hamilton'],
            ['id' => 742828, 'country_code' => 'BM', 'name' => 'Paget', 'active' => 1, 'slug' => 'paget'],
            ['id' => 742829, 'country_code' => 'BM', 'name' => 'Pembroke', 'active' => 1, 'slug' => 'pembroke'],
            ['id' => 742830, 'country_code' => 'BM', 'name' => 'Saint', 'active' => 1, 'slug' => 'saint'],
            ['id' => 742831, 'country_code' => 'BM', 'name' => 'Saint George\'s', 'active' => 1, 'slug' => 'saint-georges'],
            ['id' => 742832, 'country_code' => 'BM', 'name' => 'Sandys', 'active' => 1, 'slug' => 'sandys'],
            ['id' => 742833, 'country_code' => 'BM', 'name' => 'Smith\'s', 'active' => 1, 'slug' => 'smiths'],
            ['id' => 742834, 'country_code' => 'BM', 'name' => 'Southampton', 'active' => 1, 'slug' => 'southampton'],
            ['id' => 742835, 'country_code' => 'BM', 'name' => 'Warwick', 'active' => 1, 'slug' => 'warwick']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
