<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class MexicoStatesSeeder extends Seeder
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
            ['id' => 782187, 'country_code' => 'MX', 'name' => 'Aguascalientes', 'active' => 1, 'slug' => 'aguascalientes'],
            ['id' => 782188, 'country_code' => 'MX', 'name' => 'Baja California', 'active' => 1, 'slug' => 'baja-california'],
            ['id' => 782189, 'country_code' => 'MX', 'name' => 'Baja California Sur', 'active' => 1, 'slug' => 'baja-california-sur'],
            ['id' => 782190, 'country_code' => 'MX', 'name' => 'Campeche', 'active' => 1, 'slug' => 'campeche'],
            ['id' => 782191, 'country_code' => 'MX', 'name' => 'Chiapas', 'active' => 1, 'slug' => 'chiapas'],
            ['id' => 782192, 'country_code' => 'MX', 'name' => 'Chihuahua', 'active' => 1, 'slug' => 'chihuahua'],
            ['id' => 782193, 'country_code' => 'MX', 'name' => 'Coahuila de Zaragoza', 'active' => 1, 'slug' => 'coahuila-de-zaragoza'],
            ['id' => 782194, 'country_code' => 'MX', 'name' => 'Colima', 'active' => 1, 'slug' => 'colima'],
            ['id' => 782195, 'country_code' => 'MX', 'name' => 'Distrito Federal', 'active' => 1, 'slug' => 'distrito-federal'],
            ['id' => 782196, 'country_code' => 'MX', 'name' => 'Durango', 'active' => 1, 'slug' => 'durango'],
            ['id' => 782197, 'country_code' => 'MX', 'name' => 'Guanajuato', 'active' => 1, 'slug' => 'guanajuato'],
            ['id' => 782198, 'country_code' => 'MX', 'name' => 'Guerrero', 'active' => 1, 'slug' => 'guerrero'],
            ['id' => 782199, 'country_code' => 'MX', 'name' => 'Hidalgo', 'active' => 1, 'slug' => 'hidalgo'],
            ['id' => 782200, 'country_code' => 'MX', 'name' => 'Jalisco', 'active' => 1, 'slug' => 'jalisco'],
            ['id' => 782201, 'country_code' => 'MX', 'name' => 'México', 'active' => 1, 'slug' => 'mexico'],
            ['id' => 782202, 'country_code' => 'MX', 'name' => 'Michoacán de Ocampo', 'active' => 1, 'slug' => 'michoacan-de-ocampo'],
            ['id' => 782203, 'country_code' => 'MX', 'name' => 'Morelos', 'active' => 1, 'slug' => 'morelos'],
            ['id' => 782204, 'country_code' => 'MX', 'name' => 'Nayarit', 'active' => 1, 'slug' => 'nayarit'],
            ['id' => 782205, 'country_code' => 'MX', 'name' => 'Nuevo León', 'active' => 1, 'slug' => 'nuevo-leon'],
            ['id' => 782206, 'country_code' => 'MX', 'name' => 'Oaxaca', 'active' => 1, 'slug' => 'oaxaca'],
            ['id' => 782207, 'country_code' => 'MX', 'name' => 'Puebla', 'active' => 1, 'slug' => 'puebla'],
            ['id' => 782208, 'country_code' => 'MX', 'name' => 'Querétaro de Arteaga', 'active' => 1, 'slug' => 'queretaro-de-arteaga'],
            ['id' => 782209, 'country_code' => 'MX', 'name' => 'Quintana Roo', 'active' => 1, 'slug' => 'quintana-roo'],
            ['id' => 782210, 'country_code' => 'MX', 'name' => 'San Luis Potosí', 'active' => 1, 'slug' => 'san-luis-potosi'],
            ['id' => 782211, 'country_code' => 'MX', 'name' => 'Sinaloa', 'active' => 1, 'slug' => 'sinaloa'],
            ['id' => 782212, 'country_code' => 'MX', 'name' => 'Sonora', 'active' => 1, 'slug' => 'sonora'],
            ['id' => 782213, 'country_code' => 'MX', 'name' => 'Tabasco', 'active' => 1, 'slug' => 'tabasco'],
            ['id' => 782214, 'country_code' => 'MX', 'name' => 'Tamaulipas', 'active' => 1, 'slug' => 'tamaulipas'],
            ['id' => 782215, 'country_code' => 'MX', 'name' => 'Tlaxcala', 'active' => 1, 'slug' => 'tlaxcala'],
            ['id' => 782216, 'country_code' => 'MX', 'name' => 'Veracruz-Llave', 'active' => 1, 'slug' => 'veracruz-llave'],
            ['id' => 782217, 'country_code' => 'MX', 'name' => 'Yucatán', 'active' => 1, 'slug' => 'yucatan'],
            ['id' => 782218, 'country_code' => 'MX', 'name' => 'Zacatecas', 'active' => 1, 'slug' => 'zacatecas']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
