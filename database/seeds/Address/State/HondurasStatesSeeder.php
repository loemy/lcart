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
            ['id' => 707180, 'country_code' => 'HN', 'name' => 'Intibucá', 'active' => 1, 'slug' => 'intibuca'],
            ['id' => 707181, 'country_code' => 'HN', 'name' => 'Islas de la Bahía', 'active' => 1, 'slug' => 'islas-de-la-bahia'],
            ['id' => 707183, 'country_code' => 'HN', 'name' => 'Lempira', 'active' => 1, 'slug' => 'lempira'],
            ['id' => 707184, 'country_code' => 'HN', 'name' => 'Ocotepeque', 'active' => 1, 'slug' => 'ocotepeque'],
            ['id' => 707185, 'country_code' => 'HN', 'name' => 'Olancho', 'active' => 1, 'slug' => 'olancho'],
            ['id' => 707186, 'country_code' => 'HN', 'name' => 'Santa Bárbara', 'active' => 1, 'slug' => 'santa-barbara'],
            ['id' => 707187, 'country_code' => 'HN', 'name' => 'Valle', 'active' => 1, 'slug' => 'valle'],
            ['id' => 707188, 'country_code' => 'HN', 'name' => 'Yoro', 'active' => 1, 'slug' => 'yoro'],
            ['id' => 707189, 'country_code' => 'HN', 'name' => 'Atlántida', 'active' => 1, 'slug' => 'atlantida'],
            ['id' => 707190, 'country_code' => 'HN', 'name' => 'Choluteca', 'active' => 1, 'slug' => 'choluteca'],
            ['id' => 707192, 'country_code' => 'HN', 'name' => 'Comayagua', 'active' => 1, 'slug' => 'comayagua'],
            ['id' => 707193, 'country_code' => 'HN', 'name' => 'Copán', 'active' => 1, 'slug' => 'copan'],
            ['id' => 707195, 'country_code' => 'HN', 'name' => 'El Paraíso', 'active' => 1, 'slug' => 'el-paraiso'],
            ['id' => 707196, 'country_code' => 'HN', 'name' => 'Francisco Morazán', 'active' => 1, 'slug' => 'francisco-morazan'],
            ['id' => 707197, 'country_code' => 'HN', 'name' => 'Gracias a Dios', 'active' => 1, 'slug' => 'gracias-a-dios'],
            ['id' => 717201, 'country_code' => 'HN', 'name' => 'Colón', 'active' => 1, 'slug' => 'colon'],
            ['id' => 717263, 'country_code' => 'HN', 'name' => 'Cortés', 'active' => 1, 'slug' => 'cortes'],
            ['id' => 717355, 'country_code' => 'HN', 'name' => 'La Paz', 'active' => 1, 'slug' => 'la-paz']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
