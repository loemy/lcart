<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class FinlandStatesSeeder extends Seeder
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
            ['id' => 742851, 'country_code' => 'FI', 'name' => 'Åland', 'active' => 1, 'slug' => 'aland'],
            ['id' => 742868, 'country_code' => 'FI', 'name' => 'Finlandia Meridional', 'active' => 1, 'slug' => 'finlandia-meridional'],
            ['id' => 742875, 'country_code' => 'FI', 'name' => 'Finlandia Occidental', 'active' => 1, 'slug' => 'finlandia-occidental'],
            ['id' => 742883, 'country_code' => 'FI', 'name' => 'Finlandia Oriental', 'active' => 1, 'slug' => 'finlandia-oriental'],
            ['id' => 742887, 'country_code' => 'FI', 'name' => 'Laponia', 'active' => 1, 'slug' => 'laponia'],
            ['id' => 742892, 'country_code' => 'FI', 'name' => 'Oulu', 'active' => 1, 'slug' => 'oulu']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
