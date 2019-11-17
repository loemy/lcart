<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ChileStatesSeeder extends Seeder
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
            ['id' => 783071, 'country_code' => 'CL', 'name' => 'Parinacota', 'active' => 1, 'slug' => 'parinacota'],
            ['id' => 783072, 'country_code' => 'CL', 'name' => 'Arica', 'active' => 1, 'slug' => 'arica'],
            ['id' => 783073, 'country_code' => 'CL', 'name' => 'Tamarugal', 'active' => 1, 'slug' => 'tamarugal'],
            ['id' => 783074, 'country_code' => 'CL', 'name' => 'Iquique', 'active' => 1, 'slug' => 'iquique'],
            ['id' => 783075, 'country_code' => 'CL', 'name' => 'Antofagasta', 'active' => 1, 'slug' => 'antofagasta'],
            ['id' => 783076, 'country_code' => 'CL', 'name' => 'Chañaral', 'active' => 1, 'slug' => 'chanaral'],
            ['id' => 783077, 'country_code' => 'CL', 'name' => 'Copiapó', 'active' => 1, 'slug' => 'copiapo'],
            ['id' => 783078, 'country_code' => 'CL', 'name' => 'Huasco', 'active' => 1, 'slug' => 'huasco'],
            ['id' => 783079, 'country_code' => 'CL', 'name' => 'Elqui', 'active' => 1, 'slug' => 'elqui'],
            ['id' => 783080, 'country_code' => 'CL', 'name' => 'Limarí', 'active' => 1, 'slug' => 'limari'],
            ['id' => 783081, 'country_code' => 'CL', 'name' => 'Choapa', 'active' => 1, 'slug' => 'choapa'],
            ['id' => 783082, 'country_code' => 'CL', 'name' => 'Petorca', 'active' => 1, 'slug' => 'petorca'],
            ['id' => 783083, 'country_code' => 'CL', 'name' => 'Los Andes', 'active' => 1, 'slug' => 'los-andes'],
            ['id' => 783084, 'country_code' => 'CL', 'name' => 'San Felipe de Aconcagua', 'active' => 1, 'slug' => 'san-felipe-de-aconcagua'],
            ['id' => 783085, 'country_code' => 'CL', 'name' => 'Quillota', 'active' => 1, 'slug' => 'quillota'],
            ['id' => 783086, 'country_code' => 'CL', 'name' => 'Valparaíso', 'active' => 1, 'slug' => 'valparaiso'],
            ['id' => 783087, 'country_code' => 'CL', 'name' => 'Marga Marga', 'active' => 1, 'slug' => 'marga-marga'],
            ['id' => 783088, 'country_code' => 'CL', 'name' => 'San Antonio', 'active' => 1, 'slug' => 'san-antonio'],
            ['id' => 783089, 'country_code' => 'CL', 'name' => 'Isla de Pascua', 'active' => 1, 'slug' => 'isla-de-pascua'],
            ['id' => 783090, 'country_code' => 'CL', 'name' => 'Cachapoal', 'active' => 1, 'slug' => 'cachapoal'],
            ['id' => 783091, 'country_code' => 'CL', 'name' => 'Curicó', 'active' => 1, 'slug' => 'curico'],
            ['id' => 783092, 'country_code' => 'CL', 'name' => 'Talca', 'active' => 1, 'slug' => 'talca'],
            ['id' => 783093, 'country_code' => 'CL', 'name' => 'Linares', 'active' => 1, 'slug' => 'linares'],
            ['id' => 783094, 'country_code' => 'CL', 'name' => 'Cauquenes', 'active' => 1, 'slug' => 'cauquenes'],
            ['id' => 783095, 'country_code' => 'CL', 'name' => 'Ñuble', 'active' => 1, 'slug' => 'nuble'],
            ['id' => 783096, 'country_code' => 'CL', 'name' => 'Biobío', 'active' => 1, 'slug' => 'biobio'],
            ['id' => 783097, 'country_code' => 'CL', 'name' => 'Concepción', 'active' => 1, 'slug' => 'concepcion'],
            ['id' => 783098, 'country_code' => 'CL', 'name' => 'Arauco', 'active' => 1, 'slug' => 'arauco'],
            ['id' => 783099, 'country_code' => 'CL', 'name' => 'Malleco', 'active' => 1, 'slug' => 'malleco'],
            ['id' => 783100, 'country_code' => 'CL', 'name' => 'Cautín', 'active' => 1, 'slug' => 'cautin'],
            ['id' => 783101, 'country_code' => 'CL', 'name' => 'Valdivia', 'active' => 1, 'slug' => 'valdivia'],
            ['id' => 783102, 'country_code' => 'CL', 'name' => 'Ranco', 'active' => 1, 'slug' => 'ranco'],
            ['id' => 783103, 'country_code' => 'CL', 'name' => 'Osorno', 'active' => 1, 'slug' => 'osorno'],
            ['id' => 783104, 'country_code' => 'CL', 'name' => 'Puerto Montt', 'active' => 1, 'slug' => 'puerto-montt'],
            ['id' => 783105, 'country_code' => 'CL', 'name' => 'Chiloé', 'active' => 1, 'slug' => 'chiloe'],
            ['id' => 783106, 'country_code' => 'CL', 'name' => 'Palena', 'active' => 1, 'slug' => 'palena'],
            ['id' => 783107, 'country_code' => 'CL', 'name' => 'Coyhaique', 'active' => 1, 'slug' => 'coyhaique'],
            ['id' => 783108, 'country_code' => 'CL', 'name' => 'Aysén', 'active' => 1, 'slug' => 'aysen'],
            ['id' => 783109, 'country_code' => 'CL', 'name' => 'General Carrera', 'active' => 1, 'slug' => 'general-carrera'],
            ['id' => 783110, 'country_code' => 'CL', 'name' => 'Capitán Prat', 'active' => 1, 'slug' => 'capitan-prat'],
            ['id' => 783111, 'country_code' => 'CL', 'name' => 'Última Esperanza', 'active' => 1, 'slug' => 'ultima-esperanza'],
            ['id' => 783112, 'country_code' => 'CL', 'name' => 'Magallanes', 'active' => 1, 'slug' => 'magallanes'],
            ['id' => 783113, 'country_code' => 'CL', 'name' => 'Tierra del Fuego', 'active' => 1, 'slug' => 'tierra-del-fuego'],
            ['id' => 783114, 'country_code' => 'CL', 'name' => 'Antártica Chilena', 'active' => 1, 'slug' => 'antartica-chilena'],
            ['id' => 783115, 'country_code' => 'CL', 'name' => 'Chacabuco', 'active' => 1, 'slug' => 'chacabuco'],
            ['id' => 783116, 'country_code' => 'CL', 'name' => 'Cordillera', 'active' => 1, 'slug' => 'cordillera'],
            ['id' => 783117, 'country_code' => 'CL', 'name' => 'Maipo', 'active' => 1, 'slug' => 'maipo'],
            ['id' => 783118, 'country_code' => 'CL', 'name' => 'Talagante', 'active' => 1, 'slug' => 'talagante'],
            ['id' => 783119, 'country_code' => 'CL', 'name' => 'Melipilla', 'active' => 1, 'slug' => 'melipilla'],
            ['id' => 783120, 'country_code' => 'CL', 'name' => 'Santiago', 'active' => 1, 'slug' => 'santiago']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
