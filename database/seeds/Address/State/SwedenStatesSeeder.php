<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class SwedenStatesSeeder extends Seeder
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
            ['id' => 782481, 'country_code' => 'SE', 'name' => 'Blekinge', 'active' => 1, 'slug' => 'blekinge'],
            ['id' => 782482, 'country_code' => 'SE', 'name' => 'Dalarnas', 'active' => 1, 'slug' => 'dalarnas'],
            ['id' => 782483, 'country_code' => 'SE', 'name' => 'Gävleborgs', 'active' => 1, 'slug' => 'gavleborgs'],
            ['id' => 782484, 'country_code' => 'SE', 'name' => 'Gotlands', 'active' => 1, 'slug' => 'gotlands'],
            ['id' => 782485, 'country_code' => 'SE', 'name' => 'Hallands', 'active' => 1, 'slug' => 'hallands'],
            ['id' => 782486, 'country_code' => 'SE', 'name' => 'Jämtlands', 'active' => 1, 'slug' => 'jamtlands'],
            ['id' => 782487, 'country_code' => 'SE', 'name' => 'Jönköpings', 'active' => 1, 'slug' => 'jonkopings'],
            ['id' => 782488, 'country_code' => 'SE', 'name' => 'Kalmar', 'active' => 1, 'slug' => 'kalmar'],
            ['id' => 782489, 'country_code' => 'SE', 'name' => 'Kronobergs', 'active' => 1, 'slug' => 'kronobergs'],
            ['id' => 782490, 'country_code' => 'SE', 'name' => 'Norrbottens', 'active' => 1, 'slug' => 'norrbottens'],
            ['id' => 782491, 'country_code' => 'SE', 'name' => 'Örebro', 'active' => 1, 'slug' => 'orebro'],
            ['id' => 782492, 'country_code' => 'SE', 'name' => 'Östergötlands', 'active' => 1, 'slug' => 'ostergotlands'],
            ['id' => 782493, 'country_code' => 'SE', 'name' => 'Skåne', 'active' => 1, 'slug' => 'skane'],
            ['id' => 782494, 'country_code' => 'SE', 'name' => 'Södermanlands', 'active' => 1, 'slug' => 'sodermanlands'],
            ['id' => 782495, 'country_code' => 'SE', 'name' => 'Stockholms', 'active' => 1, 'slug' => 'stockholms'],
            ['id' => 782496, 'country_code' => 'SE', 'name' => 'Uppsala', 'active' => 1, 'slug' => 'uppsala'],
            ['id' => 782497, 'country_code' => 'SE', 'name' => 'Värmlands', 'active' => 1, 'slug' => 'varmlands'],
            ['id' => 782498, 'country_code' => 'SE', 'name' => 'Västerbottens', 'active' => 1, 'slug' => 'vasterbottens'],
            ['id' => 782499, 'country_code' => 'SE', 'name' => 'Västernorrlands', 'active' => 1, 'slug' => 'vasternorrlands'],
            ['id' => 782500, 'country_code' => 'SE', 'name' => 'Västmanlands', 'active' => 1, 'slug' => 'vastmanlands'],
            ['id' => 782501, 'country_code' => 'SE', 'name' => 'Västra Götalands', 'active' => 1, 'slug' => 'vastra-gotalands']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
