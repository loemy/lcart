<?php

use App\Models\Address\State;
use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class HongKongCitiesSeeder extends Seeder
{

     use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     * country_id, code, name, status
     * @return void
     */
    public function run()
    {
        State::create($this->state());
        $this->disableForeignKeys();
        $this->truncate('cities');
        $city=[
            ['id' => 274702, 'region_id' => 781983, 'country_code' => 'HK', 'name' => 'Eastern District', 'active' => 1, 'slug' => 'eastern-district'],
            ['id' => 274703, 'region_id' => 781983, 'country_code' => 'HK', 'name' => 'Wan Chai District', 'active' => 1, 'slug' => 'wan-chai-district'],
            ['id' => 274704, 'region_id' => 781983, 'country_code' => 'HK', 'name' => 'Southern District', 'active' => 1, 'slug' => 'southern-district'],
            ['id' => 274705, 'region_id' => 781983, 'country_code' => 'HK', 'name' => 'Central and Western District', 'active' => 1, 'slug' => 'central-and-western-district'],
            ['id' => 274706, 'region_id' => 781984, 'country_code' => 'HK', 'name' => 'Kowloon City District', 'active' => 1, 'slug' => 'kowloon-city-district'],
            ['id' => 274707, 'region_id' => 781984, 'country_code' => 'HK', 'name' => 'Kwun Tong District', 'active' => 1, 'slug' => 'kwun-tong-district'],
            ['id' => 274708, 'region_id' => 781984, 'country_code' => 'HK', 'name' => 'Sham Shui Po District', 'active' => 1, 'slug' => 'sham-shui-po-district'],
            ['id' => 274709, 'region_id' => 781984, 'country_code' => 'HK', 'name' => 'Wong Tai Sin District', 'active' => 1, 'slug' => 'wong-tai-sin-district'],
            ['id' => 274710, 'region_id' => 781984, 'country_code' => 'HK', 'name' => 'Yau Tsim Mong District', 'active' => 1, 'slug' => 'yau-tsim-mong-district'],
            ['id' => 274711, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'Kwai Tsing District', 'active' => 1, 'slug' => 'kwai-tsing-district'],
            ['id' => 274712, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'North District', 'active' => 1, 'slug' => 'north-district'],
            ['id' => 274713, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'Sha Tin District', 'active' => 1, 'slug' => 'sha-tin-district'],
            ['id' => 274714, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'Tuen Mun District', 'active' => 1, 'slug' => 'tuen-mun-district'],
            ['id' => 274715, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'Islands District', 'active' => 1, 'slug' => 'islands-district'],
            ['id' => 274716, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'Tsuen Wan District', 'active' => 1, 'slug' => 'tsuen-wan-district'],
            ['id' => 274717, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'Tai Po District', 'active' => 1, 'slug' => 'tai-po-district'],
            ['id' => 274718, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'Sai Kung District', 'active' => 1, 'slug' => 'sai-kung-district'],
            ['id' => 274719, 'region_id' => 781985, 'country_code' => 'HK', 'name' => 'Yuen Long District', 'active' => 1, 'slug' => 'yuen-long-district']

        ];

        City::create($city);
        $this->enableForeignKeys();

    }
}
