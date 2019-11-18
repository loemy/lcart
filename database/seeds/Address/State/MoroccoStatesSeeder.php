<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class MoroccoStatesSeeder extends Seeder
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
            ['id' => 783332, 'country_code' => 'MA', 'name' => 'Grand Casablanca', 'active' => 1, 'slug' => 'grand-casablanca'],
            ['id' => 783333, 'country_code' => 'MA', 'name' => 'Chaouia-Ouardigha', 'active' => 1, 'slug' => 'chaouia-ouardigha'],
            ['id' => 783334, 'country_code' => 'MA', 'name' => 'Doukkala-Abda', 'active' => 1, 'slug' => 'doukkala-abda'],
            ['id' => 783335, 'country_code' => 'MA', 'name' => 'Fès-Boulemane', 'active' => 1, 'slug' => 'fes-boulemane'],
            ['id' => 783336, 'country_code' => 'MA', 'name' => 'Gharb-Chrarda-Beni Hssen', 'active' => 1, 'slug' => 'gharb-chrarda-beni-hssen'],
            ['id' => 783337, 'country_code' => 'MA', 'name' => 'Guelmim-Es Semara', 'active' => 1, 'slug' => 'guelmim-es-semara'],
            ['id' => 783338, 'country_code' => 'MA', 'name' => 'Marrakech-Tensift-Al Haouz', 'active' => 1, 'slug' => 'marrakech-tensift-al-haouz'],
            ['id' => 783339, 'country_code' => 'MA', 'name' => 'Meknès-Tafilalet', 'active' => 1, 'slug' => 'meknes-tafilalet'],
            ['id' => 783340, 'country_code' => 'MA', 'name' => 'l\'Oriental', 'active' => 1, 'slug' => 'loriental'],
            ['id' => 783341, 'country_code' => 'MA', 'name' => 'Rabat-Salé-Zemmour-Zaër', 'active' => 1, 'slug' => 'rabat-sale-zemmour-zaer'],
            ['id' => 783342, 'country_code' => 'MA', 'name' => 'Souss-Massa-Draâ', 'active' => 1, 'slug' => 'souss-massa-draa'],
            ['id' => 783343, 'country_code' => 'MA', 'name' => 'Tadla-Azilal', 'active' => 1, 'slug' => 'tadla-azilal'],
            ['id' => 783344, 'country_code' => 'MA', 'name' => 'Tanger-Tétouan', 'active' => 1, 'slug' => 'tanger-tetouan'],
            ['id' => 783345, 'country_code' => 'MA', 'name' => 'Taza-Al Hoceïma-Taounate', 'active' => 1, 'slug' => 'taza-al-hoceima-taounate'],
            ['id' => 783346, 'country_code' => 'MA', 'name' => 'Laayoune-Boujdour-Sakia-Hamra', 'active' => 1, 'slug' => 'laayoune-boujdour-sakia-hamra'],
            ['id' => 783347, 'country_code' => 'MA', 'name' => 'Oued-Eddahab-Lagouira', 'active' => 1, 'slug' => 'oued-eddahab-lagouira']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
