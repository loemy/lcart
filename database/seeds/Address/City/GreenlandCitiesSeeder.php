<?php

use App\Models\Address\State;
use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class GreenlandCitiesSeeder extends Seeder
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
            ['id' => 37910, 'region_id' => 743905, 'country_code' => 'GL', 'name' => 'Qaanaaq', 'active' => 1, 'slug' => 'qaanaaq'],
            ['id' => 37911, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Nanortalik', 'active' => 1, 'slug' => 'nanortalik'],
            ['id' => 37912, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Qaqortoq', 'active' => 1, 'slug' => 'qaqortoq'],
            ['id' => 37913, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Narsaq', 'active' => 1, 'slug' => 'narsaq'],
            ['id' => 37914, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Ivittuut', 'active' => 1, 'slug' => 'ivittuut'],
            ['id' => 37915, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Paamiut', 'active' => 1, 'slug' => 'paamiut'],
            ['id' => 37916, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Nuuk', 'active' => 1, 'slug' => 'nuuk'],
            ['id' => 37917, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Maniitsoq', 'active' => 1, 'slug' => 'maniitsoq'],
            ['id' => 37918, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Sisimiut', 'active' => 1, 'slug' => 'sisimiut'],
            ['id' => 37919, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Kangaatsiaq', 'active' => 1, 'slug' => 'kangaatsiaq'],
            ['id' => 37920, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Aasiaat', 'active' => 1, 'slug' => 'aasiaat'],
            ['id' => 37921, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Qasigiannguit', 'active' => 1, 'slug' => 'qasigiannguit'],
            ['id' => 37922, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Ilulissat', 'active' => 1, 'slug' => 'ilulissat'],
            ['id' => 37923, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Qeqertarsuaq', 'active' => 1, 'slug' => 'qeqertarsuaq'],
            ['id' => 37924, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Uummannaq', 'active' => 1, 'slug' => 'uummannaq'],
            ['id' => 37925, 'region_id' => 743907, 'country_code' => 'GL', 'name' => 'Upernavik', 'active' => 1, 'slug' => 'upernavik'],
            ['id' => 37926, 'region_id' => 743923, 'country_code' => 'GL', 'name' => 'Ammassalik.', 'active' => 1, 'slug' => 'ammassalik'],
            ['id' => 37927, 'region_id' => 743923, 'country_code' => 'GL', 'name' => 'Ittoqqortoormiit', 'active' => 1, 'slug' => 'ittoqqortoormiit']

        ];

        City::create($city);
        $this->enableForeignKeys();

    }
}
