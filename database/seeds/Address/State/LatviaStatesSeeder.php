<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class LatviaStatesSeeder extends Seeder
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
            ['id' => 782750, 'country_code' => 'LV', 'name' => 'Rīga', 'active' => 1, 'slug' => 'riga'],
            ['id' => 782751, 'country_code' => 'LV', 'name' => 'Daugavpils', 'active' => 1, 'slug' => 'daugavpils'],
            ['id' => 782752, 'country_code' => 'LV', 'name' => 'Jelgava', 'active' => 1, 'slug' => 'jelgava'],
            ['id' => 782753, 'country_code' => 'LV', 'name' => 'Jēkabpils', 'active' => 1, 'slug' => 'jekabpils'],
            ['id' => 782754, 'country_code' => 'LV', 'name' => 'Jūrmala', 'active' => 1, 'slug' => 'jurmala'],
            ['id' => 782755, 'country_code' => 'LV', 'name' => 'Liepāja', 'active' => 1, 'slug' => 'liepaja'],
            ['id' => 782756, 'country_code' => 'LV', 'name' => 'Rēzekne', 'active' => 1, 'slug' => 'rezekne'],
            ['id' => 782757, 'country_code' => 'LV', 'name' => 'Valmiera', 'active' => 1, 'slug' => 'valmiera'],
            ['id' => 782758, 'country_code' => 'LV', 'name' => 'Ventspils', 'active' => 1, 'slug' => 'ventspils'],
            ['id' => 782759, 'country_code' => 'LV', 'name' => 'Aizkraukles novads', 'active' => 1, 'slug' => 'aizkraukles-novads'],
            ['id' => 782760, 'country_code' => 'LV', 'name' => 'Jaunjelgavas novads', 'active' => 1, 'slug' => 'jaunjelgavas-novads'],
            ['id' => 782761, 'country_code' => 'LV', 'name' => 'Pļaviņu novads', 'active' => 1, 'slug' => 'plavinu-novads'],
            ['id' => 782762, 'country_code' => 'LV', 'name' => 'Kokneses novads', 'active' => 1, 'slug' => 'kokneses-novads'],
            ['id' => 782763, 'country_code' => 'LV', 'name' => 'Neretas novads', 'active' => 1, 'slug' => 'neretas-novads'],
            ['id' => 782764, 'country_code' => 'LV', 'name' => 'Skrīveru novads', 'active' => 1, 'slug' => 'skriveru-novads'],
            ['id' => 782765, 'country_code' => 'LV', 'name' => 'Alūksnes novads', 'active' => 1, 'slug' => 'aluksnes-novads'],
            ['id' => 782766, 'country_code' => 'LV', 'name' => 'Apes novads', 'active' => 1, 'slug' => 'apes-novads'],
            ['id' => 782767, 'country_code' => 'LV', 'name' => 'Balvu novads', 'active' => 1, 'slug' => 'balvu-novads'],
            ['id' => 782768, 'country_code' => 'LV', 'name' => 'Viļakas novads', 'active' => 1, 'slug' => 'vilakas-novads'],
            ['id' => 782769, 'country_code' => 'LV', 'name' => 'Baltinavas novads', 'active' => 1, 'slug' => 'baltinavas-novads'],
            ['id' => 782770, 'country_code' => 'LV', 'name' => 'Rugāju novads', 'active' => 1, 'slug' => 'rugaju-novads'],
            ['id' => 782771, 'country_code' => 'LV', 'name' => 'Bauskas novads', 'active' => 1, 'slug' => 'bauskas-novads'],
            ['id' => 782772, 'country_code' => 'LV', 'name' => 'Iecavas novads', 'active' => 1, 'slug' => 'iecavas-novads'],
            ['id' => 782773, 'country_code' => 'LV', 'name' => 'Rundāles novads', 'active' => 1, 'slug' => 'rundales-novads'],
            ['id' => 782774, 'country_code' => 'LV', 'name' => 'Vecumnieku novads', 'active' => 1, 'slug' => 'vecumnieku-novads'],
            ['id' => 782775, 'country_code' => 'LV', 'name' => 'Cēsu novads', 'active' => 1, 'slug' => 'cesu-novads'],
            ['id' => 782776, 'country_code' => 'LV', 'name' => 'Līgatnes novads', 'active' => 1, 'slug' => 'ligatnes-novads'],
            ['id' => 782777, 'country_code' => 'LV', 'name' => 'Amatas novads', 'active' => 1, 'slug' => 'amatas-novads'],
            ['id' => 782778, 'country_code' => 'LV', 'name' => 'Jaunpiebalgas novads', 'active' => 1, 'slug' => 'jaunpiebalgas-novads'],
            ['id' => 782779, 'country_code' => 'LV', 'name' => 'Priekuļu novads', 'active' => 1, 'slug' => 'priekulu-novads'],
            ['id' => 782780, 'country_code' => 'LV', 'name' => 'Pārgaujas novads', 'active' => 1, 'slug' => 'pargaujas-novads'],
            ['id' => 782781, 'country_code' => 'LV', 'name' => 'Raunas novads', 'active' => 1, 'slug' => 'raunas-novads'],
            ['id' => 782782, 'country_code' => 'LV', 'name' => 'Vecpiebalgas novads', 'active' => 1, 'slug' => 'vecpiebalgas-novads'],
            ['id' => 782783, 'country_code' => 'LV', 'name' => 'Daugavpils novads', 'active' => 1, 'slug' => 'daugavpils-novads'],
            ['id' => 782784, 'country_code' => 'LV', 'name' => 'Ilūkstes novads', 'active' => 1, 'slug' => 'ilukstes-novads'],
            ['id' => 782785, 'country_code' => 'LV', 'name' => 'Dobeles novads', 'active' => 1, 'slug' => 'dobeles-novads'],
            ['id' => 782786, 'country_code' => 'LV', 'name' => 'Auces novads', 'active' => 1, 'slug' => 'auces-novads'],
            ['id' => 782787, 'country_code' => 'LV', 'name' => 'Tērvetes novads', 'active' => 1, 'slug' => 'tervetes-novads'],
            ['id' => 782788, 'country_code' => 'LV', 'name' => 'Gulbenes novads', 'active' => 1, 'slug' => 'gulbenes-novads'],
            ['id' => 782789, 'country_code' => 'LV', 'name' => 'Jelgavas novads', 'active' => 1, 'slug' => 'jelgavas-novads'],
            ['id' => 782790, 'country_code' => 'LV', 'name' => 'Ozolnieku novads', 'active' => 1, 'slug' => 'ozolnieku-novads'],
            ['id' => 782791, 'country_code' => 'LV', 'name' => 'Jēkabpils novads', 'active' => 1, 'slug' => 'jekabpils-novads'],
            ['id' => 782792, 'country_code' => 'LV', 'name' => 'Aknīstes novads', 'active' => 1, 'slug' => 'aknistes-novads'],
            ['id' => 782793, 'country_code' => 'LV', 'name' => 'Viesītes novads', 'active' => 1, 'slug' => 'viesites-novads'],
            ['id' => 782794, 'country_code' => 'LV', 'name' => 'Krustpils novads', 'active' => 1, 'slug' => 'krustpils-novads'],
            ['id' => 782795, 'country_code' => 'LV', 'name' => 'Salas novads', 'active' => 1, 'slug' => 'salas-novads'],
            ['id' => 782796, 'country_code' => 'LV', 'name' => 'Krāslavas novads', 'active' => 1, 'slug' => 'kraslavas-novads'],
            ['id' => 782797, 'country_code' => 'LV', 'name' => 'Dagdas novads', 'active' => 1, 'slug' => 'dagdas-novads'],
            ['id' => 782798, 'country_code' => 'LV', 'name' => 'Aglonas novads', 'active' => 1, 'slug' => 'aglonas-novads'],
            ['id' => 782799, 'country_code' => 'LV', 'name' => 'Kuldīgas novads', 'active' => 1, 'slug' => 'kuldigas-novads'],
            ['id' => 782800, 'country_code' => 'LV', 'name' => 'Skrundas novads', 'active' => 1, 'slug' => 'skrundas-novads'],
            ['id' => 782801, 'country_code' => 'LV', 'name' => 'Alsungas novads', 'active' => 1, 'slug' => 'alsungas-novads'],
            ['id' => 782802, 'country_code' => 'LV', 'name' => 'Aizputes novads', 'active' => 1, 'slug' => 'aizputes-novads'],
            ['id' => 782803, 'country_code' => 'LV', 'name' => 'Durbes novads', 'active' => 1, 'slug' => 'durbes-novads'],
            ['id' => 782804, 'country_code' => 'LV', 'name' => 'Grobiņas novads', 'active' => 1, 'slug' => 'grobinas-novads'],
            ['id' => 782805, 'country_code' => 'LV', 'name' => 'Pāvilostas novads', 'active' => 1, 'slug' => 'pavilostas-novads'],
            ['id' => 782806, 'country_code' => 'LV', 'name' => 'Priekules novads', 'active' => 1, 'slug' => 'priekules-novads'],
            ['id' => 782807, 'country_code' => 'LV', 'name' => 'Nīcas novads', 'active' => 1, 'slug' => 'nicas-novads'],
            ['id' => 782808, 'country_code' => 'LV', 'name' => 'Rucavas novads', 'active' => 1, 'slug' => 'rucavas-novads'],
            ['id' => 782809, 'country_code' => 'LV', 'name' => 'Vaiņodes novads', 'active' => 1, 'slug' => 'vainodes-novads'],
            ['id' => 782810, 'country_code' => 'LV', 'name' => 'Limbažu novads', 'active' => 1, 'slug' => 'limbazu-novads'],
            ['id' => 782811, 'country_code' => 'LV', 'name' => 'Alojas novads', 'active' => 1, 'slug' => 'alojas-novads'],
            ['id' => 782812, 'country_code' => 'LV', 'name' => 'Salacgrīvas novads', 'active' => 1, 'slug' => 'salacgrivas-novads'],
            ['id' => 782813, 'country_code' => 'LV', 'name' => 'Ludzas novads', 'active' => 1, 'slug' => 'ludzas-novads'],
            ['id' => 782814, 'country_code' => 'LV', 'name' => 'Kārsavas novads', 'active' => 1, 'slug' => 'karsavas-novads'],
            ['id' => 782815, 'country_code' => 'LV', 'name' => 'Zilupes novads', 'active' => 1, 'slug' => 'zilupes-novads'],
            ['id' => 782816, 'country_code' => 'LV', 'name' => 'Ciblas novads', 'active' => 1, 'slug' => 'ciblas-novads'],
            ['id' => 782817, 'country_code' => 'LV', 'name' => 'Madonas novads', 'active' => 1, 'slug' => 'madonas-novads'],
            ['id' => 782818, 'country_code' => 'LV', 'name' => 'Cesvaines novads', 'active' => 1, 'slug' => 'cesvaines-novads'],
            ['id' => 782819, 'country_code' => 'LV', 'name' => 'Lubānas novads', 'active' => 1, 'slug' => 'lubanas-novads'],
            ['id' => 782820, 'country_code' => 'LV', 'name' => 'Varakļānu novads', 'active' => 1, 'slug' => 'varaklanu-novads'],
            ['id' => 782821, 'country_code' => 'LV', 'name' => 'Ērgļu novads', 'active' => 1, 'slug' => 'erglu-novads'],
            ['id' => 782822, 'country_code' => 'LV', 'name' => 'Ogres novads', 'active' => 1, 'slug' => 'ogres-novads'],
            ['id' => 782823, 'country_code' => 'LV', 'name' => 'Ikšķiles novads', 'active' => 1, 'slug' => 'ikskiles-novads'],
            ['id' => 782824, 'country_code' => 'LV', 'name' => 'Ķeguma novads', 'active' => 1, 'slug' => 'keguma-novads'],
            ['id' => 782825, 'country_code' => 'LV', 'name' => 'Lielvārdes novads', 'active' => 1, 'slug' => 'lielvardes-novads'],
            ['id' => 782826, 'country_code' => 'LV', 'name' => 'Preiļu novads', 'active' => 1, 'slug' => 'preilu-novads'],
            ['id' => 782827, 'country_code' => 'LV', 'name' => 'Līvānu novads', 'active' => 1, 'slug' => 'livanu-novads'],
            ['id' => 782828, 'country_code' => 'LV', 'name' => 'Riebiņu novads', 'active' => 1, 'slug' => 'riebinu-novads'],
            ['id' => 782829, 'country_code' => 'LV', 'name' => 'Vārkavas novads', 'active' => 1, 'slug' => 'varkavas-novads'],
            ['id' => 782830, 'country_code' => 'LV', 'name' => 'Rēzeknes novads', 'active' => 1, 'slug' => 'rezeknes-novads'],
            ['id' => 782831, 'country_code' => 'LV', 'name' => 'Viļānu novads', 'active' => 1, 'slug' => 'vilanu-novads'],
            ['id' => 782832, 'country_code' => 'LV', 'name' => 'Baldones novads', 'active' => 1, 'slug' => 'baldones-novads'],
            ['id' => 782833, 'country_code' => 'LV', 'name' => 'Ķekavas novads', 'active' => 1, 'slug' => 'kekavas-novads'],
            ['id' => 782834, 'country_code' => 'LV', 'name' => 'Olaines novads', 'active' => 1, 'slug' => 'olaines-novads'],
            ['id' => 782835, 'country_code' => 'LV', 'name' => 'Salaspils novads', 'active' => 1, 'slug' => 'salaspils-novads'],
            ['id' => 782836, 'country_code' => 'LV', 'name' => 'Saulkrastu novads', 'active' => 1, 'slug' => 'saulkrastu-novads'],
            ['id' => 782837, 'country_code' => 'LV', 'name' => 'Siguldas novads', 'active' => 1, 'slug' => 'siguldas-novads'],
            ['id' => 782838, 'country_code' => 'LV', 'name' => 'Inčukalna novads', 'active' => 1, 'slug' => 'incukalna-novads'],
            ['id' => 782839, 'country_code' => 'LV', 'name' => 'Ādažu novads', 'active' => 1, 'slug' => 'adazu-novads'],
            ['id' => 782840, 'country_code' => 'LV', 'name' => 'Babītes novads', 'active' => 1, 'slug' => 'babites-novads'],
            ['id' => 782841, 'country_code' => 'LV', 'name' => 'Carnikavas novads', 'active' => 1, 'slug' => 'carnikavas-novads'],
            ['id' => 782842, 'country_code' => 'LV', 'name' => 'Garkalnes novads', 'active' => 1, 'slug' => 'garkalnes-novads'],
            ['id' => 782843, 'country_code' => 'LV', 'name' => 'Krimuldas novads', 'active' => 1, 'slug' => 'krimuldas-novads'],
            ['id' => 782844, 'country_code' => 'LV', 'name' => 'Mālpils novads', 'active' => 1, 'slug' => 'malpils-novads'],
            ['id' => 782845, 'country_code' => 'LV', 'name' => 'Mārupes novads', 'active' => 1, 'slug' => 'marupes-novads'],
            ['id' => 782846, 'country_code' => 'LV', 'name' => 'Ropažu novads', 'active' => 1, 'slug' => 'ropazu-novads'],
            ['id' => 782847, 'country_code' => 'LV', 'name' => 'Sējas novads', 'active' => 1, 'slug' => 'sejas-novads'],
            ['id' => 782848, 'country_code' => 'LV', 'name' => 'Stopiņu novads', 'active' => 1, 'slug' => 'stopinu-novads'],
            ['id' => 782849, 'country_code' => 'LV', 'name' => 'Saldus novads', 'active' => 1, 'slug' => 'saldus-novads'],
            ['id' => 782850, 'country_code' => 'LV', 'name' => 'Brocēnu novads', 'active' => 1, 'slug' => 'brocenu-novads'],
            ['id' => 782851, 'country_code' => 'LV', 'name' => 'Talsu novads', 'active' => 1, 'slug' => 'talsu-novads'],
            ['id' => 782852, 'country_code' => 'LV', 'name' => 'Dundagas novads', 'active' => 1, 'slug' => 'dundagas-novads'],
            ['id' => 782853, 'country_code' => 'LV', 'name' => 'Mērsraga novads', 'active' => 1, 'slug' => 'mersraga-novads'],
            ['id' => 782854, 'country_code' => 'LV', 'name' => 'Rojas novads', 'active' => 1, 'slug' => 'rojas-novads'],
            ['id' => 782855, 'country_code' => 'LV', 'name' => 'Tukuma novads', 'active' => 1, 'slug' => 'tukuma-novads'],
            ['id' => 782856, 'country_code' => 'LV', 'name' => 'Kandavas novads', 'active' => 1, 'slug' => 'kandavas-novads'],
            ['id' => 782857, 'country_code' => 'LV', 'name' => 'Engures novads', 'active' => 1, 'slug' => 'engures-novads'],
            ['id' => 782858, 'country_code' => 'LV', 'name' => 'Jaunpils novads', 'active' => 1, 'slug' => 'jaunpils-novads'],
            ['id' => 782859, 'country_code' => 'LV', 'name' => 'Valkas novads', 'active' => 1, 'slug' => 'valkas-novads'],
            ['id' => 782860, 'country_code' => 'LV', 'name' => 'Smiltenes novads', 'active' => 1, 'slug' => 'smiltenes-novads'],
            ['id' => 782861, 'country_code' => 'LV', 'name' => 'Strenču novads', 'active' => 1, 'slug' => 'strencu-novads'],
            ['id' => 782862, 'country_code' => 'LV', 'name' => 'Kocēnu novads', 'active' => 1, 'slug' => 'kocenu-novads'],
            ['id' => 782863, 'country_code' => 'LV', 'name' => 'Mazsalacas novads', 'active' => 1, 'slug' => 'mazsalacas-novads'],
            ['id' => 782864, 'country_code' => 'LV', 'name' => 'Rūjienas novads', 'active' => 1, 'slug' => 'rujienas-novads'],
            ['id' => 782865, 'country_code' => 'LV', 'name' => 'Beverīnas novads', 'active' => 1, 'slug' => 'beverinas-novads'],
            ['id' => 782866, 'country_code' => 'LV', 'name' => 'Burtnieku novads', 'active' => 1, 'slug' => 'burtnieku-novads'],
            ['id' => 782867, 'country_code' => 'LV', 'name' => 'Naukšēnu novads', 'active' => 1, 'slug' => 'nauksenu-novads'],
            ['id' => 782868, 'country_code' => 'LV', 'name' => 'Ventspils novads', 'active' => 1, 'slug' => 'ventspils-novads']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
