<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class EcuadorStatesSeeder extends Seeder
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
            ['id' => 781820, 'country_code' => 'EC', 'name' => 'Azuay', 'active' => 1, 'slug' => 'azuay'],
            ['id' => 781821, 'country_code' => 'EC', 'name' => 'Bolivar', 'active' => 1, 'slug' => 'bolivar'],
            ['id' => 781822, 'country_code' => 'EC', 'name' => 'Cañar', 'active' => 1, 'slug' => 'canar'],
            ['id' => 781823, 'country_code' => 'EC', 'name' => 'Carchi', 'active' => 1, 'slug' => 'carchi'],
            ['id' => 781824, 'country_code' => 'EC', 'name' => 'Chimborazo', 'active' => 1, 'slug' => 'chimborazo'],
            ['id' => 781825, 'country_code' => 'EC', 'name' => 'Cotopaxi', 'active' => 1, 'slug' => 'cotopaxi'],
            ['id' => 781826, 'country_code' => 'EC', 'name' => 'Esmeraldas', 'active' => 1, 'slug' => 'esmeraldas'],
            ['id' => 781827, 'country_code' => 'EC', 'name' => 'Galapagos', 'active' => 1, 'slug' => 'galapagos'],
            ['id' => 781828, 'country_code' => 'EC', 'name' => 'Guayas', 'active' => 1, 'slug' => 'guayas'],
            ['id' => 781829, 'country_code' => 'EC', 'name' => 'Imbabura', 'active' => 1, 'slug' => 'imbabura'],
            ['id' => 781830, 'country_code' => 'EC', 'name' => 'Loja', 'active' => 1, 'slug' => 'loja'],
            ['id' => 781831, 'country_code' => 'EC', 'name' => 'Manabi', 'active' => 1, 'slug' => 'manabi'],
            ['id' => 781832, 'country_code' => 'EC', 'name' => 'Napo', 'active' => 1, 'slug' => 'napo'],
            ['id' => 781833, 'country_code' => 'EC', 'name' => 'Orellana', 'active' => 1, 'slug' => 'orellana'],
            ['id' => 781834, 'country_code' => 'EC', 'name' => 'Pastaza', 'active' => 1, 'slug' => 'pastaza'],
            ['id' => 781835, 'country_code' => 'EC', 'name' => 'Pichincha', 'active' => 1, 'slug' => 'pichincha'],
            ['id' => 781836, 'country_code' => 'EC', 'name' => 'Sucumbios', 'active' => 1, 'slug' => 'sucumbios'],
            ['id' => 781837, 'country_code' => 'EC', 'name' => 'Tungurahua', 'active' => 1, 'slug' => 'tungurahua']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
