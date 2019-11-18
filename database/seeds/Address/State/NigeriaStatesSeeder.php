<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class NigeriaStatesSeeder extends Seeder
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
            ['id' => 783003, 'country_code' => 'NG', 'name' => 'Abuja', 'active' => 1, 'slug' => 'abuja'],
            ['id' => 783004, 'country_code' => 'NG', 'name' => 'Abia', 'active' => 1, 'slug' => 'abia'],
            ['id' => 783005, 'country_code' => 'NG', 'name' => 'Adamawa', 'active' => 1, 'slug' => 'adamawa'],
            ['id' => 783006, 'country_code' => 'NG', 'name' => 'Akwa Ibom', 'active' => 1, 'slug' => 'akwa-ibom'],
            ['id' => 783007, 'country_code' => 'NG', 'name' => 'Anambra', 'active' => 1, 'slug' => 'anambra'],
            ['id' => 783008, 'country_code' => 'NG', 'name' => 'Bauchi', 'active' => 1, 'slug' => 'bauchi'],
            ['id' => 783009, 'country_code' => 'NG', 'name' => 'Benue', 'active' => 1, 'slug' => 'benue'],
            ['id' => 783010, 'country_code' => 'NG', 'name' => 'Bayelsa', 'active' => 1, 'slug' => 'bayelsa'],
            ['id' => 783011, 'country_code' => 'NG', 'name' => 'Borno', 'active' => 1, 'slug' => 'borno'],
            ['id' => 783012, 'country_code' => 'NG', 'name' => 'Cross River', 'active' => 1, 'slug' => 'cross-river'],
            ['id' => 783013, 'country_code' => 'NG', 'name' => 'Delta', 'active' => 1, 'slug' => 'delta'],
            ['id' => 783014, 'country_code' => 'NG', 'name' => 'Ebonyi', 'active' => 1, 'slug' => 'ebonyi'],
            ['id' => 783015, 'country_code' => 'NG', 'name' => 'Edo', 'active' => 1, 'slug' => 'edo'],
            ['id' => 783016, 'country_code' => 'NG', 'name' => 'Ekiti', 'active' => 1, 'slug' => 'ekiti'],
            ['id' => 783017, 'country_code' => 'NG', 'name' => 'Enugu', 'active' => 1, 'slug' => 'enugu'],
            ['id' => 783018, 'country_code' => 'NG', 'name' => 'Lagos', 'active' => 1, 'slug' => 'lagos'],
            ['id' => 783019, 'country_code' => 'NG', 'name' => 'Imo', 'active' => 1, 'slug' => 'imo'],
            ['id' => 783020, 'country_code' => 'NG', 'name' => 'Gombe', 'active' => 1, 'slug' => 'gombe'],
            ['id' => 783021, 'country_code' => 'NG', 'name' => 'Jigawa', 'active' => 1, 'slug' => 'jigawa'],
            ['id' => 783022, 'country_code' => 'NG', 'name' => 'Kaduna', 'active' => 1, 'slug' => 'kaduna'],
            ['id' => 783023, 'country_code' => 'NG', 'name' => 'Kano', 'active' => 1, 'slug' => 'kano'],
            ['id' => 783024, 'country_code' => 'NG', 'name' => 'Kebbi', 'active' => 1, 'slug' => 'kebbi'],
            ['id' => 783025, 'country_code' => 'NG', 'name' => 'Katsina', 'active' => 1, 'slug' => 'katsina'],
            ['id' => 783026, 'country_code' => 'NG', 'name' => 'Kogi', 'active' => 1, 'slug' => 'kogi'],
            ['id' => 783027, 'country_code' => 'NG', 'name' => 'Kwara', 'active' => 1, 'slug' => 'kwara'],
            ['id' => 783028, 'country_code' => 'NG', 'name' => 'Nasarawa', 'active' => 1, 'slug' => 'nasarawa'],
            ['id' => 783029, 'country_code' => 'NG', 'name' => 'Niger', 'active' => 1, 'slug' => 'niger'],
            ['id' => 783030, 'country_code' => 'NG', 'name' => 'Ogun', 'active' => 1, 'slug' => 'ogun'],
            ['id' => 783031, 'country_code' => 'NG', 'name' => 'Ondo', 'active' => 1, 'slug' => 'ondo'],
            ['id' => 783032, 'country_code' => 'NG', 'name' => 'Osun', 'active' => 1, 'slug' => 'osun'],
            ['id' => 783033, 'country_code' => 'NG', 'name' => 'Oyo', 'active' => 1, 'slug' => 'oyo'],
            ['id' => 783034, 'country_code' => 'NG', 'name' => 'Plateau', 'active' => 1, 'slug' => 'plateau'],
            ['id' => 783035, 'country_code' => 'NG', 'name' => 'Rivers', 'active' => 1, 'slug' => 'rivers'],
            ['id' => 783036, 'country_code' => 'NG', 'name' => 'Sokoto', 'active' => 1, 'slug' => 'sokoto'],
            ['id' => 783037, 'country_code' => 'NG', 'name' => 'Taraba', 'active' => 1, 'slug' => 'taraba'],
            ['id' => 783038, 'country_code' => 'NG', 'name' => 'Yobe', 'active' => 1, 'slug' => 'yobe'],
            ['id' => 783039, 'country_code' => 'NG', 'name' => 'Zamfara', 'active' => 1, 'slug' => 'zamfara']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
