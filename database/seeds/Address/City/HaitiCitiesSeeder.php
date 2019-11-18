<?php

use App\Models\Address\State;
use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class HaitiCitiesSeeder extends Seeder
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
            ['id' => 37867, 'region_id' => 743850, 'country_code' => 'HT', 'name' => 'Dessalines', 'active' => 1, 'slug' => 'dessalines'],
            ['id' => 37868, 'region_id' => 743850, 'country_code' => 'HT', 'name' => 'Gonaïves', 'active' => 1, 'slug' => 'gonaives'],
            ['id' => 37869, 'region_id' => 743850, 'country_code' => 'HT', 'name' => 'Gros-Morne', 'active' => 1, 'slug' => 'gros-morne'],
            ['id' => 37870, 'region_id' => 743850, 'country_code' => 'HT', 'name' => 'Marmelade', 'active' => 1, 'slug' => 'marmelade'],
            ['id' => 37871, 'region_id' => 743850, 'country_code' => 'HT', 'name' => 'Saint-Marc', 'active' => 1, 'slug' => 'saint-marc'],
            ['id' => 37872, 'region_id' => 743856, 'country_code' => 'HT', 'name' => 'Cerca la Source', 'active' => 1, 'slug' => 'cerca-la-source'],
            ['id' => 37873, 'region_id' => 743856, 'country_code' => 'HT', 'name' => 'Hiche', 'active' => 1, 'slug' => 'hiche'],
            ['id' => 37874, 'region_id' => 743856, 'country_code' => 'HT', 'name' => 'Lascahobas', 'active' => 1, 'slug' => 'lascahobas'],
            ['id' => 37875, 'region_id' => 743856, 'country_code' => 'HT', 'name' => 'Mirebalais', 'active' => 1, 'slug' => 'mirebalais'],
            ['id' => 37876, 'region_id' => 743861, 'country_code' => 'HT', 'name' => 'Anseà Veau', 'active' => 1, 'slug' => 'ansea-veau'],
            ['id' => 37877, 'region_id' => 743861, 'country_code' => 'HT', 'name' => 'Anse d\'Ainault', 'active' => 1, 'slug' => 'anse-dainault'],
            ['id' => 37878, 'region_id' => 743861, 'country_code' => 'HT', 'name' => 'Corail', 'active' => 1, 'slug' => 'corail'],
            ['id' => 37879, 'region_id' => 743861, 'country_code' => 'HT', 'name' => 'Jérémie', 'active' => 1, 'slug' => 'jeremie'],
            ['id' => 37880, 'region_id' => 743861, 'country_code' => 'HT', 'name' => 'Miragoâne', 'active' => 1, 'slug' => 'miragoane'],
            ['id' => 37881, 'region_id' => 743867, 'country_code' => 'HT', 'name' => 'Miragoâne', 'active' => 1, 'slug' => 'miragoane'],
            ['id' => 37882, 'region_id' => 743867, 'country_code' => 'HT', 'name' => 'Anse-à-Veau', 'active' => 1, 'slug' => 'anse-a-veau'],
            ['id' => 37883, 'region_id' => 743867, 'country_code' => 'HT', 'name' => 'Barradères', 'active' => 1, 'slug' => 'barraderes'],
            ['id' => 37884, 'region_id' => 743871, 'country_code' => 'HT', 'name' => 'Acul du Nord', 'active' => 1, 'slug' => 'acul-du-nord'],
            ['id' => 37885, 'region_id' => 743871, 'country_code' => 'HT', 'name' => 'Borgne', 'active' => 1, 'slug' => 'borgne'],
            ['id' => 37886, 'region_id' => 743871, 'country_code' => 'HT', 'name' => 'Cabo Haitiano', 'active' => 1, 'slug' => 'cabo-haitiano'],
            ['id' => 37887, 'region_id' => 743871, 'country_code' => 'HT', 'name' => 'Grande-Rivière', 'active' => 1, 'slug' => 'grande-riviere'],
            ['id' => 37888, 'region_id' => 743871, 'country_code' => 'HT', 'name' => 'Limbé', 'active' => 1, 'slug' => 'limbe'],
            ['id' => 37889, 'region_id' => 743871, 'country_code' => 'HT', 'name' => 'Plaisance', 'active' => 1, 'slug' => 'plaisance'],
            ['id' => 37890, 'region_id' => 743871, 'country_code' => 'HT', 'name' => 'San Rafael', 'active' => 1, 'slug' => 'san-rafael'],
            ['id' => 37891, 'region_id' => 743879, 'country_code' => 'HT', 'name' => 'Fort-Liberté', 'active' => 1, 'slug' => 'fort-liberte'],
            ['id' => 37892, 'region_id' => 743879, 'country_code' => 'HT', 'name' => 'Ouanaminthe', 'active' => 1, 'slug' => 'ouanaminthe'],
            ['id' => 37893, 'region_id' => 743879, 'country_code' => 'HT', 'name' => 'Au Trou', 'active' => 1, 'slug' => 'au-trou'],
            ['id' => 37894, 'region_id' => 743883, 'country_code' => 'HT', 'name' => 'Môle-Saint-Nicolas', 'active' => 1, 'slug' => 'mole-saint-nicolas'],
            ['id' => 37895, 'region_id' => 743883, 'country_code' => 'HT', 'name' => 'Port-de-Paix', 'active' => 1, 'slug' => 'port-de-paix'],
            ['id' => 37896, 'region_id' => 743883, 'country_code' => 'HT', 'name' => 'Saint-Louis-du-Nord', 'active' => 1, 'slug' => 'saint-louis-du-nord'],
            ['id' => 37897, 'region_id' => 743887, 'country_code' => 'HT', 'name' => 'L\'Arcahaie', 'active' => 1, 'slug' => 'larcahaie'],
            ['id' => 37898, 'region_id' => 743887, 'country_code' => 'HT', 'name' => 'Croix-des-Bouquets', 'active' => 1, 'slug' => 'croix-des-bouquets'],
            ['id' => 37899, 'region_id' => 743887, 'country_code' => 'HT', 'name' => 'La Gonâve', 'active' => 1, 'slug' => 'la-gonave'],
            ['id' => 37900, 'region_id' => 743887, 'country_code' => 'HT', 'name' => 'Léogane', 'active' => 1, 'slug' => 'leogane'],
            ['id' => 37901, 'region_id' => 743887, 'country_code' => 'HT', 'name' => 'Puerto Príncipe', 'active' => 1, 'slug' => 'puerto-principe'],
            ['id' => 37902, 'region_id' => 743893, 'country_code' => 'HT', 'name' => 'Bainet', 'active' => 1, 'slug' => 'bainet'],
            ['id' => 37903, 'region_id' => 743893, 'country_code' => 'HT', 'name' => 'Belle-Anse', 'active' => 1, 'slug' => 'belle-anse'],
            ['id' => 37904, 'region_id' => 743893, 'country_code' => 'HT', 'name' => 'Jacme', 'active' => 1, 'slug' => 'jacme'],
            ['id' => 37905, 'region_id' => 743897, 'country_code' => 'HT', 'name' => 'Aquin', 'active' => 1, 'slug' => 'aquin'],
            ['id' => 37906, 'region_id' => 743897, 'country_code' => 'HT', 'name' => 'Les Cayes', 'active' => 1, 'slug' => 'les-cayes'],
            ['id' => 37907, 'region_id' => 743897, 'country_code' => 'HT', 'name' => 'Les Charbonnières', 'active' => 1, 'slug' => 'les-charbonnieres'],
            ['id' => 37908, 'region_id' => 743897, 'country_code' => 'HT', 'name' => 'Les Côteaux', 'active' => 1, 'slug' => 'les-coteaux'],
            ['id' => 37909, 'region_id' => 743897, 'country_code' => 'HT', 'name' => 'Port-Salut', 'active' => 1, 'slug' => 'port-salut']

        ];

        City::create($city);
        $this->enableForeignKeys();

    }
}
