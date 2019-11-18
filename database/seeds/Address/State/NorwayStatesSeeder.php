<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class NorwayStatesSeeder extends Seeder
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
            ['id' => 780462, 'country_code' => 'NO', 'name' => 'Akershus', 'active' => 1, 'slug' => 'akershus'],
            ['id' => 780485, 'country_code' => 'NO', 'name' => 'Aust-agder', 'active' => 1, 'slug' => 'aust-agder'],
            ['id' => 780501, 'country_code' => 'NO', 'name' => 'Buskerud', 'active' => 1, 'slug' => 'buskerud'],
            ['id' => 780523, 'country_code' => 'NO', 'name' => 'Finnmark', 'active' => 1, 'slug' => 'finnmark'],
            ['id' => 780545, 'country_code' => 'NO', 'name' => 'Hedmark', 'active' => 1, 'slug' => 'hedmark'],
            ['id' => 780568, 'country_code' => 'NO', 'name' => 'Hordaland', 'active' => 1, 'slug' => 'hordaland'],
            ['id' => 780602, 'country_code' => 'NO', 'name' => 'Møre Og Romsdal', 'active' => 1, 'slug' => 'm%c3%b8re-og-romsdal'],
            ['id' => 780641, 'country_code' => 'NO', 'name' => 'Nordland', 'active' => 1, 'slug' => 'nordland'],
            ['id' => 780686, 'country_code' => 'NO', 'name' => 'Nord-trøndelag', 'active' => 1, 'slug' => 'nord-tr%c3%b8ndelag'],
            ['id' => 780711, 'country_code' => 'NO', 'name' => 'Oppland', 'active' => 1, 'slug' => 'oppland'],
            ['id' => 780739, 'country_code' => 'NO', 'name' => 'Oslo', 'active' => 1, 'slug' => 'oslo'],
            ['id' => 780765, 'country_code' => 'NO', 'name' => 'Østfold', 'active' => 1, 'slug' => '%c3%98stfold'],
            ['id' => 780784, 'country_code' => 'NO', 'name' => 'Rogaland', 'active' => 1, 'slug' => 'rogaland'],
            ['id' => 780811, 'country_code' => 'NO', 'name' => 'Sogn Og Fjordane', 'active' => 1, 'slug' => 'sogn-og-fjordane'],
            ['id' => 780838, 'country_code' => 'NO', 'name' => 'Sør-trøndelag', 'active' => 1, 'slug' => 's%c3%b8r-tr%c3%b8ndelag'],
            ['id' => 780864, 'country_code' => 'NO', 'name' => 'Telemark', 'active' => 1, 'slug' => 'telemark'],
            ['id' => 780883, 'country_code' => 'NO', 'name' => 'Troms', 'active' => 1, 'slug' => 'troms'],
            ['id' => 780909, 'country_code' => 'NO', 'name' => 'Vest-agder', 'active' => 1, 'slug' => 'vest-agder'],
            ['id' => 780925, 'country_code' => 'NO', 'name' => 'Vestfold', 'active' => 1, 'slug' => 'vestfold']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
