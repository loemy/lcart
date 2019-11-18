<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class IrelandStatesSeeder extends Seeder
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
            ['id' => 782019, 'country_code' => 'IE', 'name' => 'Carlow', 'active' => 1, 'slug' => 'carlow'],
            ['id' => 782020, 'country_code' => 'IE', 'name' => 'Cavan', 'active' => 1, 'slug' => 'cavan'],
            ['id' => 782021, 'country_code' => 'IE', 'name' => 'Clare', 'active' => 1, 'slug' => 'clare'],
            ['id' => 782022, 'country_code' => 'IE', 'name' => 'Cork', 'active' => 1, 'slug' => 'cork'],
            ['id' => 782023, 'country_code' => 'IE', 'name' => 'Donegal', 'active' => 1, 'slug' => 'donegal'],
            ['id' => 782024, 'country_code' => 'IE', 'name' => 'Dublin', 'active' => 1, 'slug' => 'dublin'],
            ['id' => 782025, 'country_code' => 'IE', 'name' => 'Galway', 'active' => 1, 'slug' => 'galway'],
            ['id' => 782026, 'country_code' => 'IE', 'name' => 'Kerry', 'active' => 1, 'slug' => 'kerry'],
            ['id' => 782027, 'country_code' => 'IE', 'name' => 'Kildare', 'active' => 1, 'slug' => 'kildare'],
            ['id' => 782028, 'country_code' => 'IE', 'name' => 'Kilkenny', 'active' => 1, 'slug' => 'kilkenny'],
            ['id' => 782029, 'country_code' => 'IE', 'name' => 'Laois', 'active' => 1, 'slug' => 'laois'],
            ['id' => 782030, 'country_code' => 'IE', 'name' => 'Leitrim', 'active' => 1, 'slug' => 'leitrim'],
            ['id' => 782031, 'country_code' => 'IE', 'name' => 'Limerick', 'active' => 1, 'slug' => 'limerick'],
            ['id' => 782032, 'country_code' => 'IE', 'name' => 'Longford', 'active' => 1, 'slug' => 'longford'],
            ['id' => 782033, 'country_code' => 'IE', 'name' => 'Louth', 'active' => 1, 'slug' => 'louth'],
            ['id' => 782034, 'country_code' => 'IE', 'name' => 'Mayo', 'active' => 1, 'slug' => 'mayo'],
            ['id' => 782035, 'country_code' => 'IE', 'name' => 'Meath', 'active' => 1, 'slug' => 'meath'],
            ['id' => 782036, 'country_code' => 'IE', 'name' => 'Monaghan', 'active' => 1, 'slug' => 'monaghan'],
            ['id' => 782037, 'country_code' => 'IE', 'name' => 'Offaly', 'active' => 1, 'slug' => 'offaly'],
            ['id' => 782038, 'country_code' => 'IE', 'name' => 'Roscommon', 'active' => 1, 'slug' => 'roscommon'],
            ['id' => 782039, 'country_code' => 'IE', 'name' => 'Sligo', 'active' => 1, 'slug' => 'sligo'],
            ['id' => 782040, 'country_code' => 'IE', 'name' => 'Tipperary', 'active' => 1, 'slug' => 'tipperary'],
            ['id' => 782041, 'country_code' => 'IE', 'name' => 'Waterford', 'active' => 1, 'slug' => 'waterford'],
            ['id' => 782042, 'country_code' => 'IE', 'name' => 'Westmeath', 'active' => 1, 'slug' => 'westmeath'],
            ['id' => 782043, 'country_code' => 'IE', 'name' => 'Wexford', 'active' => 1, 'slug' => 'wexford'],
            ['id' => 782044, 'country_code' => 'IE', 'name' => 'Wicklow', 'active' => 1, 'slug' => 'wicklow']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
