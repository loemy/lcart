<?php

use App\Models\Address\State;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
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
        $this->truncate('states');
        $state=[

        ];

        State::create($state);
        $this->enableForeignKeys();
    }
}
