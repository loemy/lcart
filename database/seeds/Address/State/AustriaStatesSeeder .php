<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class AustriaStatesSeeder extends Seeder
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
            ['id' => 781618, 'country_code' => 'AT', 'name' => 'Burgenland', 'active' => 1, 'slug' => 'burgenland'],
            ['id' => 781619, 'country_code' => 'AT', 'name' => 'Kärnten', 'active' => 1, 'slug' => 'karnten'],
            ['id' => 781620, 'country_code' => 'AT', 'name' => 'Niederösterreich', 'active' => 1, 'slug' => 'niederosterreich'],
            ['id' => 781621, 'country_code' => 'AT', 'name' => 'Oberösterreich', 'active' => 1, 'slug' => 'oberosterreich'],
            ['id' => 781622, 'country_code' => 'AT', 'name' => 'Salzburg', 'active' => 1, 'slug' => 'salzburg'],
            ['id' => 781623, 'country_code' => 'AT', 'name' => 'Steiermark', 'active' => 1, 'slug' => 'steiermark'],
            ['id' => 781624, 'country_code' => 'AT', 'name' => 'Tirol', 'active' => 1, 'slug' => 'tirol'],
            ['id' => 781625, 'country_code' => 'AT', 'name' => 'Vorarlberg', 'active' => 1, 'slug' => 'vorarlberg'],
            ['id' => 781626, 'country_code' => 'AT', 'name' => 'Wien', 'active' => 1, 'slug' => 'wien']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
