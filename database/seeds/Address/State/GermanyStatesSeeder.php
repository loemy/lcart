<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class GermanyStatesSeeder extends Seeder
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
            ['id' => 781804, 'country_code' => 'DE', 'name' => 'Baden-Württemberg', 'active' => 1, 'slug' => 'baden-wurttemberg'],
            ['id' => 781805, 'country_code' => 'DE', 'name' => 'Bayern', 'active' => 1, 'slug' => 'bayern'],
            ['id' => 781806, 'country_code' => 'DE', 'name' => 'Berlin', 'active' => 1, 'slug' => 'berlin'],
            ['id' => 781807, 'country_code' => 'DE', 'name' => 'Brandenburg', 'active' => 1, 'slug' => 'brandenburg'],
            ['id' => 781808, 'country_code' => 'DE', 'name' => 'Bremen', 'active' => 1, 'slug' => 'bremen'],
            ['id' => 781809, 'country_code' => 'DE', 'name' => 'Hamburg', 'active' => 1, 'slug' => 'hamburg'],
            ['id' => 781810, 'country_code' => 'DE', 'name' => 'Hessen', 'active' => 1, 'slug' => 'hessen'],
            ['id' => 781811, 'country_code' => 'DE', 'name' => 'Mecklenburg-Vorpommern', 'active' => 1, 'slug' => 'mecklenburg-vorpommern'],
            ['id' => 781812, 'country_code' => 'DE', 'name' => 'Niedersachsen', 'active' => 1, 'slug' => 'niedersachsen'],
            ['id' => 781813, 'country_code' => 'DE', 'name' => 'Nordrhein-Westfalen', 'active' => 1, 'slug' => 'nordrhein-westfalen'],
            ['id' => 781814, 'country_code' => 'DE', 'name' => 'Rheinland-Pfalz', 'active' => 1, 'slug' => 'rheinland-pfalz'],
            ['id' => 781815, 'country_code' => 'DE', 'name' => 'Saarland', 'active' => 1, 'slug' => 'saarland'],
            ['id' => 781816, 'country_code' => 'DE', 'name' => 'Sachsen', 'active' => 1, 'slug' => 'sachsen'],
            ['id' => 781817, 'country_code' => 'DE', 'name' => 'Sachsen-Anhalt', 'active' => 1, 'slug' => 'sachsen-anhalt'],
            ['id' => 781818, 'country_code' => 'DE', 'name' => 'Schleswig-Holstein', 'active' => 1, 'slug' => 'schleswig-holstein'],
            ['id' => 781819, 'country_code' => 'DE', 'name' => 'Thüringen', 'active' => 1, 'slug' => 'thuringen']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
