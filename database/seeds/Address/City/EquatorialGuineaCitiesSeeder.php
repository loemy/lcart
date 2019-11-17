<?php

use App\Models\Address\State;
use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class EquatorialGuineaCitiesSeeder extends Seeder
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
            ['id' => 44294, 'region_id' => 780940, 'country_code' => 'GQ', 'name' => 'Annobón', 'active' => 1, 'slug' => 'annobon'],
            ['id' => 44295, 'region_id' => 780942, 'country_code' => 'GQ', 'name' => 'Malabo', 'active' => 1, 'slug' => 'malabo'],
            ['id' => 44296, 'region_id' => 780942, 'country_code' => 'GQ', 'name' => 'Baney', 'active' => 1, 'slug' => 'baney'],
            ['id' => 44297, 'region_id' => 780942, 'country_code' => 'GQ', 'name' => 'Rebola', 'active' => 1, 'slug' => 'rebola'],
            ['id' => 44298, 'region_id' => 780946, 'country_code' => 'GQ', 'name' => 'Lubá', 'active' => 1, 'slug' => 'luba'],
            ['id' => 44299, 'region_id' => 780946, 'country_code' => 'GQ', 'name' => 'Riaba', 'active' => 1, 'slug' => 'riaba'],
            ['id' => 44300, 'region_id' => 780949, 'country_code' => 'GQ', 'name' => 'Evinayong', 'active' => 1, 'slug' => 'evinayong'],
            ['id' => 44301, 'region_id' => 780949, 'country_code' => 'GQ', 'name' => 'Niefang', 'active' => 1, 'slug' => 'niefang'],
            ['id' => 44302, 'region_id' => 780949, 'country_code' => 'GQ', 'name' => 'Akurenam', 'active' => 1, 'slug' => 'akurenam'],
            ['id' => 44303, 'region_id' => 780949, 'country_code' => 'GQ', 'name' => 'Bikurga', 'active' => 1, 'slug' => 'bikurga'],
            ['id' => 44304, 'region_id' => 780949, 'country_code' => 'GQ', 'name' => 'Nkimi', 'active' => 1, 'slug' => 'nkimi'],
            ['id' => 44305, 'region_id' => 780955, 'country_code' => 'GQ', 'name' => 'Ebebiyín', 'active' => 1, 'slug' => 'ebebiyin'],
            ['id' => 44306, 'region_id' => 780955, 'country_code' => 'GQ', 'name' => 'Mikomiseng', 'active' => 1, 'slug' => 'mikomiseng'],
            ['id' => 44307, 'region_id' => 780955, 'country_code' => 'GQ', 'name' => 'Nsok-nsomo', 'active' => 1, 'slug' => 'nsok-nsomo'],
            ['id' => 44308, 'region_id' => 780955, 'country_code' => 'GQ', 'name' => 'Nkué', 'active' => 1, 'slug' => 'nkue'],
            ['id' => 44309, 'region_id' => 780955, 'country_code' => 'GQ', 'name' => 'Bidjabidján', 'active' => 1, 'slug' => 'bidjabidjan'],
            ['id' => 44310, 'region_id' => 780955, 'country_code' => 'GQ', 'name' => 'Nsangi', 'active' => 1, 'slug' => 'nsangi'],
            ['id' => 44311, 'region_id' => 780962, 'country_code' => 'GQ', 'name' => 'Bata', 'active' => 1, 'slug' => 'bata'],
            ['id' => 44312, 'region_id' => 780962, 'country_code' => 'GQ', 'name' => 'Mbini', 'active' => 1, 'slug' => 'mbini'],
            ['id' => 44313, 'region_id' => 780962, 'country_code' => 'GQ', 'name' => 'Kogo', 'active' => 1, 'slug' => 'kogo'],
            ['id' => 44314, 'region_id' => 780962, 'country_code' => 'GQ', 'name' => 'Machinda', 'active' => 1, 'slug' => 'machinda'],
            ['id' => 44315, 'region_id' => 780962, 'country_code' => 'GQ', 'name' => 'Bitika', 'active' => 1, 'slug' => 'bitika'],
            ['id' => 44316, 'region_id' => 780962, 'country_code' => 'GQ', 'name' => 'Corisco', 'active' => 1, 'slug' => 'corisco'],
            ['id' => 44317, 'region_id' => 780962, 'country_code' => 'GQ', 'name' => 'Rio Campo', 'active' => 1, 'slug' => 'rio-campo'],
            ['id' => 44318, 'region_id' => 780962, 'country_code' => 'GQ', 'name' => 'Cocobeach', 'active' => 1, 'slug' => 'cocobeach'],
            ['id' => 44319, 'region_id' => 780971, 'country_code' => 'GQ', 'name' => 'Mongomo', 'active' => 1, 'slug' => 'mongomo'],
            ['id' => 44320, 'region_id' => 780971, 'country_code' => 'GQ', 'name' => 'Nsork', 'active' => 1, 'slug' => 'nsork'],
            ['id' => 44321, 'region_id' => 780971, 'country_code' => 'GQ', 'name' => 'Añisok', 'active' => 1, 'slug' => 'anisok'],
            ['id' => 44322, 'region_id' => 780971, 'country_code' => 'GQ', 'name' => 'Akonibe', 'active' => 1, 'slug' => 'akonibe'],
            ['id' => 44323, 'region_id' => 780971, 'country_code' => 'GQ', 'name' => 'Mengomeyén', 'active' => 1, 'slug' => 'mengomeyen'],
            ['id' => 44324, 'region_id' => 780971, 'country_code' => 'GQ', 'name' => 'Ayene', 'active' => 1, 'slug' => 'ayene']

        ];

        City::create($city);
        $this->enableForeignKeys();

    }
}
