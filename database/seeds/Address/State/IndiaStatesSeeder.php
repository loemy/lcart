<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class IndiaStatesSeeder extends Seeder
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
            ['id' => 782045, 'country_code' => 'IN', 'name' => 'Andaman and Nicobar Islands', 'active' => 1, 'slug' => 'andaman-and-nicobar-islands'],
            ['id' => 782046, 'country_code' => 'IN', 'name' => 'Andhra Pradesh', 'active' => 1, 'slug' => 'andhra-pradesh'],
            ['id' => 782047, 'country_code' => 'IN', 'name' => 'Arunachal Pradesh', 'active' => 1, 'slug' => 'arunachal-pradesh'],
            ['id' => 782048, 'country_code' => 'IN', 'name' => 'Assam', 'active' => 1, 'slug' => 'assam'],
            ['id' => 782049, 'country_code' => 'IN', 'name' => 'Bihar', 'active' => 1, 'slug' => 'bihar'],
            ['id' => 782050, 'country_code' => 'IN', 'name' => 'Chandigarh', 'active' => 1, 'slug' => 'chandigarh'],
            ['id' => 782051, 'country_code' => 'IN', 'name' => 'Chhattisgarh', 'active' => 1, 'slug' => 'chhattisgarh'],
            ['id' => 782052, 'country_code' => 'IN', 'name' => 'Dadra and Nagar Haveli', 'active' => 1, 'slug' => 'dadra-and-nagar-haveli'],
            ['id' => 782053, 'country_code' => 'IN', 'name' => 'Daman and Diu', 'active' => 1, 'slug' => 'daman-and-diu'],
            ['id' => 782054, 'country_code' => 'IN', 'name' => 'Delhi', 'active' => 1, 'slug' => 'delhi'],
            ['id' => 782055, 'country_code' => 'IN', 'name' => 'Goa', 'active' => 1, 'slug' => 'goa'],
            ['id' => 782056, 'country_code' => 'IN', 'name' => 'Gujarat', 'active' => 1, 'slug' => 'gujarat'],
            ['id' => 782057, 'country_code' => 'IN', 'name' => 'Haryana', 'active' => 1, 'slug' => 'haryana'],
            ['id' => 782058, 'country_code' => 'IN', 'name' => 'Himachal Pradesh', 'active' => 1, 'slug' => 'himachal-pradesh'],
            ['id' => 782059, 'country_code' => 'IN', 'name' => 'Jammu and Kashmir', 'active' => 1, 'slug' => 'jammu-and-kashmir'],
            ['id' => 782060, 'country_code' => 'IN', 'name' => 'Jharkhand', 'active' => 1, 'slug' => 'jharkhand'],
            ['id' => 782061, 'country_code' => 'IN', 'name' => 'Karnataka', 'active' => 1, 'slug' => 'karnataka'],
            ['id' => 782062, 'country_code' => 'IN', 'name' => 'Kerala', 'active' => 1, 'slug' => 'kerala'],
            ['id' => 782063, 'country_code' => 'IN', 'name' => 'Lakshadweep', 'active' => 1, 'slug' => 'lakshadweep'],
            ['id' => 782064, 'country_code' => 'IN', 'name' => 'Madhya Pradesh', 'active' => 1, 'slug' => 'madhya-pradesh'],
            ['id' => 782065, 'country_code' => 'IN', 'name' => 'Maharashtra', 'active' => 1, 'slug' => 'maharashtra'],
            ['id' => 782066, 'country_code' => 'IN', 'name' => 'Manipur', 'active' => 1, 'slug' => 'manipur'],
            ['id' => 782067, 'country_code' => 'IN', 'name' => 'Meghalaya', 'active' => 1, 'slug' => 'meghalaya'],
            ['id' => 782068, 'country_code' => 'IN', 'name' => 'Mizoram', 'active' => 1, 'slug' => 'mizoram'],
            ['id' => 782069, 'country_code' => 'IN', 'name' => 'Nagaland', 'active' => 1, 'slug' => 'nagaland'],
            ['id' => 782070, 'country_code' => 'IN', 'name' => 'Orissa', 'active' => 1, 'slug' => 'orissa'],
            ['id' => 782071, 'country_code' => 'IN', 'name' => 'Pondicherry', 'active' => 1, 'slug' => 'pondicherry'],
            ['id' => 782072, 'country_code' => 'IN', 'name' => 'Punjab', 'active' => 1, 'slug' => 'punjab'],
            ['id' => 782073, 'country_code' => 'IN', 'name' => 'Rajasthan', 'active' => 1, 'slug' => 'rajasthan'],
            ['id' => 782074, 'country_code' => 'IN', 'name' => 'Sikkim', 'active' => 1, 'slug' => 'sikkim'],
            ['id' => 782075, 'country_code' => 'IN', 'name' => 'Tamil Nadu', 'active' => 1, 'slug' => 'tamil-nadu'],
            ['id' => 782076, 'country_code' => 'IN', 'name' => 'Tripura', 'active' => 1, 'slug' => 'tripura'],
            ['id' => 782077, 'country_code' => 'IN', 'name' => 'Uttar Pradesh', 'active' => 1, 'slug' => 'uttar-pradesh'],
            ['id' => 782078, 'country_code' => 'IN', 'name' => 'Uttarakhand', 'active' => 1, 'slug' => 'uttarakhand'],
            ['id' => 782079, 'country_code' => 'IN', 'name' => 'West Bengal', 'active' => 1, 'slug' => 'west-bengal']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
