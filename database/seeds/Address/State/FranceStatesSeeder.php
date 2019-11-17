<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class FranceStatesSeeder extends Seeder
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
            ['id' => 781888, 'country_code' => 'FR', 'name' => 'Ain', 'active' => 1, 'slug' => 'ain'],
            ['id' => 781889, 'country_code' => 'FR', 'name' => 'Aisne', 'active' => 1, 'slug' => 'aisne'],
            ['id' => 781890, 'country_code' => 'FR', 'name' => 'Allier', 'active' => 1, 'slug' => 'allier'],
            ['id' => 781891, 'country_code' => 'FR', 'name' => 'Alpes-de-Haute-Provence', 'active' => 1, 'slug' => 'alpes-de-haute-provence'],
            ['id' => 781892, 'country_code' => 'FR', 'name' => 'Alpes-Maritimes', 'active' => 1, 'slug' => 'alpes-maritimes'],
            ['id' => 781893, 'country_code' => 'FR', 'name' => 'Ardèche', 'active' => 1, 'slug' => 'ardeche'],
            ['id' => 781894, 'country_code' => 'FR', 'name' => 'Ardennes', 'active' => 1, 'slug' => 'ardennes'],
            ['id' => 781895, 'country_code' => 'FR', 'name' => 'Ariège', 'active' => 1, 'slug' => 'ariege'],
            ['id' => 781896, 'country_code' => 'FR', 'name' => 'Aube', 'active' => 1, 'slug' => 'aube'],
            ['id' => 781897, 'country_code' => 'FR', 'name' => 'Aude', 'active' => 1, 'slug' => 'aude'],
            ['id' => 781898, 'country_code' => 'FR', 'name' => 'Aveyron', 'active' => 1, 'slug' => 'aveyron'],
            ['id' => 781899, 'country_code' => 'FR', 'name' => 'Bas-Rhin', 'active' => 1, 'slug' => 'bas-rhin'],
            ['id' => 781900, 'country_code' => 'FR', 'name' => 'Bouches-du-Rhône', 'active' => 1, 'slug' => 'bouches-du-rhone'],
            ['id' => 781901, 'country_code' => 'FR', 'name' => 'Calvados', 'active' => 1, 'slug' => 'calvados'],
            ['id' => 781902, 'country_code' => 'FR', 'name' => 'Cantal', 'active' => 1, 'slug' => 'cantal'],
            ['id' => 781903, 'country_code' => 'FR', 'name' => 'Charente', 'active' => 1, 'slug' => 'charente'],
            ['id' => 781904, 'country_code' => 'FR', 'name' => 'Charente-Maritime', 'active' => 1, 'slug' => 'charente-maritime'],
            ['id' => 781905, 'country_code' => 'FR', 'name' => 'Cher', 'active' => 1, 'slug' => 'cher'],
            ['id' => 781906, 'country_code' => 'FR', 'name' => 'Corrèze', 'active' => 1, 'slug' => 'correze'],
            ['id' => 781907, 'country_code' => 'FR', 'name' => 'Corse', 'active' => 1, 'slug' => 'corse'],
            ['id' => 781910, 'country_code' => 'FR', 'name' => 'Creuse', 'active' => 1, 'slug' => 'creuse'],
            ['id' => 781911, 'country_code' => 'FR', 'name' => 'Deux-Sèvres', 'active' => 1, 'slug' => 'deux-sevres'],
            ['id' => 781912, 'country_code' => 'FR', 'name' => 'Dordogne', 'active' => 1, 'slug' => 'dordogne'],
            ['id' => 781913, 'country_code' => 'FR', 'name' => 'Doubs', 'active' => 1, 'slug' => 'doubs'],
            ['id' => 781914, 'country_code' => 'FR', 'name' => 'Drôme', 'active' => 1, 'slug' => 'drome'],
            ['id' => 781915, 'country_code' => 'FR', 'name' => 'Essonne', 'active' => 1, 'slug' => 'essonne'],
            ['id' => 781916, 'country_code' => 'FR', 'name' => 'Eure', 'active' => 1, 'slug' => 'eure'],
            ['id' => 781917, 'country_code' => 'FR', 'name' => 'Eure-et-Loir', 'active' => 1, 'slug' => 'eure-et-loir'],
            ['id' => 781918, 'country_code' => 'FR', 'name' => 'Finistère', 'active' => 1, 'slug' => 'finistere'],
            ['id' => 781919, 'country_code' => 'FR', 'name' => 'Gard', 'active' => 1, 'slug' => 'gard'],
            ['id' => 781920, 'country_code' => 'FR', 'name' => 'Gers', 'active' => 1, 'slug' => 'gers'],
            ['id' => 781921, 'country_code' => 'FR', 'name' => 'Gironde', 'active' => 1, 'slug' => 'gironde'],
            ['id' => 781922, 'country_code' => 'FR', 'name' => 'Haut-Rhin', 'active' => 1, 'slug' => 'haut-rhin'],
            ['id' => 781923, 'country_code' => 'FR', 'name' => 'Haute-Garonne', 'active' => 1, 'slug' => 'haute-garonne'],
            ['id' => 781924, 'country_code' => 'FR', 'name' => 'Haute-Loire', 'active' => 1, 'slug' => 'haute-loire'],
            ['id' => 781925, 'country_code' => 'FR', 'name' => 'Haute-Marne', 'active' => 1, 'slug' => 'haute-marne'],
            ['id' => 781926, 'country_code' => 'FR', 'name' => 'Haute-Saône', 'active' => 1, 'slug' => 'haute-saone'],
            ['id' => 781927, 'country_code' => 'FR', 'name' => 'Haute-Savoie', 'active' => 1, 'slug' => 'haute-savoie'],
            ['id' => 781928, 'country_code' => 'FR', 'name' => 'Haute-Vienne', 'active' => 1, 'slug' => 'haute-vienne'],
            ['id' => 781929, 'country_code' => 'FR', 'name' => 'Hautes-Alpes', 'active' => 1, 'slug' => 'hautes-alpes'],
            ['id' => 781930, 'country_code' => 'FR', 'name' => 'Hautes-Pyrénées', 'active' => 1, 'slug' => 'hautes-pyrenees'],
            ['id' => 781931, 'country_code' => 'FR', 'name' => 'Hauts-de-Seine', 'active' => 1, 'slug' => 'hauts-de-seine'],
            ['id' => 781932, 'country_code' => 'FR', 'name' => 'Hérault', 'active' => 1, 'slug' => 'herault'],
            ['id' => 781933, 'country_code' => 'FR', 'name' => 'Ille-et-Vilaine', 'active' => 1, 'slug' => 'ille-et-vilaine'],
            ['id' => 781934, 'country_code' => 'FR', 'name' => 'Indre', 'active' => 1, 'slug' => 'indre'],
            ['id' => 781935, 'country_code' => 'FR', 'name' => 'Indre-et-Loire', 'active' => 1, 'slug' => 'indre-et-loire'],
            ['id' => 781936, 'country_code' => 'FR', 'name' => 'Isère', 'active' => 1, 'slug' => 'isere'],
            ['id' => 781937, 'country_code' => 'FR', 'name' => 'Jura', 'active' => 1, 'slug' => 'jura'],
            ['id' => 781938, 'country_code' => 'FR', 'name' => 'Landes', 'active' => 1, 'slug' => 'landes'],
            ['id' => 781939, 'country_code' => 'FR', 'name' => 'Loir-et-Cher', 'active' => 1, 'slug' => 'loir-et-cher'],
            ['id' => 781940, 'country_code' => 'FR', 'name' => 'Loire', 'active' => 1, 'slug' => 'loire'],
            ['id' => 781941, 'country_code' => 'FR', 'name' => 'Loire-Atlantique', 'active' => 1, 'slug' => 'loire-atlantique'],
            ['id' => 781942, 'country_code' => 'FR', 'name' => 'Loiret', 'active' => 1, 'slug' => 'loiret'],
            ['id' => 781943, 'country_code' => 'FR', 'name' => 'Lot', 'active' => 1, 'slug' => 'lot'],
            ['id' => 781944, 'country_code' => 'FR', 'name' => 'Lot-et-Garonne', 'active' => 1, 'slug' => 'lot-et-garonne'],
            ['id' => 781945, 'country_code' => 'FR', 'name' => 'Lozère', 'active' => 1, 'slug' => 'lozere'],
            ['id' => 781946, 'country_code' => 'FR', 'name' => 'Maine-et-Loire', 'active' => 1, 'slug' => 'maine-et-loire'],
            ['id' => 781947, 'country_code' => 'FR', 'name' => 'Manche', 'active' => 1, 'slug' => 'manche'],
            ['id' => 781948, 'country_code' => 'FR', 'name' => 'Marne', 'active' => 1, 'slug' => 'marne'],
            ['id' => 781949, 'country_code' => 'FR', 'name' => 'Mayenne', 'active' => 1, 'slug' => 'mayenne'],
            ['id' => 781950, 'country_code' => 'FR', 'name' => 'Meurthe-et-Moselle', 'active' => 1, 'slug' => 'meurthe-et-moselle'],
            ['id' => 781951, 'country_code' => 'FR', 'name' => 'Meuse', 'active' => 1, 'slug' => 'meuse'],
            ['id' => 781952, 'country_code' => 'FR', 'name' => 'Morbihan', 'active' => 1, 'slug' => 'morbihan'],
            ['id' => 781953, 'country_code' => 'FR', 'name' => 'Moselle', 'active' => 1, 'slug' => 'moselle'],
            ['id' => 781954, 'country_code' => 'FR', 'name' => 'Nièvre', 'active' => 1, 'slug' => 'nievre'],
            ['id' => 781955, 'country_code' => 'FR', 'name' => 'Nord', 'active' => 1, 'slug' => 'nord'],
            ['id' => 781956, 'country_code' => 'FR', 'name' => 'Oise', 'active' => 1, 'slug' => 'oise'],
            ['id' => 781957, 'country_code' => 'FR', 'name' => 'Orne', 'active' => 1, 'slug' => 'orne'],
            ['id' => 781958, 'country_code' => 'FR', 'name' => 'Pas-de-Calais', 'active' => 1, 'slug' => 'pas-de-calais'],
            ['id' => 781959, 'country_code' => 'FR', 'name' => 'Puy-de-Dôme', 'active' => 1, 'slug' => 'puy-de-dome'],
            ['id' => 781960, 'country_code' => 'FR', 'name' => 'Pyrénées-Atlantiques', 'active' => 1, 'slug' => 'pyrenees-atlantiques'],
            ['id' => 781961, 'country_code' => 'FR', 'name' => 'Pyrénées-Orientales', 'active' => 1, 'slug' => 'pyrenees-orientales'],
            ['id' => 781962, 'country_code' => 'FR', 'name' => 'Rhône', 'active' => 1, 'slug' => 'rhone'],
            ['id' => 781963, 'country_code' => 'FR', 'name' => 'Saône-et-Loire', 'active' => 1, 'slug' => 'saone-et-loire'],
            ['id' => 781964, 'country_code' => 'FR', 'name' => 'Sarthe', 'active' => 1, 'slug' => 'sarthe'],
            ['id' => 781965, 'country_code' => 'FR', 'name' => 'Savoie', 'active' => 1, 'slug' => 'savoie'],
            ['id' => 781966, 'country_code' => 'FR', 'name' => 'Seine-et-Marne', 'active' => 1, 'slug' => 'seine-et-marne'],
            ['id' => 781967, 'country_code' => 'FR', 'name' => 'Seine-Maritime', 'active' => 1, 'slug' => 'seine-maritime'],
            ['id' => 781968, 'country_code' => 'FR', 'name' => 'Seine-Saint-Denis', 'active' => 1, 'slug' => 'seine-saint-denis'],
            ['id' => 781969, 'country_code' => 'FR', 'name' => 'Somme', 'active' => 1, 'slug' => 'somme'],
            ['id' => 781970, 'country_code' => 'FR', 'name' => 'Tarn', 'active' => 1, 'slug' => 'tarn'],
            ['id' => 781971, 'country_code' => 'FR', 'name' => 'Tarn-et-Garonne', 'active' => 1, 'slug' => 'tarn-et-garonne'],
            ['id' => 781972, 'country_code' => 'FR', 'name' => 'Territoire de Belfort', 'active' => 1, 'slug' => 'territoire-de-belfort'],
            ['id' => 781974, 'country_code' => 'FR', 'name' => 'Val-de-Marne', 'active' => 1, 'slug' => 'val-de-marne'],
            ['id' => 781975, 'country_code' => 'FR', 'name' => 'Var', 'active' => 1, 'slug' => 'var'],
            ['id' => 781976, 'country_code' => 'FR', 'name' => 'Vaucluse', 'active' => 1, 'slug' => 'vaucluse'],
            ['id' => 781977, 'country_code' => 'FR', 'name' => 'Vendée', 'active' => 1, 'slug' => 'vendee'],
            ['id' => 781978, 'country_code' => 'FR', 'name' => 'Vienne', 'active' => 1, 'slug' => 'vienne'],
            ['id' => 781979, 'country_code' => 'FR', 'name' => 'Ville-de-Paris', 'active' => 1, 'slug' => 'ville-de-paris'],
            ['id' => 781980, 'country_code' => 'FR', 'name' => 'Vosges', 'active' => 1, 'slug' => 'vosges'],
            ['id' => 781981, 'country_code' => 'FR', 'name' => 'Yonne', 'active' => 1, 'slug' => 'yonne'],
            ['id' => 781982, 'country_code' => 'FR', 'name' => 'Yvelines', 'active' => 1, 'slug' => 'yvelines']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
