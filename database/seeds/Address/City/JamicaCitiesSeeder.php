<?php

use App\Models\Address\State;
use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class JamaicaCitiesSeeder extends Seeder
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
            ['id' => 37853, 'region_id' => 743830, 'country_code' => 'JM', 'name' => 'Kingston', 'active' => 1, 'slug' => 'kingston'],
            ['id' => 37854, 'region_id' => 743830, 'country_code' => 'JM', 'name' => 'Portland', 'active' => 1, 'slug' => 'portland'],
            ['id' => 37855, 'region_id' => 743830, 'country_code' => 'JM', 'name' => 'Saint Andrew', 'active' => 1, 'slug' => 'saint-andrew'],
            ['id' => 37856, 'region_id' => 743830, 'country_code' => 'JM', 'name' => 'Saint Thomas', 'active' => 1, 'slug' => 'saint-thomas'],
            ['id' => 37857, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Clarendon', 'active' => 1, 'slug' => 'clarendon'],
            ['id' => 37858, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Manchester', 'active' => 1, 'slug' => 'manchester'],
            ['id' => 37859, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Saint Ann', 'active' => 1, 'slug' => 'saint-ann'],
            ['id' => 37860, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Saint Catherine', 'active' => 1, 'slug' => 'saint-catherine'],
            ['id' => 37861, 'region_id' => 743835, 'country_code' => 'JM', 'name' => 'Saint Mary', 'active' => 1, 'slug' => 'saint-mary'],
            ['id' => 37862, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Hanover', 'active' => 1, 'slug' => 'hanover'],
            ['id' => 37863, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Saint Elizabeth', 'active' => 1, 'slug' => 'saint-elizabeth'],
            ['id' => 37864, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Saint James', 'active' => 1, 'slug' => 'saint-james'],
            ['id' => 37865, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Trelawny', 'active' => 1, 'slug' => 'trelawny'],
            ['id' => 37866, 'region_id' => 743841, 'country_code' => 'JM', 'name' => 'Westmoreland', 'active' => 1, 'slug' => 'westmoreland']

        ];

        City::create($city);
        $this->enableForeignKeys();

    }
}
