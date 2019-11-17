<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class CanadaStatesSeeder extends Seeder
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
            ['id' => 781717, 'country_code' => 'CA', 'name' => 'Alberta', 'active' => 1, 'slug' => 'alberta'],
            ['id' => 781718, 'country_code' => 'CA', 'name' => 'British Columbia', 'active' => 1, 'slug' => 'british-columbia'],
            ['id' => 781719, 'country_code' => 'CA', 'name' => 'Manitoba', 'active' => 1, 'slug' => 'manitoba'],
            ['id' => 781720, 'country_code' => 'CA', 'name' => 'New Brunswick', 'active' => 1, 'slug' => 'new-brunswick'],
            ['id' => 781721, 'country_code' => 'CA', 'name' => 'Newfoundland', 'active' => 1, 'slug' => 'newfoundland'],
            ['id' => 781722, 'country_code' => 'CA', 'name' => 'Northwest Territories', 'active' => 1, 'slug' => 'northwest-territories'],
            ['id' => 781723, 'country_code' => 'CA', 'name' => 'Nova Scotia', 'active' => 1, 'slug' => 'nova-scotia'],
            ['id' => 781724, 'country_code' => 'CA', 'name' => 'Nunavut', 'active' => 1, 'slug' => 'nunavut'],
            ['id' => 781725, 'country_code' => 'CA', 'name' => 'Ontario', 'active' => 1, 'slug' => 'ontario'],
            ['id' => 781726, 'country_code' => 'CA', 'name' => 'Prince Edward Island', 'active' => 1, 'slug' => 'prince-edward-island'],
            ['id' => 781727, 'country_code' => 'CA', 'name' => 'Québec', 'active' => 1, 'slug' => 'quebec'],
            ['id' => 781728, 'country_code' => 'CA', 'name' => 'Saskatchewan', 'active' => 1, 'slug' => 'saskatchewan'],
            ['id' => 781729, 'country_code' => 'CA', 'name' => 'Yukon', 'active' => 1, 'slug' => 'yukon']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
