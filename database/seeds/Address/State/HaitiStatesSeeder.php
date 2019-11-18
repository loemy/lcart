<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class HaitiStatesSeeder extends Seeder
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
            ['id' => 743850, 'country_code' => 'HT', 'name' => 'Artibonito', 'active' => 1, 'slug' => 'artibonito'],
            ['id' => 743856, 'country_code' => 'HT', 'name' => 'Centro', 'active' => 1, 'slug' => 'centro'],
            ['id' => 743861, 'country_code' => 'HT', 'name' => 'Grand\'Anse', 'active' => 1, 'slug' => 'grandanse'],
            ['id' => 743867, 'country_code' => 'HT', 'name' => 'Nippes', 'active' => 1, 'slug' => 'nippes'],
            ['id' => 743871, 'country_code' => 'HT', 'name' => 'Norte', 'active' => 1, 'slug' => 'norte'],
            ['id' => 743879, 'country_code' => 'HT', 'name' => 'Noreste', 'active' => 1, 'slug' => 'noreste'],
            ['id' => 743883, 'country_code' => 'HT', 'name' => 'Noroeste', 'active' => 1, 'slug' => 'noroeste'],
            ['id' => 743887, 'country_code' => 'HT', 'name' => 'Oeste', 'active' => 1, 'slug' => 'oeste'],
            ['id' => 743893, 'country_code' => 'HT', 'name' => 'Sudeste', 'active' => 1, 'slug' => 'sudeste'],
            ['id' => 743897, 'country_code' => 'HT', 'name' => 'Sur', 'active' => 1, 'slug' => 'sur']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
