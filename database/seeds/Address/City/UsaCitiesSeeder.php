<?php

use App\Models\Address\City;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class UsaCitiesSeeder extends Seeder
{

    use TruncateTable, DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('cities');
        $city=[

        ];

        City::create($city);
        $this->enableForeignKeys();
    }
}
