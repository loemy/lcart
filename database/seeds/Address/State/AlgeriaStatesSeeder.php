<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class AlgeriaStatesSeeder extends Seeder
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
            ['id' => 783169, 'country_code' => 'DZ', 'name' => 'Adrar', 'active' => 1, 'slug' => 'adrar'],
            ['id' => 783170, 'country_code' => 'DZ', 'name' => 'Chlef', 'active' => 1, 'slug' => 'chlef'],
            ['id' => 783171, 'country_code' => 'DZ', 'name' => 'Laghouat', 'active' => 1, 'slug' => 'laghouat'],
            ['id' => 783172, 'country_code' => 'DZ', 'name' => 'Oum El-Bouaghi', 'active' => 1, 'slug' => 'oum-el-bouaghi'],
            ['id' => 783173, 'country_code' => 'DZ', 'name' => 'Batna', 'active' => 1, 'slug' => 'batna'],
            ['id' => 783174, 'country_code' => 'DZ', 'name' => 'Béjaïa', 'active' => 1, 'slug' => 'bejaia'],
            ['id' => 783175, 'country_code' => 'DZ', 'name' => 'Biskra', 'active' => 1, 'slug' => 'biskra'],
            ['id' => 783176, 'country_code' => 'DZ', 'name' => 'Béchar', 'active' => 1, 'slug' => 'bechar'],
            ['id' => 783177, 'country_code' => 'DZ', 'name' => 'Blida', 'active' => 1, 'slug' => 'blida'],
            ['id' => 783178, 'country_code' => 'DZ', 'name' => 'Bouira', 'active' => 1, 'slug' => 'bouira'],
            ['id' => 783179, 'country_code' => 'DZ', 'name' => 'Tamanrasset', 'active' => 1, 'slug' => 'tamanrasset'],
            ['id' => 783180, 'country_code' => 'DZ', 'name' => 'Tébessa', 'active' => 1, 'slug' => 'tebessa'],
            ['id' => 783181, 'country_code' => 'DZ', 'name' => 'Tlemcen', 'active' => 1, 'slug' => 'tlemcen'],
            ['id' => 783182, 'country_code' => 'DZ', 'name' => 'Tiaret', 'active' => 1, 'slug' => 'tiaret'],
            ['id' => 783183, 'country_code' => 'DZ', 'name' => 'Tizi Ouzou', 'active' => 1, 'slug' => 'tizi-ouzou'],
            ['id' => 783184, 'country_code' => 'DZ', 'name' => 'Alger', 'active' => 1, 'slug' => 'alger'],
            ['id' => 783185, 'country_code' => 'DZ', 'name' => 'Djelfa', 'active' => 1, 'slug' => 'djelfa'],
            ['id' => 783186, 'country_code' => 'DZ', 'name' => 'Jijel', 'active' => 1, 'slug' => 'jijel'],
            ['id' => 783187, 'country_code' => 'DZ', 'name' => 'Sétif', 'active' => 1, 'slug' => 'setif'],
            ['id' => 783188, 'country_code' => 'DZ', 'name' => 'Saïda', 'active' => 1, 'slug' => 'saida'],
            ['id' => 783189, 'country_code' => 'DZ', 'name' => 'Skikda', 'active' => 1, 'slug' => 'skikda'],
            ['id' => 783190, 'country_code' => 'DZ', 'name' => 'Sidi Bel Abbes', 'active' => 1, 'slug' => 'sidi-bel-abbes'],
            ['id' => 783191, 'country_code' => 'DZ', 'name' => 'Annaba', 'active' => 1, 'slug' => 'annaba'],
            ['id' => 783192, 'country_code' => 'DZ', 'name' => 'Guelma', 'active' => 1, 'slug' => 'guelma'],
            ['id' => 783193, 'country_code' => 'DZ', 'name' => 'Constantine', 'active' => 1, 'slug' => 'constantine'],
            ['id' => 783194, 'country_code' => 'DZ', 'name' => 'Médéa', 'active' => 1, 'slug' => 'medea'],
            ['id' => 783195, 'country_code' => 'DZ', 'name' => 'Mostaganem', 'active' => 1, 'slug' => 'mostaganem'],
            ['id' => 783196, 'country_code' => 'DZ', 'name' => 'M\'Sila', 'active' => 1, 'slug' => 'msila'],
            ['id' => 783197, 'country_code' => 'DZ', 'name' => 'Mascara', 'active' => 1, 'slug' => 'mascara'],
            ['id' => 783198, 'country_code' => 'DZ', 'name' => 'Ouargla', 'active' => 1, 'slug' => 'ouargla'],
            ['id' => 783199, 'country_code' => 'DZ', 'name' => 'Oran', 'active' => 1, 'slug' => 'oran'],
            ['id' => 783200, 'country_code' => 'DZ', 'name' => 'El Bayadh', 'active' => 1, 'slug' => 'el-bayadh'],
            ['id' => 783201, 'country_code' => 'DZ', 'name' => 'Illizi', 'active' => 1, 'slug' => 'illizi'],
            ['id' => 783202, 'country_code' => 'DZ', 'name' => 'Bordj Bou Arreridj', 'active' => 1, 'slug' => 'bordj-bou-arreridj'],
            ['id' => 783203, 'country_code' => 'DZ', 'name' => 'Boumerdes', 'active' => 1, 'slug' => 'boumerdes'],
            ['id' => 783204, 'country_code' => 'DZ', 'name' => 'El Tarf', 'active' => 1, 'slug' => 'el-tarf'],
            ['id' => 783205, 'country_code' => 'DZ', 'name' => 'Tindouf', 'active' => 1, 'slug' => 'tindouf'],
            ['id' => 783206, 'country_code' => 'DZ', 'name' => 'Tissemsilt', 'active' => 1, 'slug' => 'tissemsilt'],
            ['id' => 783207, 'country_code' => 'DZ', 'name' => 'El Oued', 'active' => 1, 'slug' => 'el-oued'],
            ['id' => 783208, 'country_code' => 'DZ', 'name' => 'Khenchela', 'active' => 1, 'slug' => 'khenchela'],
            ['id' => 783209, 'country_code' => 'DZ', 'name' => 'Souk Ahras', 'active' => 1, 'slug' => 'souk-ahras'],
            ['id' => 783210, 'country_code' => 'DZ', 'name' => 'Tipaza', 'active' => 1, 'slug' => 'tipaza'],
            ['id' => 783211, 'country_code' => 'DZ', 'name' => 'Mila', 'active' => 1, 'slug' => 'mila'],
            ['id' => 783212, 'country_code' => 'DZ', 'name' => 'Aïn Defla', 'active' => 1, 'slug' => 'ain-defla'],
            ['id' => 783213, 'country_code' => 'DZ', 'name' => 'Naâma', 'active' => 1, 'slug' => 'naama'],
            ['id' => 783214, 'country_code' => 'DZ', 'name' => 'Aïn Témouchent', 'active' => 1, 'slug' => 'ain-temouchent'],
            ['id' => 783215, 'country_code' => 'DZ', 'name' => 'Ghardaïa', 'active' => 1, 'slug' => 'ghardaia'],
            ['id' => 783216, 'country_code' => 'DZ', 'name' => 'Relizane', 'active' => 1, 'slug' => 'relizane']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
