<?php

use App\Models\Address\Country;
use App\Models\Address\State;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class AfghanistanStatesSeeder extends Seeder
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
            ['id' => 781063, 'country_code' => 'AF', 'name' => 'Badahsan', 'active' => 1, 'slug' => 'badahsan'],
            ['id' => 781092, 'country_code' => 'AF', 'name' => 'Badgis', 'active' => 1, 'slug' => 'badgis'],
            ['id' => 781100, 'country_code' => 'AF', 'name' => 'Baglan', 'active' => 1, 'slug' => 'baglan'],
            ['id' => 781113, 'country_code' => 'AF', 'name' => 'Balh', 'active' => 1, 'slug' => 'balh'],
            ['id' => 781128, 'country_code' => 'AF', 'name' => 'Bamiyan', 'active' => 1, 'slug' => 'bamiyan'],
            ['id' => 781134, 'country_code' => 'AF', 'name' => 'Daikondi', 'active' => 1, 'slug' => 'daikondi'],
            ['id' => 781144, 'country_code' => 'AF', 'name' => 'Farah', 'active' => 1, 'slug' => 'farah'],
            ['id' => 781155, 'country_code' => 'AF', 'name' => 'Faryab', 'active' => 1, 'slug' => 'faryab'],
            ['id' => 781168, 'country_code' => 'AF', 'name' => 'Gawr', 'active' => 1, 'slug' => 'gawr'],
            ['id' => 781175, 'country_code' => 'AF', 'name' => 'Gazni', 'active' => 1, 'slug' => 'gazni'],
            ['id' => 781192, 'country_code' => 'AF', 'name' => 'Hawst', 'active' => 1, 'slug' => 'hawst'],
            ['id' => 781205, 'country_code' => 'AF', 'name' => 'Herat', 'active' => 1, 'slug' => 'herat'],
            ['id' => 781222, 'country_code' => 'AF', 'name' => 'Hilmand', 'active' => 1, 'slug' => 'hilmand'],
            ['id' => 781236, 'country_code' => 'AF', 'name' => 'Jawzjan', 'active' => 1, 'slug' => 'jawzjan'],
            ['id' => 781246, 'country_code' => 'AF', 'name' => 'Kabul', 'active' => 1, 'slug' => 'kabul'],
            ['id' => 781261, 'country_code' => 'AF', 'name' => 'Kapisa', 'active' => 1, 'slug' => 'kapisa'],
            ['id' => 781268, 'country_code' => 'AF', 'name' => 'Kunar', 'active' => 1, 'slug' => 'kunar'],
            ['id' => 781284, 'country_code' => 'AF', 'name' => 'Lagman', 'active' => 1, 'slug' => 'lagman'],
            ['id' => 781290, 'country_code' => 'AF', 'name' => 'Lawgar', 'active' => 1, 'slug' => 'lawgar'],
            ['id' => 781298, 'country_code' => 'AF', 'name' => 'Nangarhar', 'active' => 1, 'slug' => 'nangarhar'],
            ['id' => 781321, 'country_code' => 'AF', 'name' => 'Nimruz', 'active' => 1, 'slug' => 'nimruz'],
            ['id' => 781327, 'country_code' => 'AF', 'name' => 'Nuristan', 'active' => 1, 'slug' => 'nuristan'],
            ['id' => 781334, 'country_code' => 'AF', 'name' => 'Paktika', 'active' => 1, 'slug' => 'paktika'],
            ['id' => 781350, 'country_code' => 'AF', 'name' => 'Paktiya', 'active' => 1, 'slug' => 'paktiya'],
            ['id' => 781364, 'country_code' => 'AF', 'name' => 'Panjshir', 'active' => 1, 'slug' => 'panjshir'],
            ['id' => 781369, 'country_code' => 'AF', 'name' => 'Parwan', 'active' => 1, 'slug' => 'parwan'],
            ['id' => 781378, 'country_code' => 'AF', 'name' => 'Qandahar', 'active' => 1, 'slug' => 'qandahar'],
            ['id' => 781396, 'country_code' => 'AF', 'name' => 'Qunduz', 'active' => 1, 'slug' => 'qunduz'],
            ['id' => 781404, 'country_code' => 'AF', 'name' => 'Samangan', 'active' => 1, 'slug' => 'samangan'],
            ['id' => 781410, 'country_code' => 'AF', 'name' => 'Sar-e Pul', 'active' => 1, 'slug' => 'sar-e-pul'],
            ['id' => 781417, 'country_code' => 'AF', 'name' => 'Tahar', 'active' => 1, 'slug' => 'tahar'],
            ['id' => 781429, 'country_code' => 'AF', 'name' => 'Uruzgan', 'active' => 1, 'slug' => 'uruzgan'],
            ['id' => 781437, 'country_code' => 'AF', 'name' => 'Vardak', 'active' => 1, 'slug' => 'vardak'],
            ['id' => 781447, 'country_code' => 'AF', 'name' => 'Zabul', 'active' => 1, 'slug' => 'zabul']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
