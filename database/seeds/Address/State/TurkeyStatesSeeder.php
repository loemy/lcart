<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class TurkeyStatesSeeder extends Seeder
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
            ['id' => 782511, 'country_code' => 'TR', 'name' => 'Adana', 'active' => 1, 'slug' => 'adana'],
            ['id' => 782512, 'country_code' => 'TR', 'name' => 'Adıyaman', 'active' => 1, 'slug' => 'adiyaman'],
            ['id' => 782513, 'country_code' => 'TR', 'name' => 'Afyon', 'active' => 1, 'slug' => 'afyon'],
            ['id' => 782514, 'country_code' => 'TR', 'name' => 'Ağrı', 'active' => 1, 'slug' => 'agri'],
            ['id' => 782515, 'country_code' => 'TR', 'name' => 'Aksaray', 'active' => 1, 'slug' => 'aksaray'],
            ['id' => 782516, 'country_code' => 'TR', 'name' => 'Amasya', 'active' => 1, 'slug' => 'amasya'],
            ['id' => 782517, 'country_code' => 'TR', 'name' => 'Ankara', 'active' => 1, 'slug' => 'ankara'],
            ['id' => 782518, 'country_code' => 'TR', 'name' => 'Antalya', 'active' => 1, 'slug' => 'antalya'],
            ['id' => 782519, 'country_code' => 'TR', 'name' => 'Ardahan', 'active' => 1, 'slug' => 'ardahan'],
            ['id' => 782520, 'country_code' => 'TR', 'name' => 'Artvin', 'active' => 1, 'slug' => 'artvin'],
            ['id' => 782521, 'country_code' => 'TR', 'name' => 'Aydın', 'active' => 1, 'slug' => 'aydin'],
            ['id' => 782522, 'country_code' => 'TR', 'name' => 'Balıkesir', 'active' => 1, 'slug' => 'balikesir'],
            ['id' => 782523, 'country_code' => 'TR', 'name' => 'Bartın', 'active' => 1, 'slug' => 'bartin'],
            ['id' => 782524, 'country_code' => 'TR', 'name' => 'Batman', 'active' => 1, 'slug' => 'batman'],
            ['id' => 782525, 'country_code' => 'TR', 'name' => 'Bayburt', 'active' => 1, 'slug' => 'bayburt'],
            ['id' => 782526, 'country_code' => 'TR', 'name' => 'Bilecik', 'active' => 1, 'slug' => 'bilecik'],
            ['id' => 782527, 'country_code' => 'TR', 'name' => 'Bingöl', 'active' => 1, 'slug' => 'bingol'],
            ['id' => 782528, 'country_code' => 'TR', 'name' => 'Bitlis', 'active' => 1, 'slug' => 'bitlis'],
            ['id' => 782529, 'country_code' => 'TR', 'name' => 'Bolu', 'active' => 1, 'slug' => 'bolu'],
            ['id' => 782530, 'country_code' => 'TR', 'name' => 'Burdur', 'active' => 1, 'slug' => 'burdur'],
            ['id' => 782531, 'country_code' => 'TR', 'name' => 'Bursa', 'active' => 1, 'slug' => 'bursa'],
            ['id' => 782532, 'country_code' => 'TR', 'name' => 'Çanakkale', 'active' => 1, 'slug' => 'canakkale'],
            ['id' => 782533, 'country_code' => 'TR', 'name' => 'Çankırı', 'active' => 1, 'slug' => 'cankiri'],
            ['id' => 782534, 'country_code' => 'TR', 'name' => 'Çorum', 'active' => 1, 'slug' => 'corum'],
            ['id' => 782535, 'country_code' => 'TR', 'name' => 'Denizli', 'active' => 1, 'slug' => 'denizli'],
            ['id' => 782536, 'country_code' => 'TR', 'name' => 'Diyarbakır', 'active' => 1, 'slug' => 'diyarbakir'],
            ['id' => 782537, 'country_code' => 'TR', 'name' => 'Düzce', 'active' => 1, 'slug' => 'duzce'],
            ['id' => 782538, 'country_code' => 'TR', 'name' => 'Edirne', 'active' => 1, 'slug' => 'edirne'],
            ['id' => 782539, 'country_code' => 'TR', 'name' => 'Elazığ', 'active' => 1, 'slug' => 'elazig'],
            ['id' => 782540, 'country_code' => 'TR', 'name' => 'Erzincan', 'active' => 1, 'slug' => 'erzincan'],
            ['id' => 782541, 'country_code' => 'TR', 'name' => 'Erzurum', 'active' => 1, 'slug' => 'erzurum'],
            ['id' => 782542, 'country_code' => 'TR', 'name' => 'Eskişehir', 'active' => 1, 'slug' => 'eskisehir'],
            ['id' => 782543, 'country_code' => 'TR', 'name' => 'Gaziantep', 'active' => 1, 'slug' => 'gaziantep'],
            ['id' => 782544, 'country_code' => 'TR', 'name' => 'Giresun', 'active' => 1, 'slug' => 'giresun'],
            ['id' => 782545, 'country_code' => 'TR', 'name' => 'Girne', 'active' => 1, 'slug' => 'girne'],
            ['id' => 782546, 'country_code' => 'TR', 'name' => 'Gümüşhane', 'active' => 1, 'slug' => 'gumushane'],
            ['id' => 782547, 'country_code' => 'TR', 'name' => 'Güzelyurt', 'active' => 1, 'slug' => 'guzelyurt'],
            ['id' => 782548, 'country_code' => 'TR', 'name' => 'Hakkari', 'active' => 1, 'slug' => 'hakkari'],
            ['id' => 782549, 'country_code' => 'TR', 'name' => 'Hatay', 'active' => 1, 'slug' => 'hatay'],
            ['id' => 782550, 'country_code' => 'TR', 'name' => 'Iğdır', 'active' => 1, 'slug' => 'igdir'],
            ['id' => 782551, 'country_code' => 'TR', 'name' => 'İskele', 'active' => 1, 'slug' => 'iskele'],
            ['id' => 782552, 'country_code' => 'TR', 'name' => 'Isparta', 'active' => 1, 'slug' => 'isparta'],
            ['id' => 782553, 'country_code' => 'TR', 'name' => 'İstanbul', 'active' => 1, 'slug' => 'istanbul'],
            ['id' => 782554, 'country_code' => 'TR', 'name' => 'İzmir', 'active' => 1, 'slug' => 'izmir'],
            ['id' => 782555, 'country_code' => 'TR', 'name' => 'Kahramanmaraş', 'active' => 1, 'slug' => 'kahramanmaras'],
            ['id' => 782556, 'country_code' => 'TR', 'name' => 'Karabük', 'active' => 1, 'slug' => 'karabuk'],
            ['id' => 782557, 'country_code' => 'TR', 'name' => 'Karaman', 'active' => 1, 'slug' => 'karaman'],
            ['id' => 782558, 'country_code' => 'TR', 'name' => 'Kars', 'active' => 1, 'slug' => 'kars'],
            ['id' => 782559, 'country_code' => 'TR', 'name' => 'Kastamonu', 'active' => 1, 'slug' => 'kastamonu'],
            ['id' => 782560, 'country_code' => 'TR', 'name' => 'Kayseri', 'active' => 1, 'slug' => 'kayseri'],
            ['id' => 782561, 'country_code' => 'TR', 'name' => 'Kilis', 'active' => 1, 'slug' => 'kilis'],
            ['id' => 782562, 'country_code' => 'TR', 'name' => 'Kırıkkale', 'active' => 1, 'slug' => 'kirikkale'],
            ['id' => 782563, 'country_code' => 'TR', 'name' => 'Kırklareli', 'active' => 1, 'slug' => 'kirklareli'],
            ['id' => 782564, 'country_code' => 'TR', 'name' => 'Kırşehir', 'active' => 1, 'slug' => 'kirsehir'],
            ['id' => 782565, 'country_code' => 'TR', 'name' => 'Kocaeli', 'active' => 1, 'slug' => 'kocaeli'],
            ['id' => 782566, 'country_code' => 'TR', 'name' => 'Konya', 'active' => 1, 'slug' => 'konya'],
            ['id' => 782567, 'country_code' => 'TR', 'name' => 'Kütahya', 'active' => 1, 'slug' => 'kutahya'],
            ['id' => 782568, 'country_code' => 'TR', 'name' => 'Lefkoşa', 'active' => 1, 'slug' => 'lefkosa'],
            ['id' => 782569, 'country_code' => 'TR', 'name' => 'Magosa', 'active' => 1, 'slug' => 'magosa'],
            ['id' => 782570, 'country_code' => 'TR', 'name' => 'Malatya', 'active' => 1, 'slug' => 'malatya'],
            ['id' => 782571, 'country_code' => 'TR', 'name' => 'Manisa', 'active' => 1, 'slug' => 'manisa'],
            ['id' => 782572, 'country_code' => 'TR', 'name' => 'Mardin', 'active' => 1, 'slug' => 'mardin'],
            ['id' => 782573, 'country_code' => 'TR', 'name' => 'Mersin', 'active' => 1, 'slug' => 'mersin'],
            ['id' => 782574, 'country_code' => 'TR', 'name' => 'Muğla', 'active' => 1, 'slug' => 'mugla'],
            ['id' => 782575, 'country_code' => 'TR', 'name' => 'Muş', 'active' => 1, 'slug' => 'mus'],
            ['id' => 782576, 'country_code' => 'TR', 'name' => 'Nevşehir', 'active' => 1, 'slug' => 'nevsehir'],
            ['id' => 782577, 'country_code' => 'TR', 'name' => 'Niğde', 'active' => 1, 'slug' => 'nigde'],
            ['id' => 782578, 'country_code' => 'TR', 'name' => 'Ordu', 'active' => 1, 'slug' => 'ordu'],
            ['id' => 782579, 'country_code' => 'TR', 'name' => 'Osmaniye', 'active' => 1, 'slug' => 'osmaniye'],
            ['id' => 782580, 'country_code' => 'TR', 'name' => 'Rize', 'active' => 1, 'slug' => 'rize'],
            ['id' => 782581, 'country_code' => 'TR', 'name' => 'Sakarya', 'active' => 1, 'slug' => 'sakarya'],
            ['id' => 782582, 'country_code' => 'TR', 'name' => 'Samsun', 'active' => 1, 'slug' => 'samsun'],
            ['id' => 782583, 'country_code' => 'TR', 'name' => 'Şanlıurfa', 'active' => 1, 'slug' => 'sanliurfa'],
            ['id' => 782584, 'country_code' => 'TR', 'name' => 'Siirt', 'active' => 1, 'slug' => 'siirt'],
            ['id' => 782585, 'country_code' => 'TR', 'name' => 'Sinop', 'active' => 1, 'slug' => 'sinop'],
            ['id' => 782586, 'country_code' => 'TR', 'name' => 'Şırnak', 'active' => 1, 'slug' => 'sirnak'],
            ['id' => 782587, 'country_code' => 'TR', 'name' => 'Sivas', 'active' => 1, 'slug' => 'sivas'],
            ['id' => 782588, 'country_code' => 'TR', 'name' => 'Tekirdağ', 'active' => 1, 'slug' => 'tekirdag'],
            ['id' => 782589, 'country_code' => 'TR', 'name' => 'Tokat', 'active' => 1, 'slug' => 'tokat'],
            ['id' => 782590, 'country_code' => 'TR', 'name' => 'Trabzon', 'active' => 1, 'slug' => 'trabzon'],
            ['id' => 782591, 'country_code' => 'TR', 'name' => 'Tunceli', 'active' => 1, 'slug' => 'tunceli'],
            ['id' => 782592, 'country_code' => 'TR', 'name' => 'Uşak', 'active' => 1, 'slug' => 'usak'],
            ['id' => 782593, 'country_code' => 'TR', 'name' => 'Van', 'active' => 1, 'slug' => 'van'],
            ['id' => 782594, 'country_code' => 'TR', 'name' => 'Yalova', 'active' => 1, 'slug' => 'yalova'],
            ['id' => 782595, 'country_code' => 'TR', 'name' => 'Yozgat', 'active' => 1, 'slug' => 'yozgat'],
            ['id' => 782596, 'country_code' => 'TR', 'name' => 'Zonguldak', 'active' => 1, 'slug' => 'zonguldak']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
