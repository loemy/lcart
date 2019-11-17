<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class DominicanStatesSeeder extends Seeder
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
            ['id' => 863, 'country_code' => 'DO', 'name' => 'Santo Domingo', 'active' => 1, 'slug' => 'santo-domingo'],
            ['id' => 709847, 'country_code' => 'DO', 'name' => 'Azua', 'active' => 1, 'slug' => 'azua'],
            ['id' => 709872, 'country_code' => 'DO', 'name' => 'Bahoruco', 'active' => 1, 'slug' => 'bahoruco'],
            ['id' => 709884, 'country_code' => 'DO', 'name' => 'Barahona', 'active' => 1, 'slug' => 'barahona'],
            ['id' => 709904, 'country_code' => 'DO', 'name' => 'Dajabón', 'active' => 1, 'slug' => 'dajabon'],
            ['id' => 709911, 'country_code' => 'DO', 'name' => 'Distrito Nacional', 'active' => 1, 'slug' => 'distrito-nacional'],
            ['id' => 709913, 'country_code' => 'DO', 'name' => 'Duarte', 'active' => 1, 'slug' => 'duarte'],
            ['id' => 709929, 'country_code' => 'DO', 'name' => 'Elías Piña', 'active' => 1, 'slug' => 'elias-pina'],
            ['id' => 709939, 'country_code' => 'DO', 'name' => 'El Seibo', 'active' => 1, 'slug' => 'el-seibo'],
            ['id' => 709944, 'country_code' => 'DO', 'name' => 'Espaillat', 'active' => 1, 'slug' => 'espaillat'],
            ['id' => 709960, 'country_code' => 'DO', 'name' => 'Hato Mayor', 'active' => 1, 'slug' => 'hato-mayor'],
            ['id' => 709968, 'country_code' => 'DO', 'name' => 'Independencia', 'active' => 1, 'slug' => 'independencia'],
            ['id' => 709978, 'country_code' => 'DO', 'name' => 'La Altagracia', 'active' => 1, 'slug' => 'la-altagracia'],
            ['id' => 709987, 'country_code' => 'DO', 'name' => 'La Romana', 'active' => 1, 'slug' => 'la-romana'],
            ['id' => 709992, 'country_code' => 'DO', 'name' => 'La Vega', 'active' => 1, 'slug' => 'la-vega'],
            ['id' => 710004, 'country_code' => 'DO', 'name' => 'María Trinidad Sánchez', 'active' => 1, 'slug' => 'maria-trinidad-sanchez'],
            ['id' => 710015, 'country_code' => 'DO', 'name' => 'Monseñor Nouel', 'active' => 1, 'slug' => 'monsenor-nouel'],
            ['id' => 710024, 'country_code' => 'DO', 'name' => 'Monte Cristi', 'active' => 1, 'slug' => 'monte-cristi'],
            ['id' => 710036, 'country_code' => 'DO', 'name' => 'Monte Plata', 'active' => 1, 'slug' => 'monte-plata'],
            ['id' => 710049, 'country_code' => 'DO', 'name' => 'Peravia', 'active' => 1, 'slug' => 'peravia'],
            ['id' => 710065, 'country_code' => 'DO', 'name' => 'Pedernales', 'active' => 1, 'slug' => 'pedernales'],
            ['id' => 710069, 'country_code' => 'DO', 'name' => 'Puerto Plata', 'active' => 1, 'slug' => 'puerto-plata'],
            ['id' => 710087, 'country_code' => 'DO', 'name' => 'Salcedo', 'active' => 1, 'slug' => 'salcedo'],
            ['id' => 710090, 'country_code' => 'DO', 'name' => 'Samaná', 'active' => 1, 'slug' => 'samana'],
            ['id' => 710097, 'country_code' => 'DO', 'name' => 'San Cristóbal', 'active' => 1, 'slug' => 'san-cristobal'],
            ['id' => 710111, 'country_code' => 'DO', 'name' => 'San José de Ocoa', 'active' => 1, 'slug' => 'san-jose-de-ocoa'],
            ['id' => 710118, 'country_code' => 'DO', 'name' => 'San Juan', 'active' => 1, 'slug' => 'san-juan'],
            ['id' => 710131, 'country_code' => 'DO', 'name' => 'San Pedro de Macorís', 'active' => 1, 'slug' => 'san-pedro-de-macoris'],
            ['id' => 710141, 'country_code' => 'DO', 'name' => 'Sánchez Ramírez', 'active' => 1, 'slug' => 'sanchez-ramirez'],
            ['id' => 710150, 'country_code' => 'DO', 'name' => 'Santiago', 'active' => 1, 'slug' => 'santiago'],
            ['id' => 710171, 'country_code' => 'DO', 'name' => 'Santiago Rodríguez', 'active' => 1, 'slug' => 'santiago-rodriguez'],
            ['id' => 710188, 'country_code' => 'DO', 'name' => 'Valverde', 'active' => 1, 'slug' => 'valverde']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
