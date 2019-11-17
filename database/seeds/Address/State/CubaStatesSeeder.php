<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class CubaStatesSeeder extends Seeder
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
            ['id' => 864, 'country_code' => 'CU', 'name' => 'La Habana', 'active' => 1, 'slug' => 'la-habana'],
            ['id' => 738105, 'country_code' => 'CU', 'name' => 'Isla de la Juventud', 'active' => 1, 'slug' => 'isla-de-la-juventud'],
            ['id' => 738107, 'country_code' => 'CU', 'name' => 'Pinar del Río', 'active' => 1, 'slug' => 'pinar-del-rio'],
            ['id' => 738141, 'country_code' => 'CU', 'name' => 'Ciudad de la Habana', 'active' => 1, 'slug' => 'ciudad-de-la-habana'],
            ['id' => 738157, 'country_code' => 'CU', 'name' => 'Matanzas', 'active' => 1, 'slug' => 'matanzas'],
            ['id' => 738172, 'country_code' => 'CU', 'name' => 'Cienfuegos', 'active' => 1, 'slug' => 'cienfuegos'],
            ['id' => 738181, 'country_code' => 'CU', 'name' => 'Villa Clara', 'active' => 1, 'slug' => 'villa-clara'],
            ['id' => 738195, 'country_code' => 'CU', 'name' => 'Sancti Spíritus', 'active' => 1, 'slug' => 'sancti-spiritus'],
            ['id' => 738204, 'country_code' => 'CU', 'name' => 'Ciego deÁvila', 'active' => 1, 'slug' => 'ciego-deavila'],
            ['id' => 738215, 'country_code' => 'CU', 'name' => 'Camagüey', 'active' => 1, 'slug' => 'camaguey'],
            ['id' => 738229, 'country_code' => 'CU', 'name' => 'Las Tunas', 'active' => 1, 'slug' => 'las-tunas'],
            ['id' => 738238, 'country_code' => 'CU', 'name' => 'Granma', 'active' => 1, 'slug' => 'granma'],
            ['id' => 738252, 'country_code' => 'CU', 'name' => 'Holguín', 'active' => 1, 'slug' => 'holguin'],
            ['id' => 738267, 'country_code' => 'CU', 'name' => 'Santiago de Cuba', 'active' => 1, 'slug' => 'santiago-de-cuba'],
            ['id' => 738277, 'country_code' => 'CU', 'name' => 'Guantánamo', 'active' => 1, 'slug' => 'guantanamo']



        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
