<?php

use App\Models\Address\State;
use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class IvoryCoastCitiesSeeder extends Seeder
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
            ['id' => 512841, 'region_id' => 783348, 'country_code' => 'CI', 'name' => 'Koro', 'active' => 1, 'slug' => 'koro'],
            ['id' => 512842, 'region_id' => 783348, 'country_code' => 'CI', 'name' => 'Touba', 'active' => 1, 'slug' => 'touba'],
            ['id' => 512843, 'region_id' => 783349, 'country_code' => 'CI', 'name' => 'Guéyo', 'active' => 1, 'slug' => 'gueyo'],
            ['id' => 512844, 'region_id' => 783349, 'country_code' => 'CI', 'name' => 'San-Pédro', 'active' => 1, 'slug' => 'san-pedro'],
            ['id' => 512845, 'region_id' => 783349, 'country_code' => 'CI', 'name' => 'Sassandra', 'active' => 1, 'slug' => 'sassandra'],
            ['id' => 512846, 'region_id' => 783349, 'country_code' => 'CI', 'name' => 'Soubré', 'active' => 1, 'slug' => 'soubre'],
            ['id' => 512847, 'region_id' => 783349, 'country_code' => 'CI', 'name' => 'Tabou', 'active' => 1, 'slug' => 'tabou'],
            ['id' => 512848, 'region_id' => 783350, 'country_code' => 'CI', 'name' => 'Madinani', 'active' => 1, 'slug' => 'madinani'],
            ['id' => 512849, 'region_id' => 783350, 'country_code' => 'CI', 'name' => 'Minignan', 'active' => 1, 'slug' => 'minignan'],
            ['id' => 512850, 'region_id' => 783350, 'country_code' => 'CI', 'name' => 'Odienné', 'active' => 1, 'slug' => 'odienne'],
            ['id' => 512851, 'region_id' => 783350, 'country_code' => 'CI', 'name' => 'Samatiguila', 'active' => 1, 'slug' => 'samatiguila'],
            ['id' => 512852, 'region_id' => 783351, 'country_code' => 'CI', 'name' => 'Gagnoa', 'active' => 1, 'slug' => 'gagnoa'],
            ['id' => 512853, 'region_id' => 783351, 'country_code' => 'CI', 'name' => 'Oumé', 'active' => 1, 'slug' => 'oume'],
            ['id' => 512854, 'region_id' => 783352, 'country_code' => 'CI', 'name' => 'Daloa', 'active' => 1, 'slug' => 'daloa'],
            ['id' => 512855, 'region_id' => 783352, 'country_code' => 'CI', 'name' => 'Issia', 'active' => 1, 'slug' => 'issia'],
            ['id' => 512856, 'region_id' => 783352, 'country_code' => 'CI', 'name' => 'Vavoua', 'active' => 1, 'slug' => 'vavoua'],
            ['id' => 512857, 'region_id' => 783352, 'country_code' => 'CI', 'name' => 'Zoukougbeu', 'active' => 1, 'slug' => 'zoukougbeu'],
            ['id' => 512858, 'region_id' => 783353, 'country_code' => 'CI', 'name' => 'Didiévi', 'active' => 1, 'slug' => 'didievi'],
            ['id' => 512859, 'region_id' => 783353, 'country_code' => 'CI', 'name' => 'Tiébissou', 'active' => 1, 'slug' => 'tiebissou'],
            ['id' => 512860, 'region_id' => 783353, 'country_code' => 'CI', 'name' => 'Toumodi', 'active' => 1, 'slug' => 'toumodi'],
            ['id' => 512861, 'region_id' => 783353, 'country_code' => 'CI', 'name' => 'Yamoussoukro', 'active' => 1, 'slug' => 'yamoussoukro'],
            ['id' => 512862, 'region_id' => 783354, 'country_code' => 'CI', 'name' => 'Abidjan', 'active' => 1, 'slug' => 'abidjan'],
            ['id' => 512863, 'region_id' => 783354, 'country_code' => 'CI', 'name' => 'Alépé', 'active' => 1, 'slug' => 'alepe'],
            ['id' => 512864, 'region_id' => 783354, 'country_code' => 'CI', 'name' => 'Dabou', 'active' => 1, 'slug' => 'dabou'],
            ['id' => 512865, 'region_id' => 783354, 'country_code' => 'CI', 'name' => 'Grand-Lahou', 'active' => 1, 'slug' => 'grand-lahou'],
            ['id' => 512866, 'region_id' => 783354, 'country_code' => 'CI', 'name' => 'Jacqueville', 'active' => 1, 'slug' => 'jacqueville'],
            ['id' => 512867, 'region_id' => 783354, 'country_code' => 'CI', 'name' => 'Sikensi', 'active' => 1, 'slug' => 'sikensi'],
            ['id' => 512868, 'region_id' => 783354, 'country_code' => 'CI', 'name' => 'Tiassalé', 'active' => 1, 'slug' => 'tiassale'],
            ['id' => 512869, 'region_id' => 783355, 'country_code' => 'CI', 'name' => 'Bouaflé', 'active' => 1, 'slug' => 'bouafle'],
            ['id' => 512870, 'region_id' => 783355, 'country_code' => 'CI', 'name' => 'Kounahiri', 'active' => 1, 'slug' => 'kounahiri'],
            ['id' => 512871, 'region_id' => 783355, 'country_code' => 'CI', 'name' => 'Sinfra', 'active' => 1, 'slug' => 'sinfra'],
            ['id' => 512872, 'region_id' => 783355, 'country_code' => 'CI', 'name' => 'Zuénoula', 'active' => 1, 'slug' => 'zuenoula'],
            ['id' => 512873, 'region_id' => 783356, 'country_code' => 'CI', 'name' => 'Bangolo', 'active' => 1, 'slug' => 'bangolo'],
            ['id' => 512874, 'region_id' => 783356, 'country_code' => 'CI', 'name' => 'Biankouma', 'active' => 1, 'slug' => 'biankouma'],
            ['id' => 512875, 'region_id' => 783356, 'country_code' => 'CI', 'name' => 'Danané', 'active' => 1, 'slug' => 'danane'],
            ['id' => 512876, 'region_id' => 783356, 'country_code' => 'CI', 'name' => 'Kouibly', 'active' => 1, 'slug' => 'kouibly'],
            ['id' => 512877, 'region_id' => 783356, 'country_code' => 'CI', 'name' => 'Man', 'active' => 1, 'slug' => 'man'],
            ['id' => 512878, 'region_id' => 783356, 'country_code' => 'CI', 'name' => 'Zouan-Hounien', 'active' => 1, 'slug' => 'zouan-hounien'],
            ['id' => 512879, 'region_id' => 783357, 'country_code' => 'CI', 'name' => 'Bloléquin', 'active' => 1, 'slug' => 'blolequin'],
            ['id' => 512880, 'region_id' => 783357, 'country_code' => 'CI', 'name' => 'Duékoué', 'active' => 1, 'slug' => 'duekoue'],
            ['id' => 512881, 'region_id' => 783357, 'country_code' => 'CI', 'name' => 'Guiglo', 'active' => 1, 'slug' => 'guiglo'],
            ['id' => 512882, 'region_id' => 783357, 'country_code' => 'CI', 'name' => 'Toulepleu', 'active' => 1, 'slug' => 'toulepleu'],
            ['id' => 512883, 'region_id' => 783358, 'country_code' => 'CI', 'name' => 'Abengourou', 'active' => 1, 'slug' => 'abengourou'],
            ['id' => 512884, 'region_id' => 783358, 'country_code' => 'CI', 'name' => 'Agnibilékrou', 'active' => 1, 'slug' => 'agnibilekrou'],
            ['id' => 512885, 'region_id' => 783358, 'country_code' => 'CI', 'name' => 'Bettié', 'active' => 1, 'slug' => 'bettie'],
            ['id' => 512886, 'region_id' => 783359, 'country_code' => 'CI', 'name' => 'Bocanda', 'active' => 1, 'slug' => 'bocanda'],
            ['id' => 512887, 'region_id' => 783359, 'country_code' => 'CI', 'name' => 'Bongouanou', 'active' => 1, 'slug' => 'bongouanou'],
            ['id' => 512888, 'region_id' => 783359, 'country_code' => 'CI', 'name' => 'Daoukro', 'active' => 1, 'slug' => 'daoukro'],
            ['id' => 512889, 'region_id' => 783359, 'country_code' => 'CI', 'name' => 'Dimbokro', 'active' => 1, 'slug' => 'dimbokro'],
            ['id' => 512890, 'region_id' => 783359, 'country_code' => 'CI', 'name' => 'M\'Bahiakro', 'active' => 1, 'slug' => 'mbahiakro'],
            ['id' => 512891, 'region_id' => 783359, 'country_code' => 'CI', 'name' => 'Prikro', 'active' => 1, 'slug' => 'prikro'],
            ['id' => 512892, 'region_id' => 783360, 'country_code' => 'CI', 'name' => 'Boundiali', 'active' => 1, 'slug' => 'boundiali'],
            ['id' => 512893, 'region_id' => 783360, 'country_code' => 'CI', 'name' => 'Ferkessédougou', 'active' => 1, 'slug' => 'ferkessedougou'],
            ['id' => 512894, 'region_id' => 783360, 'country_code' => 'CI', 'name' => 'Korhogo', 'active' => 1, 'slug' => 'korhogo'],
            ['id' => 512895, 'region_id' => 783360, 'country_code' => 'CI', 'name' => 'Kouto', 'active' => 1, 'slug' => 'kouto'],
            ['id' => 512896, 'region_id' => 783360, 'country_code' => 'CI', 'name' => 'Ouangolodougou', 'active' => 1, 'slug' => 'ouangolodougou'],
            ['id' => 512897, 'region_id' => 783360, 'country_code' => 'CI', 'name' => 'Sinématiali', 'active' => 1, 'slug' => 'sinematiali'],
            ['id' => 512898, 'region_id' => 783360, 'country_code' => 'CI', 'name' => 'Tengréla', 'active' => 1, 'slug' => 'tengrela'],
            ['id' => 512899, 'region_id' => 783361, 'country_code' => 'CI', 'name' => 'Divo', 'active' => 1, 'slug' => 'divo'],
            ['id' => 512900, 'region_id' => 783361, 'country_code' => 'CI', 'name' => 'Lakota', 'active' => 1, 'slug' => 'lakota'],
            ['id' => 512901, 'region_id' => 783362, 'country_code' => 'CI', 'name' => 'Aboisso', 'active' => 1, 'slug' => 'aboisso'],
            ['id' => 512902, 'region_id' => 783362, 'country_code' => 'CI', 'name' => 'Adiaké', 'active' => 1, 'slug' => 'adiake'],
            ['id' => 512903, 'region_id' => 783362, 'country_code' => 'CI', 'name' => 'Grand-Bassam', 'active' => 1, 'slug' => 'grand-bassam'],
            ['id' => 512904, 'region_id' => 783362, 'country_code' => 'CI', 'name' => 'Tiapoum', 'active' => 1, 'slug' => 'tiapoum'],
            ['id' => 512905, 'region_id' => 783363, 'country_code' => 'CI', 'name' => 'Béoumi', 'active' => 1, 'slug' => 'beoumi'],
            ['id' => 512906, 'region_id' => 783363, 'country_code' => 'CI', 'name' => 'Botro', 'active' => 1, 'slug' => 'botro'],
            ['id' => 512907, 'region_id' => 783363, 'country_code' => 'CI', 'name' => 'Bouaké', 'active' => 1, 'slug' => 'bouake'],
            ['id' => 512908, 'region_id' => 783363, 'country_code' => 'CI', 'name' => 'Dabakala', 'active' => 1, 'slug' => 'dabakala'],
            ['id' => 512909, 'region_id' => 783363, 'country_code' => 'CI', 'name' => 'Katiola', 'active' => 1, 'slug' => 'katiola'],
            ['id' => 512910, 'region_id' => 783363, 'country_code' => 'CI', 'name' => 'Sakassou', 'active' => 1, 'slug' => 'sakassou'],
            ['id' => 512911, 'region_id' => 783364, 'country_code' => 'CI', 'name' => 'Mankono', 'active' => 1, 'slug' => 'mankono'],
            ['id' => 512912, 'region_id' => 783364, 'country_code' => 'CI', 'name' => 'Séguéla', 'active' => 1, 'slug' => 'seguela'],
            ['id' => 512913, 'region_id' => 783365, 'country_code' => 'CI', 'name' => 'Bondoukou', 'active' => 1, 'slug' => 'bondoukou'],
            ['id' => 512914, 'region_id' => 783365, 'country_code' => 'CI', 'name' => 'Bouna', 'active' => 1, 'slug' => 'bouna'],
            ['id' => 512915, 'region_id' => 783365, 'country_code' => 'CI', 'name' => 'Koun-Fao', 'active' => 1, 'slug' => 'koun-fao'],
            ['id' => 512916, 'region_id' => 783365, 'country_code' => 'CI', 'name' => 'Nassian', 'active' => 1, 'slug' => 'nassian'],
            ['id' => 512917, 'region_id' => 783365, 'country_code' => 'CI', 'name' => 'Tanda', 'active' => 1, 'slug' => 'tanda']

        ];

        City::create($city);
        $this->enableForeignKeys();

    }
}
