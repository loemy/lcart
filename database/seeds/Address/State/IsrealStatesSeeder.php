<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class IsrealStatesSeeder extends Seeder
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
            ['id' => 780980, 'country_code' => 'IL', 'name' => 'Norte Israel', 'active' => 1, 'slug' => 'norte-israel'],
            ['id' => 780997, 'country_code' => 'IL', 'name' => 'Haifa', 'active' => 1, 'slug' => 'haifa'],
            ['id' => 781010, 'country_code' => 'IL', 'name' => 'Centro Israel', 'active' => 1, 'slug' => 'centro-israel'],
            ['id' => 781028, 'country_code' => 'IL', 'name' => 'Tel Aviv', 'active' => 1, 'slug' => 'tel-aviv'],
            ['id' => 781039, 'country_code' => 'IL', 'name' => 'Jerusalem', 'active' => 1, 'slug' => 'jerusalem'],
            ['id' => 781042, 'country_code' => 'IL', 'name' => 'Sur Israel', 'active' => 1, 'slug' => 'sur-israel'],
            ['id' => 781055, 'country_code' => 'IL', 'name' => 'Judea y Samaria', 'active' => 1, 'slug' => 'judea-y-samaria']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
