<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
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
            ['id' => 783348, 'country_code' => 'CI', 'name' => 'Bafing', 'active' => 1, 'slug' => 'bafing'],
            ['id' => 783349, 'country_code' => 'CI', 'name' => 'Bas-Sassandra', 'active' => 1, 'slug' => 'bas-sassandra'],
            ['id' => 783350, 'country_code' => 'CI', 'name' => 'Denguélé', 'active' => 1, 'slug' => 'denguele'],
            ['id' => 783351, 'country_code' => 'CI', 'name' => 'Fromager', 'active' => 1, 'slug' => 'fromager'],
            ['id' => 783352, 'country_code' => 'CI', 'name' => 'Haut-sassandra', 'active' => 1, 'slug' => 'haut-sassandra'],
            ['id' => 783353, 'country_code' => 'CI', 'name' => 'Lacs', 'active' => 1, 'slug' => 'lacs'],
            ['id' => 783354, 'country_code' => 'CI', 'name' => 'Lagunes', 'active' => 1, 'slug' => 'lagunes'],
            ['id' => 783355, 'country_code' => 'CI', 'name' => 'Marahoué', 'active' => 1, 'slug' => 'marahoue'],
            ['id' => 783356, 'country_code' => 'CI', 'name' => '18 Montagnes', 'active' => 1, 'slug' => '18-montagnes'],
            ['id' => 783357, 'country_code' => 'CI', 'name' => 'Moyen Cavally', 'active' => 1, 'slug' => 'moyen-cavally'],
            ['id' => 783358, 'country_code' => 'CI', 'name' => 'Moyen Comoé', 'active' => 1, 'slug' => 'moyen-comoe'],
            ['id' => 783359, 'country_code' => 'CI', 'name' => 'N\'Zi Comoé', 'active' => 1, 'slug' => 'nzi-comoe'],
            ['id' => 783360, 'country_code' => 'CI', 'name' => 'Savanes', 'active' => 1, 'slug' => 'savanes'],
            ['id' => 783361, 'country_code' => 'CI', 'name' => 'Sud Bandama', 'active' => 1, 'slug' => 'sud-bandama'],
            ['id' => 783362, 'country_code' => 'CI', 'name' => 'Sud Comoé', 'active' => 1, 'slug' => 'sud-comoe'],
            ['id' => 783363, 'country_code' => 'CI', 'name' => 'Vallée du Bandama', 'active' => 1, 'slug' => 'vallee-du-bandama'],
            ['id' => 783364, 'country_code' => 'CI', 'name' => 'Worodougou', 'active' => 1, 'slug' => 'worodougou'],
            ['id' => 783365, 'country_code' => 'CI', 'name' => 'Zanzan', 'active' => 1, 'slug' => 'zanzan']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
