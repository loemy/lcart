<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class PhilippinesStatesSeeder extends Seeder
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
            ['id' => 782271, 'country_code' => 'PH', 'name' => 'Abra', 'active' => 1, 'slug' => 'abra'],
            ['id' => 782272, 'country_code' => 'PH', 'name' => 'Agusan del Norte', 'active' => 1, 'slug' => 'agusan-del-norte'],
            ['id' => 782273, 'country_code' => 'PH', 'name' => 'Agusan del Sur', 'active' => 1, 'slug' => 'agusan-del-sur'],
            ['id' => 782274, 'country_code' => 'PH', 'name' => 'Aklan', 'active' => 1, 'slug' => 'aklan'],
            ['id' => 782275, 'country_code' => 'PH', 'name' => 'Albay', 'active' => 1, 'slug' => 'albay'],
            ['id' => 782276, 'country_code' => 'PH', 'name' => 'Antipolo', 'active' => 1, 'slug' => 'antipolo'],
            ['id' => 782277, 'country_code' => 'PH', 'name' => 'Antique', 'active' => 1, 'slug' => 'antique'],
            ['id' => 782278, 'country_code' => 'PH', 'name' => 'Apayao', 'active' => 1, 'slug' => 'apayao'],
            ['id' => 782279, 'country_code' => 'PH', 'name' => 'Aurora', 'active' => 1, 'slug' => 'aurora'],
            ['id' => 782280, 'country_code' => 'PH', 'name' => 'Basilan', 'active' => 1, 'slug' => 'basilan'],
            ['id' => 782281, 'country_code' => 'PH', 'name' => 'Bataan', 'active' => 1, 'slug' => 'bataan'],
            ['id' => 782282, 'country_code' => 'PH', 'name' => 'Batanes', 'active' => 1, 'slug' => 'batanes'],
            ['id' => 782283, 'country_code' => 'PH', 'name' => 'Batangas', 'active' => 1, 'slug' => 'batangas'],
            ['id' => 782284, 'country_code' => 'PH', 'name' => 'Benguet', 'active' => 1, 'slug' => 'benguet'],
            ['id' => 782285, 'country_code' => 'PH', 'name' => 'Biliran', 'active' => 1, 'slug' => 'biliran'],
            ['id' => 782286, 'country_code' => 'PH', 'name' => 'Bohol', 'active' => 1, 'slug' => 'bohol'],
            ['id' => 782287, 'country_code' => 'PH', 'name' => 'Bukidnon', 'active' => 1, 'slug' => 'bukidnon'],
            ['id' => 782288, 'country_code' => 'PH', 'name' => 'Bulacan', 'active' => 1, 'slug' => 'bulacan'],
            ['id' => 782289, 'country_code' => 'PH', 'name' => 'Cagayan', 'active' => 1, 'slug' => 'cagayan'],
            ['id' => 782290, 'country_code' => 'PH', 'name' => 'Camarines Norte', 'active' => 1, 'slug' => 'camarines-norte'],
            ['id' => 782291, 'country_code' => 'PH', 'name' => 'Camarines Sur', 'active' => 1, 'slug' => 'camarines-sur'],
            ['id' => 782292, 'country_code' => 'PH', 'name' => 'Camiguin', 'active' => 1, 'slug' => 'camiguin'],
            ['id' => 782293, 'country_code' => 'PH', 'name' => 'Capiz', 'active' => 1, 'slug' => 'capiz'],
            ['id' => 782294, 'country_code' => 'PH', 'name' => 'Catanduanes', 'active' => 1, 'slug' => 'catanduanes'],
            ['id' => 782295, 'country_code' => 'PH', 'name' => 'Cavite', 'active' => 1, 'slug' => 'cavite'],
            ['id' => 782296, 'country_code' => 'PH', 'name' => 'Cebu', 'active' => 1, 'slug' => 'cebu'],
            ['id' => 782297, 'country_code' => 'PH', 'name' => 'Compostela Valley', 'active' => 1, 'slug' => 'compostela-valley'],
            ['id' => 782298, 'country_code' => 'PH', 'name' => 'Cotabato', 'active' => 1, 'slug' => 'cotabato'],
            ['id' => 782299, 'country_code' => 'PH', 'name' => 'Davao del Norte', 'active' => 1, 'slug' => 'davao-del-norte'],
            ['id' => 782300, 'country_code' => 'PH', 'name' => 'Davao del Sur', 'active' => 1, 'slug' => 'davao-del-sur'],
            ['id' => 782301, 'country_code' => 'PH', 'name' => 'Davao Oriental', 'active' => 1, 'slug' => 'davao-oriental'],
            ['id' => 782302, 'country_code' => 'PH', 'name' => 'Eastern Samar', 'active' => 1, 'slug' => 'eastern-samar'],
            ['id' => 782303, 'country_code' => 'PH', 'name' => 'Guimaras', 'active' => 1, 'slug' => 'guimaras'],
            ['id' => 782304, 'country_code' => 'PH', 'name' => 'Ifugao', 'active' => 1, 'slug' => 'ifugao'],
            ['id' => 782305, 'country_code' => 'PH', 'name' => 'Ilocos Norte', 'active' => 1, 'slug' => 'ilocos-norte'],
            ['id' => 782306, 'country_code' => 'PH', 'name' => 'Ilocos Sur', 'active' => 1, 'slug' => 'ilocos-sur'],
            ['id' => 782307, 'country_code' => 'PH', 'name' => 'Iloilo', 'active' => 1, 'slug' => 'iloilo'],
            ['id' => 782308, 'country_code' => 'PH', 'name' => 'Isabela', 'active' => 1, 'slug' => 'isabela'],
            ['id' => 782309, 'country_code' => 'PH', 'name' => 'Kalinga', 'active' => 1, 'slug' => 'kalinga'],
            ['id' => 782310, 'country_code' => 'PH', 'name' => 'La Union', 'active' => 1, 'slug' => 'la-union'],
            ['id' => 782311, 'country_code' => 'PH', 'name' => 'Laguna', 'active' => 1, 'slug' => 'laguna'],
            ['id' => 782312, 'country_code' => 'PH', 'name' => 'Lanao del Norte', 'active' => 1, 'slug' => 'lanao-del-norte'],
            ['id' => 782313, 'country_code' => 'PH', 'name' => 'Lanao del Sur', 'active' => 1, 'slug' => 'lanao-del-sur'],
            ['id' => 782314, 'country_code' => 'PH', 'name' => 'Leyte', 'active' => 1, 'slug' => 'leyte'],
            ['id' => 782315, 'country_code' => 'PH', 'name' => 'Maguindanao', 'active' => 1, 'slug' => 'maguindanao'],
            ['id' => 782316, 'country_code' => 'PH', 'name' => 'Marikina', 'active' => 1, 'slug' => 'marikina'],
            ['id' => 782317, 'country_code' => 'PH', 'name' => 'Marinduque', 'active' => 1, 'slug' => 'marinduque'],
            ['id' => 782318, 'country_code' => 'PH', 'name' => 'Masbate', 'active' => 1, 'slug' => 'masbate'],
            ['id' => 782319, 'country_code' => 'PH', 'name' => 'Metro Manila', 'active' => 1, 'slug' => 'metro-manila'],
            ['id' => 782320, 'country_code' => 'PH', 'name' => 'Mindoro Occidental', 'active' => 1, 'slug' => 'mindoro-occidental'],
            ['id' => 782321, 'country_code' => 'PH', 'name' => 'Mindoro Oriental', 'active' => 1, 'slug' => 'mindoro-oriental'],
            ['id' => 782322, 'country_code' => 'PH', 'name' => 'Misamis Occidental', 'active' => 1, 'slug' => 'misamis-occidental'],
            ['id' => 782323, 'country_code' => 'PH', 'name' => 'Misamis Oriental', 'active' => 1, 'slug' => 'misamis-oriental'],
            ['id' => 782324, 'country_code' => 'PH', 'name' => 'Mountain', 'active' => 1, 'slug' => 'mountain'],
            ['id' => 782325, 'country_code' => 'PH', 'name' => 'Negros Occidental', 'active' => 1, 'slug' => 'negros-occidental'],
            ['id' => 782326, 'country_code' => 'PH', 'name' => 'Negros Oriental', 'active' => 1, 'slug' => 'negros-oriental'],
            ['id' => 782327, 'country_code' => 'PH', 'name' => 'Northern Samar', 'active' => 1, 'slug' => 'northern-samar'],
            ['id' => 782328, 'country_code' => 'PH', 'name' => 'Nueva Ecija', 'active' => 1, 'slug' => 'nueva-ecija'],
            ['id' => 782329, 'country_code' => 'PH', 'name' => 'Nueva Vizcaya', 'active' => 1, 'slug' => 'nueva-vizcaya'],
            ['id' => 782330, 'country_code' => 'PH', 'name' => 'Palawan', 'active' => 1, 'slug' => 'palawan'],
            ['id' => 782331, 'country_code' => 'PH', 'name' => 'Pampanga', 'active' => 1, 'slug' => 'pampanga'],
            ['id' => 782332, 'country_code' => 'PH', 'name' => 'Pangasinan', 'active' => 1, 'slug' => 'pangasinan'],
            ['id' => 782333, 'country_code' => 'PH', 'name' => 'Quezon', 'active' => 1, 'slug' => 'quezon'],
            ['id' => 782334, 'country_code' => 'PH', 'name' => 'Quirino', 'active' => 1, 'slug' => 'quirino'],
            ['id' => 782335, 'country_code' => 'PH', 'name' => 'Rizal', 'active' => 1, 'slug' => 'rizal'],
            ['id' => 782336, 'country_code' => 'PH', 'name' => 'Romblon', 'active' => 1, 'slug' => 'romblon'],
            ['id' => 782337, 'country_code' => 'PH', 'name' => 'Samar', 'active' => 1, 'slug' => 'samar'],
            ['id' => 782338, 'country_code' => 'PH', 'name' => 'Sarangani', 'active' => 1, 'slug' => 'sarangani'],
            ['id' => 782339, 'country_code' => 'PH', 'name' => 'Siquijor', 'active' => 1, 'slug' => 'siquijor'],
            ['id' => 782340, 'country_code' => 'PH', 'name' => 'Sorsogon', 'active' => 1, 'slug' => 'sorsogon'],
            ['id' => 782341, 'country_code' => 'PH', 'name' => 'South Cotabato', 'active' => 1, 'slug' => 'south-cotabato'],
            ['id' => 782342, 'country_code' => 'PH', 'name' => 'Southern Leyte', 'active' => 1, 'slug' => 'southern-leyte'],
            ['id' => 782343, 'country_code' => 'PH', 'name' => 'Sultan Kudarat', 'active' => 1, 'slug' => 'sultan-kudarat'],
            ['id' => 782344, 'country_code' => 'PH', 'name' => 'Sulu', 'active' => 1, 'slug' => 'sulu'],
            ['id' => 782345, 'country_code' => 'PH', 'name' => 'Surigao del Norte', 'active' => 1, 'slug' => 'surigao-del-norte'],
            ['id' => 782346, 'country_code' => 'PH', 'name' => 'Surigoa del Sur', 'active' => 1, 'slug' => 'surigoa-del-sur'],
            ['id' => 782347, 'country_code' => 'PH', 'name' => 'Tarlac', 'active' => 1, 'slug' => 'tarlac'],
            ['id' => 782348, 'country_code' => 'PH', 'name' => 'Tawi-Tawi', 'active' => 1, 'slug' => 'tawi-tawi'],
            ['id' => 782349, 'country_code' => 'PH', 'name' => 'Zambales', 'active' => 1, 'slug' => 'zambales'],
            ['id' => 782350, 'country_code' => 'PH', 'name' => 'Zamboanga del Sur', 'active' => 1, 'slug' => 'zamboanga-del-sur'],
            ['id' => 782351, 'country_code' => 'PH', 'name' => 'Zamboanga Sibugay', 'active' => 1, 'slug' => 'zamboanga-sibugay']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
