<?php

use App\Models\Address\State;
use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class GuyanaCitiesSeeder extends Seeder
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
            ['id' => 40455, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Mabaruma', 'active' => 1, 'slug' => 'mabaruma'],
            ['id' => 40456, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Santa Rosa', 'active' => 1, 'slug' => 'santa-rosa'],
            ['id' => 40457, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Moruca', 'active' => 1, 'slug' => 'moruca'],
            ['id' => 40458, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Arakaka', 'active' => 1, 'slug' => 'arakaka'],
            ['id' => 40459, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Hosororo', 'active' => 1, 'slug' => 'hosororo'],
            ['id' => 40460, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Koriabo', 'active' => 1, 'slug' => 'koriabo'],
            ['id' => 40461, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Towakaima', 'active' => 1, 'slug' => 'towakaima'],
            ['id' => 40462, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Morawhanna', 'active' => 1, 'slug' => 'morawhanna'],
            ['id' => 40463, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Matthew\'s Ridge', 'active' => 1, 'slug' => 'matthews-ridge'],
            ['id' => 40464, 'region_id' => 746514, 'country_code' => 'GY', 'name' => 'Port Kaituma', 'active' => 1, 'slug' => 'port-kaituma'],
            ['id' => 40465, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Bartica', 'active' => 1, 'slug' => 'bartica'],
            ['id' => 40466, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Issano', 'active' => 1, 'slug' => 'issano'],
            ['id' => 40467, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Kamikusa', 'active' => 1, 'slug' => 'kamikusa'],
            ['id' => 40468, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Tumereng', 'active' => 1, 'slug' => 'tumereng'],
            ['id' => 40469, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Imbaimadai', 'active' => 1, 'slug' => 'imbaimadai'],
            ['id' => 40470, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Keweigek', 'active' => 1, 'slug' => 'keweigek'],
            ['id' => 40471, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Kamarang', 'active' => 1, 'slug' => 'kamarang'],
            ['id' => 40472, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Arimu Mine', 'active' => 1, 'slug' => 'arimu-mine'],
            ['id' => 40473, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Peters Mine', 'active' => 1, 'slug' => 'peters-mine'],
            ['id' => 40474, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Kartuni', 'active' => 1, 'slug' => 'kartuni'],
            ['id' => 40475, 'region_id' => 746525, 'country_code' => 'GY', 'name' => 'Isseneru', 'active' => 1, 'slug' => 'isseneru'],
            ['id' => 40476, 'region_id' => 746537, 'country_code' => 'GY', 'name' => 'Georgetown', 'active' => 1, 'slug' => 'georgetown'],
            ['id' => 40477, 'region_id' => 746537, 'country_code' => 'GY', 'name' => 'Buxton', 'active' => 1, 'slug' => 'buxton'],
            ['id' => 40478, 'region_id' => 746537, 'country_code' => 'GY', 'name' => 'Paradise', 'active' => 1, 'slug' => 'paradise'],
            ['id' => 40479, 'region_id' => 746537, 'country_code' => 'GY', 'name' => 'Victoria', 'active' => 1, 'slug' => 'victoria'],
            ['id' => 40480, 'region_id' => 746537, 'country_code' => 'GY', 'name' => 'Enmore', 'active' => 1, 'slug' => 'enmore'],
            ['id' => 40481, 'region_id' => 746543, 'country_code' => 'GY', 'name' => 'Nueva Amsterdam', 'active' => 1, 'slug' => 'nueva-amsterdam'],
            ['id' => 40482, 'region_id' => 746543, 'country_code' => 'GY', 'name' => 'Rose Hall', 'active' => 1, 'slug' => 'rose-hall'],
            ['id' => 40483, 'region_id' => 746543, 'country_code' => 'GY', 'name' => 'Mara', 'active' => 1, 'slug' => 'mara'],
            ['id' => 40484, 'region_id' => 746543, 'country_code' => 'GY', 'name' => 'Corriverton', 'active' => 1, 'slug' => 'corriverton'],
            ['id' => 40485, 'region_id' => 746548, 'country_code' => 'GY', 'name' => 'Parika', 'active' => 1, 'slug' => 'parika'],
            ['id' => 40486, 'region_id' => 746548, 'country_code' => 'GY', 'name' => 'Vreed en Hoop', 'active' => 1, 'slug' => 'vreed-en-hoop'],
            ['id' => 40487, 'region_id' => 746548, 'country_code' => 'GY', 'name' => 'Uitvlugt', 'active' => 1, 'slug' => 'uitvlugt'],
            ['id' => 40488, 'region_id' => 746548, 'country_code' => 'GY', 'name' => 'Schoon Ord', 'active' => 1, 'slug' => 'schoon-ord'],
            ['id' => 40489, 'region_id' => 746553, 'country_code' => 'GY', 'name' => 'Rosignol', 'active' => 1, 'slug' => 'rosignol'],
            ['id' => 40490, 'region_id' => 746553, 'country_code' => 'GY', 'name' => 'Helena', 'active' => 1, 'slug' => 'helena'],
            ['id' => 40491, 'region_id' => 746553, 'country_code' => 'GY', 'name' => 'Mahaicony', 'active' => 1, 'slug' => 'mahaicony'],
            ['id' => 40492, 'region_id' => 746553, 'country_code' => 'GY', 'name' => 'Fort Washington', 'active' => 1, 'slug' => 'fort-washington'],
            ['id' => 40493, 'region_id' => 746558, 'country_code' => 'GY', 'name' => 'Anna Regina', 'active' => 1, 'slug' => 'anna-regina'],
            ['id' => 40494, 'region_id' => 746558, 'country_code' => 'GY', 'name' => 'Suddie', 'active' => 1, 'slug' => 'suddie'],
            ['id' => 40495, 'region_id' => 746558, 'country_code' => 'GY', 'name' => 'Spring Garden', 'active' => 1, 'slug' => 'spring-garden'],
            ['id' => 40496, 'region_id' => 746558, 'country_code' => 'GY', 'name' => 'Pickersgill', 'active' => 1, 'slug' => 'pickersgill'],
            ['id' => 40497, 'region_id' => 746558, 'country_code' => 'GY', 'name' => 'Charity', 'active' => 1, 'slug' => 'charity'],
            ['id' => 40499, 'region_id' => 746565, 'country_code' => 'GY', 'name' => 'Kangaruma', 'active' => 1, 'slug' => 'kangaruma'],
            ['id' => 40500, 'region_id' => 746565, 'country_code' => 'GY', 'name' => 'Tumatumari', 'active' => 1, 'slug' => 'tumatumari'],
            ['id' => 40501, 'region_id' => 746565, 'country_code' => 'GY', 'name' => 'Saveretik', 'active' => 1, 'slug' => 'saveretik'],
            ['id' => 40502, 'region_id' => 746565, 'country_code' => 'GY', 'name' => 'Mahdia', 'active' => 1, 'slug' => 'mahdia'],
            ['id' => 40503, 'region_id' => 746565, 'country_code' => 'GY', 'name' => 'Potaro', 'active' => 1, 'slug' => 'potaro'],
            ['id' => 40504, 'region_id' => 746565, 'country_code' => 'GY', 'name' => 'Orinduik', 'active' => 1, 'slug' => 'orinduik'],
            ['id' => 40505, 'region_id' => 746572, 'country_code' => 'GY', 'name' => 'Linden', 'active' => 1, 'slug' => 'linden'],
            ['id' => 40506, 'region_id' => 746572, 'country_code' => 'GY', 'name' => 'Ituni', 'active' => 1, 'slug' => 'ituni'],
            ['id' => 40507, 'region_id' => 746572, 'country_code' => 'GY', 'name' => 'Kalkuni', 'active' => 1, 'slug' => 'kalkuni'],
            ['id' => 40508, 'region_id' => 746572, 'country_code' => 'GY', 'name' => 'Kwakwani', 'active' => 1, 'slug' => 'kwakwani'],
            ['id' => 40509, 'region_id' => 746572, 'country_code' => 'GY', 'name' => 'Kurupakari', 'active' => 1, 'slug' => 'kurupakari'],
            ['id' => 40510, 'region_id' => 746572, 'country_code' => 'GY', 'name' => 'Rockstone', 'active' => 1, 'slug' => 'rockstone'],
            ['id' => 40511, 'region_id' => 746572, 'country_code' => 'GY', 'name' => 'Takama', 'active' => 1, 'slug' => 'takama'],
            ['id' => 40512, 'region_id' => 746580, 'country_code' => 'GY', 'name' => 'Surama', 'active' => 1, 'slug' => 'surama'],
            ['id' => 40513, 'region_id' => 746580, 'country_code' => 'GY', 'name' => 'Isherton', 'active' => 1, 'slug' => 'isherton'],
            ['id' => 40514, 'region_id' => 746580, 'country_code' => 'GY', 'name' => 'Lethem', 'active' => 1, 'slug' => 'lethem']

        ];

        City::create($city);
        $this->enableForeignKeys();

    }
}
