<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class IndonesiaStatesSeeder extends Seeder
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
            ['id' => 781986, 'country_code' => 'ID', 'name' => 'Aceh', 'active' => 1, 'slug' => 'aceh'],
            ['id' => 781987, 'country_code' => 'ID', 'name' => 'Bali', 'active' => 1, 'slug' => 'bali'],
            ['id' => 781988, 'country_code' => 'ID', 'name' => 'Bangka Belitung Islands', 'active' => 1, 'slug' => 'bangka-belitung-islands'],
            ['id' => 781989, 'country_code' => 'ID', 'name' => 'Banten', 'active' => 1, 'slug' => 'banten'],
            ['id' => 781990, 'country_code' => 'ID', 'name' => 'Bengkulu', 'active' => 1, 'slug' => 'bengkulu'],
            ['id' => 781991, 'country_code' => 'ID', 'name' => 'Central Java', 'active' => 1, 'slug' => 'central-java'],
            ['id' => 781992, 'country_code' => 'ID', 'name' => 'Central Kalimantan', 'active' => 1, 'slug' => 'central-kalimantan'],
            ['id' => 781993, 'country_code' => 'ID', 'name' => 'Central Sulawesi', 'active' => 1, 'slug' => 'central-sulawesi'],
            ['id' => 781994, 'country_code' => 'ID', 'name' => 'East Java', 'active' => 1, 'slug' => 'east-java'],
            ['id' => 781995, 'country_code' => 'ID', 'name' => 'East Kalimantan', 'active' => 1, 'slug' => 'east-kalimantan'],
            ['id' => 781996, 'country_code' => 'ID', 'name' => 'East Nusa Tenggara', 'active' => 1, 'slug' => 'east-nusa-tenggara'],
            ['id' => 781997, 'country_code' => 'ID', 'name' => 'Gorontalo', 'active' => 1, 'slug' => 'gorontalo'],
            ['id' => 781998, 'country_code' => 'ID', 'name' => 'Jakarta', 'active' => 1, 'slug' => 'jakarta'],
            ['id' => 781999, 'country_code' => 'ID', 'name' => 'Jambi', 'active' => 1, 'slug' => 'jambi'],
            ['id' => 782000, 'country_code' => 'ID', 'name' => 'Lampung', 'active' => 1, 'slug' => 'lampung'],
            ['id' => 782001, 'country_code' => 'ID', 'name' => 'Maluku', 'active' => 1, 'slug' => 'maluku'],
            ['id' => 782002, 'country_code' => 'ID', 'name' => 'North Maluku', 'active' => 1, 'slug' => 'north-maluku'],
            ['id' => 782003, 'country_code' => 'ID', 'name' => 'North Sulawesi', 'active' => 1, 'slug' => 'north-sulawesi'],
            ['id' => 782004, 'country_code' => 'ID', 'name' => 'North Sumatra', 'active' => 1, 'slug' => 'north-sumatra'],
            ['id' => 782005, 'country_code' => 'ID', 'name' => 'Papua', 'active' => 1, 'slug' => 'papua'],
            ['id' => 782006, 'country_code' => 'ID', 'name' => 'Riau', 'active' => 1, 'slug' => 'riau'],
            ['id' => 782007, 'country_code' => 'ID', 'name' => 'Riau Islands', 'active' => 1, 'slug' => 'riau-islands'],
            ['id' => 782008, 'country_code' => 'ID', 'name' => 'South East Sulawesi', 'active' => 1, 'slug' => 'south-east-sulawesi'],
            ['id' => 782009, 'country_code' => 'ID', 'name' => 'South Kalimantan', 'active' => 1, 'slug' => 'south-kalimantan'],
            ['id' => 782010, 'country_code' => 'ID', 'name' => 'South Sulawesi', 'active' => 1, 'slug' => 'south-sulawesi'],
            ['id' => 782011, 'country_code' => 'ID', 'name' => 'South Sumatra', 'active' => 1, 'slug' => 'south-sumatra'],
            ['id' => 782012, 'country_code' => 'ID', 'name' => 'West Java', 'active' => 1, 'slug' => 'west-java'],
            ['id' => 782013, 'country_code' => 'ID', 'name' => 'West Kalimantan', 'active' => 1, 'slug' => 'west-kalimantan'],
            ['id' => 782014, 'country_code' => 'ID', 'name' => 'West Nusa Tenggara', 'active' => 1, 'slug' => 'west-nusa-tenggara'],
            ['id' => 782015, 'country_code' => 'ID', 'name' => 'West Papua', 'active' => 1, 'slug' => 'west-papua'],
            ['id' => 782016, 'country_code' => 'ID', 'name' => 'West Sulawesi', 'active' => 1, 'slug' => 'west-sulawesi'],
            ['id' => 782017, 'country_code' => 'ID', 'name' => 'West Sumatra', 'active' => 1, 'slug' => 'west-sumatra'],
            ['id' => 782018, 'country_code' => 'ID', 'name' => 'Yogyakarta', 'active' => 1, 'slug' => 'yogyakarta']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
