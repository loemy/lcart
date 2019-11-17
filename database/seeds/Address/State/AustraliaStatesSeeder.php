<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class AustraliaStatesSeeder extends Seeder
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
            ['id' => 781627, 'country_code' => 'AU', 'name' => 'Adelaide', 'active' => 1, 'slug' => 'adelaide'],
            ['id' => 781628, 'country_code' => 'AU', 'name' => 'All Gippsland', 'active' => 1, 'slug' => 'all-gippsland'],
            ['id' => 781629, 'country_code' => 'AU', 'name' => 'Australian Capital Territory', 'active' => 1, 'slug' => 'australian-capital-territory'],
            ['id' => 781630, 'country_code' => 'AU', 'name' => 'Barwon-Western', 'active' => 1, 'slug' => 'barwon-western'],
            ['id' => 781631, 'country_code' => 'AU', 'name' => 'Brisbane', 'active' => 1, 'slug' => 'brisbane'],
            ['id' => 781632, 'country_code' => 'AU', 'name' => 'Central Highlands-Wimmera', 'active' => 1, 'slug' => 'central-highlands-wimmera'],
            ['id' => 781633, 'country_code' => 'AU', 'name' => 'Central West NSW', 'active' => 1, 'slug' => 'central-west-nsw'],
            ['id' => 781634, 'country_code' => 'AU', 'name' => 'Central West Queensland', 'active' => 1, 'slug' => 'central-west-queensland'],
            ['id' => 781635, 'country_code' => 'AU', 'name' => 'Christmas Island', 'active' => 1, 'slug' => 'christmas-island'],
            ['id' => 781636, 'country_code' => 'AU', 'name' => 'Cocos Islands', 'active' => 1, 'slug' => 'cocos-islands'],
            ['id' => 781637, 'country_code' => 'AU', 'name' => 'Darling Downs', 'active' => 1, 'slug' => 'darling-downs'],
            ['id' => 781638, 'country_code' => 'AU', 'name' => 'Far North Queensland', 'active' => 1, 'slug' => 'far-north-queensland'],
            ['id' => 781639, 'country_code' => 'AU', 'name' => 'Far West-North Western', 'active' => 1, 'slug' => 'far-west-north-western'],
            ['id' => 781640, 'country_code' => 'AU', 'name' => 'Fitzroy', 'active' => 1, 'slug' => 'fitzroy'],
            ['id' => 781641, 'country_code' => 'AU', 'name' => 'Gascoyne', 'active' => 1, 'slug' => 'gascoyne'],
            ['id' => 781642, 'country_code' => 'AU', 'name' => 'Gippsland', 'active' => 1, 'slug' => 'gippsland'],
            ['id' => 781643, 'country_code' => 'AU', 'name' => 'Goldfields-Esperance', 'active' => 1, 'slug' => 'goldfields-esperance'],
            ['id' => 781644, 'country_code' => 'AU', 'name' => 'Goulburn-Ovens-Murray', 'active' => 1, 'slug' => 'goulburn-ovens-murray'],
            ['id' => 781645, 'country_code' => 'AU', 'name' => 'Greater Hobart', 'active' => 1, 'slug' => 'greater-hobart'],
            ['id' => 781646, 'country_code' => 'AU', 'name' => 'Hunter', 'active' => 1, 'slug' => 'hunter'],
            ['id' => 781647, 'country_code' => 'AU', 'name' => 'Illawarra', 'active' => 1, 'slug' => 'illawarra'],
            ['id' => 781648, 'country_code' => 'AU', 'name' => 'Kimberley', 'active' => 1, 'slug' => 'kimberley'],
            ['id' => 781649, 'country_code' => 'AU', 'name' => 'Loddon-Mallee', 'active' => 1, 'slug' => 'loddon-mallee'],
            ['id' => 781650, 'country_code' => 'AU', 'name' => 'Lower West WA', 'active' => 1, 'slug' => 'lower-west-wa'],
            ['id' => 781651, 'country_code' => 'AU', 'name' => 'Mackay', 'active' => 1, 'slug' => 'mackay'],
            ['id' => 781652, 'country_code' => 'AU', 'name' => 'Melbourne', 'active' => 1, 'slug' => 'melbourne'],
            ['id' => 781653, 'country_code' => 'AU', 'name' => 'Mersey-Lyell', 'active' => 1, 'slug' => 'mersey-lyell'],
            ['id' => 781654, 'country_code' => 'AU', 'name' => 'Mid West', 'active' => 1, 'slug' => 'mid-west'],
            ['id' => 781655, 'country_code' => 'AU', 'name' => 'Mid-North Coast', 'active' => 1, 'slug' => 'mid-north-coast'],
            ['id' => 781656, 'country_code' => 'AU', 'name' => 'Mingenew', 'active' => 1, 'slug' => 'mingenew'],
            ['id' => 781657, 'country_code' => 'AU', 'name' => 'Moreton Bay', 'active' => 1, 'slug' => 'moreton-bay'],
            ['id' => 781658, 'country_code' => 'AU', 'name' => 'Murray-Murrumbidgee', 'active' => 1, 'slug' => 'murray-murrumbidgee'],
            ['id' => 781659, 'country_code' => 'AU', 'name' => 'North and West Moreton', 'active' => 1, 'slug' => 'north-and-west-moreton'],
            ['id' => 781660, 'country_code' => 'AU', 'name' => 'North West Queensland', 'active' => 1, 'slug' => 'north-west-queensland'],
            ['id' => 781661, 'country_code' => 'AU', 'name' => 'Northern and Western SA', 'active' => 1, 'slug' => 'northern-and-western-sa'],
            ['id' => 781662, 'country_code' => 'AU', 'name' => 'Northern NSW', 'active' => 1, 'slug' => 'northern-nsw'],
            ['id' => 781663, 'country_code' => 'AU', 'name' => 'Northern Queensland', 'active' => 1, 'slug' => 'northern-queensland'],
            ['id' => 781664, 'country_code' => 'AU', 'name' => 'Northern Tasmania', 'active' => 1, 'slug' => 'northern-tasmania'],
            ['id' => 781665, 'country_code' => 'AU', 'name' => 'Northern Territory', 'active' => 1, 'slug' => 'northern-territory'],
            ['id' => 781666, 'country_code' => 'AU', 'name' => 'Perth', 'active' => 1, 'slug' => 'perth'],
            ['id' => 781667, 'country_code' => 'AU', 'name' => 'Pilbara', 'active' => 1, 'slug' => 'pilbara'],
            ['id' => 781668, 'country_code' => 'AU', 'name' => 'Richmond-Tweed', 'active' => 1, 'slug' => 'richmond-tweed'],
            ['id' => 781669, 'country_code' => 'AU', 'name' => 'South and East Moreton', 'active' => 1, 'slug' => 'south-and-east-moreton'],
            ['id' => 781670, 'country_code' => 'AU', 'name' => 'South Coast', 'active' => 1, 'slug' => 'south-coast'],
            ['id' => 781671, 'country_code' => 'AU', 'name' => 'South East Queensland', 'active' => 1, 'slug' => 'south-east-queensland'],
            ['id' => 781672, 'country_code' => 'AU', 'name' => 'South Eastern NSW', 'active' => 1, 'slug' => 'south-eastern-nsw'],
            ['id' => 781673, 'country_code' => 'AU', 'name' => 'South West Queensland', 'active' => 1, 'slug' => 'south-west-queensland'],
            ['id' => 781674, 'country_code' => 'AU', 'name' => 'Southern and Eastern SA', 'active' => 1, 'slug' => 'southern-and-eastern-sa'],
            ['id' => 781675, 'country_code' => 'AU', 'name' => 'Sunshine Coast', 'active' => 1, 'slug' => 'sunshine-coast'],
            ['id' => 781676, 'country_code' => 'AU', 'name' => 'Sydney', 'active' => 1, 'slug' => 'sydney'],
            ['id' => 781677, 'country_code' => 'AU', 'name' => 'Wheatbelt', 'active' => 1, 'slug' => 'wheatbelt'],
            ['id' => 781678, 'country_code' => 'AU', 'name' => 'Wide Bay-Burnett', 'active' => 1, 'slug' => 'wide-bay-burnett']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
