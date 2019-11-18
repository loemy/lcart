<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class RomaniaStatesSeeder extends Seeder
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
            ['id' => 782708, 'country_code' => 'RO', 'name' => 'Alba', 'active' => 1, 'slug' => 'alba'],
            ['id' => 782709, 'country_code' => 'RO', 'name' => 'Arad', 'active' => 1, 'slug' => 'arad'],
            ['id' => 782710, 'country_code' => 'RO', 'name' => 'Arges', 'active' => 1, 'slug' => 'arges'],
            ['id' => 782711, 'country_code' => 'RO', 'name' => 'Bacau', 'active' => 1, 'slug' => 'bacau'],
            ['id' => 782712, 'country_code' => 'RO', 'name' => 'Bihor', 'active' => 1, 'slug' => 'bihor'],
            ['id' => 782713, 'country_code' => 'RO', 'name' => 'Bistrita-Nasaud', 'active' => 1, 'slug' => 'bistrita-nasaud'],
            ['id' => 782714, 'country_code' => 'RO', 'name' => 'Botosani', 'active' => 1, 'slug' => 'botosani'],
            ['id' => 782715, 'country_code' => 'RO', 'name' => 'Braila', 'active' => 1, 'slug' => 'braila'],
            ['id' => 782716, 'country_code' => 'RO', 'name' => 'Brasov', 'active' => 1, 'slug' => 'brasov'],
            ['id' => 782717, 'country_code' => 'RO', 'name' => 'Bucuresti', 'active' => 1, 'slug' => 'bucuresti'],
            ['id' => 782718, 'country_code' => 'RO', 'name' => 'Buzau', 'active' => 1, 'slug' => 'buzau'],
            ['id' => 782719, 'country_code' => 'RO', 'name' => 'Calarasi', 'active' => 1, 'slug' => 'calarasi'],
            ['id' => 782720, 'country_code' => 'RO', 'name' => 'Caras-Severin', 'active' => 1, 'slug' => 'caras-severin'],
            ['id' => 782721, 'country_code' => 'RO', 'name' => 'Cluj', 'active' => 1, 'slug' => 'cluj'],
            ['id' => 782722, 'country_code' => 'RO', 'name' => 'Constanta', 'active' => 1, 'slug' => 'constanta'],
            ['id' => 782723, 'country_code' => 'RO', 'name' => 'Covasna', 'active' => 1, 'slug' => 'covasna'],
            ['id' => 782724, 'country_code' => 'RO', 'name' => 'Dambovita', 'active' => 1, 'slug' => 'dambovita'],
            ['id' => 782725, 'country_code' => 'RO', 'name' => 'Dolj', 'active' => 1, 'slug' => 'dolj'],
            ['id' => 782726, 'country_code' => 'RO', 'name' => 'Galati', 'active' => 1, 'slug' => 'galati'],
            ['id' => 782727, 'country_code' => 'RO', 'name' => 'Giurgiu', 'active' => 1, 'slug' => 'giurgiu'],
            ['id' => 782728, 'country_code' => 'RO', 'name' => 'Gorj', 'active' => 1, 'slug' => 'gorj'],
            ['id' => 782729, 'country_code' => 'RO', 'name' => 'Harghita', 'active' => 1, 'slug' => 'harghita'],
            ['id' => 782730, 'country_code' => 'RO', 'name' => 'Hunedoara', 'active' => 1, 'slug' => 'hunedoara'],
            ['id' => 782731, 'country_code' => 'RO', 'name' => 'Ialomita', 'active' => 1, 'slug' => 'ialomita'],
            ['id' => 782732, 'country_code' => 'RO', 'name' => 'Iasi', 'active' => 1, 'slug' => 'iasi'],
            ['id' => 782733, 'country_code' => 'RO', 'name' => 'Ilfov', 'active' => 1, 'slug' => 'ilfov'],
            ['id' => 782734, 'country_code' => 'RO', 'name' => 'Maramures', 'active' => 1, 'slug' => 'maramures'],
            ['id' => 782735, 'country_code' => 'RO', 'name' => 'Mehedinti', 'active' => 1, 'slug' => 'mehedinti'],
            ['id' => 782736, 'country_code' => 'RO', 'name' => 'Mures', 'active' => 1, 'slug' => 'mures'],
            ['id' => 782737, 'country_code' => 'RO', 'name' => 'Neamt', 'active' => 1, 'slug' => 'neamt'],
            ['id' => 782738, 'country_code' => 'RO', 'name' => 'Olt', 'active' => 1, 'slug' => 'olt'],
            ['id' => 782739, 'country_code' => 'RO', 'name' => 'Prahova', 'active' => 1, 'slug' => 'prahova'],
            ['id' => 782740, 'country_code' => 'RO', 'name' => 'Salaj', 'active' => 1, 'slug' => 'salaj'],
            ['id' => 782741, 'country_code' => 'RO', 'name' => 'Satu-Mare', 'active' => 1, 'slug' => 'satu-mare'],
            ['id' => 782742, 'country_code' => 'RO', 'name' => 'Sibiu', 'active' => 1, 'slug' => 'sibiu'],
            ['id' => 782743, 'country_code' => 'RO', 'name' => 'Suceava', 'active' => 1, 'slug' => 'suceava'],
            ['id' => 782744, 'country_code' => 'RO', 'name' => 'Teleorman', 'active' => 1, 'slug' => 'teleorman'],
            ['id' => 782745, 'country_code' => 'RO', 'name' => 'Timis', 'active' => 1, 'slug' => 'timis'],
            ['id' => 782746, 'country_code' => 'RO', 'name' => 'Tulcea', 'active' => 1, 'slug' => 'tulcea'],
            ['id' => 782747, 'country_code' => 'RO', 'name' => 'Valcea', 'active' => 1, 'slug' => 'valcea'],
            ['id' => 782748, 'country_code' => 'RO', 'name' => 'Vaslui', 'active' => 1, 'slug' => 'vaslui'],
            ['id' => 782749, 'country_code' => 'RO', 'name' => 'Vrancea', 'active' => 1, 'slug' => 'vrancea']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
