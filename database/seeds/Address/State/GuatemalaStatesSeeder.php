<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class GuatemalaStatesSeeder extends Seeder
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
            ['id' => 707158, 'country_code' => 'GT', 'name' => 'Jalapa', 'active' => 1, 'slug' => 'jalapa'],
            ['id' => 707159, 'country_code' => 'GT', 'name' => 'Jutiapa', 'active' => 1, 'slug' => 'jutiapa'],
            ['id' => 707160, 'country_code' => 'GT', 'name' => 'Quetzaltenango', 'active' => 1, 'slug' => 'quetzaltenango'],
            ['id' => 707161, 'country_code' => 'GT', 'name' => 'Retalhuleu', 'active' => 1, 'slug' => 'retalhuleu'],
            ['id' => 707162, 'country_code' => 'GT', 'name' => 'Sacatepéquez', 'active' => 1, 'slug' => 'sacatepequez'],
            ['id' => 707165, 'country_code' => 'GT', 'name' => 'Sololá', 'active' => 1, 'slug' => 'solola'],
            ['id' => 707166, 'country_code' => 'GT', 'name' => 'Suchitepéquez', 'active' => 1, 'slug' => 'suchitepequez'],
            ['id' => 707167, 'country_code' => 'GT', 'name' => 'Totonicapán', 'active' => 1, 'slug' => 'totonicapan'],
            ['id' => 707168, 'country_code' => 'GT', 'name' => 'Zacapa', 'active' => 1, 'slug' => 'zacapa'],
            ['id' => 707169, 'country_code' => 'GT', 'name' => 'Alta Verapaz', 'active' => 1, 'slug' => 'alta-verapaz'],
            ['id' => 707170, 'country_code' => 'GT', 'name' => 'Baja Verapaz', 'active' => 1, 'slug' => 'baja-verapaz'],
            ['id' => 707171, 'country_code' => 'GT', 'name' => 'Chimaltenango', 'active' => 1, 'slug' => 'chimaltenango'],
            ['id' => 707172, 'country_code' => 'GT', 'name' => 'Chiquimula', 'active' => 1, 'slug' => 'chiquimula'],
            ['id' => 707173, 'country_code' => 'GT', 'name' => 'Petén', 'active' => 1, 'slug' => 'peten'],
            ['id' => 707174, 'country_code' => 'GT', 'name' => 'El Progreso', 'active' => 1, 'slug' => 'el-progreso'],
            ['id' => 707175, 'country_code' => 'GT', 'name' => 'Quiché', 'active' => 1, 'slug' => 'quiche'],
            ['id' => 707176, 'country_code' => 'GT', 'name' => 'Escuintla', 'active' => 1, 'slug' => 'escuintla'],
            ['id' => 707178, 'country_code' => 'GT', 'name' => 'Huehuetenango', 'active' => 1, 'slug' => 'huehuetenango'],
            ['id' => 707179, 'country_code' => 'GT', 'name' => 'Izabal', 'active' => 1, 'slug' => 'izabal'],
            ['id' => 712100, 'country_code' => 'GT', 'name' => 'Guatemala', 'active' => 1, 'slug' => 'guatemala'],
            ['id' => 712101, 'country_code' => 'GT', 'name' => 'San Marcos', 'active' => 1, 'slug' => 'san-marcos'],
            ['id' => 712102, 'country_code' => 'GT', 'name' => 'Santa Rosa', 'active' => 1, 'slug' => 'santa-rosa']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
