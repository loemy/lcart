<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class BahamasStatesSeeder extends Seeder
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
            ['id' => 740645, 'country_code' => 'BS', 'name' => 'Acklins And Crooked Islands', 'active' => 1, 'slug' => 'acklins-and-crooked-islands'],
            ['id' => 740646, 'country_code' => 'BS', 'name' => 'Bimini', 'active' => 1, 'slug' => 'bimini'],
            ['id' => 740647, 'country_code' => 'BS', 'name' => 'Cat Island', 'active' => 1, 'slug' => 'cat-island'],
            ['id' => 740648, 'country_code' => 'BS', 'name' => 'Exuma', 'active' => 1, 'slug' => 'exuma'],
            ['id' => 740649, 'country_code' => 'BS', 'name' => 'Freeport', 'active' => 1, 'slug' => 'freeport'],
            ['id' => 740650, 'country_code' => 'BS', 'name' => 'Fresh Creek', 'active' => 1, 'slug' => 'fresh-creek'],
            ['id' => 740651, 'country_code' => 'BS', 'name' => 'Governor\'s Harbour', 'active' => 1, 'slug' => 'governors-harbour'],
            ['id' => 740652, 'country_code' => 'BS', 'name' => 'Green Turtle Cay', 'active' => 1, 'slug' => 'green-turtle-cay'],
            ['id' => 740653, 'country_code' => 'BS', 'name' => 'Harbour Island', 'active' => 1, 'slug' => 'harbour-island'],
            ['id' => 740654, 'country_code' => 'BS', 'name' => 'High Rock', 'active' => 1, 'slug' => 'high-rock'],
            ['id' => 740655, 'country_code' => 'BS', 'name' => 'Inagua', 'active' => 1, 'slug' => 'inagua'],
            ['id' => 740656, 'country_code' => 'BS', 'name' => 'Kemps Bay', 'active' => 1, 'slug' => 'kemps-bay'],
            ['id' => 740657, 'country_code' => 'BS', 'name' => 'Long Island', 'active' => 1, 'slug' => 'long-island'],
            ['id' => 740658, 'country_code' => 'BS', 'name' => 'Marsh Harbour', 'active' => 1, 'slug' => 'marsh-harbour'],
            ['id' => 740659, 'country_code' => 'BS', 'name' => 'Mayaguana', 'active' => 1, 'slug' => 'mayaguana'],
            ['id' => 740660, 'country_code' => 'BS', 'name' => 'New Providence', 'active' => 1, 'slug' => 'new-providence'],
            ['id' => 740662, 'country_code' => 'BS', 'name' => 'Nichollstown And Berry Islands', 'active' => 1, 'slug' => 'nichollstown-and-berry-islands'],
            ['id' => 740663, 'country_code' => 'BS', 'name' => 'Ragged Island', 'active' => 1, 'slug' => 'ragged-island'],
            ['id' => 740664, 'country_code' => 'BS', 'name' => 'Rock Sound', 'active' => 1, 'slug' => 'rock-sound'],
            ['id' => 740665, 'country_code' => 'BS', 'name' => 'Sandy Point', 'active' => 1, 'slug' => 'sandy-point'],
            ['id' => 740666, 'country_code' => 'BS', 'name' => 'San Salvador And Rum Cay', 'active' => 1, 'slug' => 'san-salvador-and-rum-cay']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
