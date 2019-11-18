<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class JapanStatesSeeder extends Seeder
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
            ['id' => 783366, 'country_code' => 'JP', 'name' => '鳥取県', 'active' => 1, 'slug' => '%e9%b3%a5%e5%8f%96%e7%9c%8c'],
            ['id' => 783367, 'country_code' => 'JP', 'name' => '新潟県', 'active' => 1, 'slug' => '%e6%96%b0%e6%bd%9f%e7%9c%8c'],
            ['id' => 783368, 'country_code' => 'JP', 'name' => '滋賀県', 'active' => 1, 'slug' => '%e6%bb%8b%e8%b3%80%e7%9c%8c'],
            ['id' => 783369, 'country_code' => 'JP', 'name' => '秋田県', 'active' => 1, 'slug' => '%e7%a7%8b%e7%94%b0%e7%9c%8c'],
            ['id' => 783370, 'country_code' => 'JP', 'name' => '神奈川県', 'active' => 1, 'slug' => '%e7%a5%9e%e5%a5%88%e5%b7%9d%e7%9c%8c'],
            ['id' => 783371, 'country_code' => 'JP', 'name' => '長野県', 'active' => 1, 'slug' => '%e9%95%b7%e9%87%8e%e7%9c%8c'],
            ['id' => 783372, 'country_code' => 'JP', 'name' => '群馬県', 'active' => 1, 'slug' => '%e7%be%a4%e9%a6%ac%e7%9c%8c'],
            ['id' => 783373, 'country_code' => 'JP', 'name' => '徳島県', 'active' => 1, 'slug' => '%e5%be%b3%e5%b3%b6%e7%9c%8c'],
            ['id' => 783374, 'country_code' => 'JP', 'name' => '大分県', 'active' => 1, 'slug' => '%e5%a4%a7%e5%88%86%e7%9c%8c'],
            ['id' => 783375, 'country_code' => 'JP', 'name' => '宮崎県', 'active' => 1, 'slug' => '%e5%ae%ae%e5%b4%8e%e7%9c%8c'],
            ['id' => 783376, 'country_code' => 'JP', 'name' => '静岡県', 'active' => 1, 'slug' => '%e9%9d%99%e5%b2%a1%e7%9c%8c'],
            ['id' => 783377, 'country_code' => 'JP', 'name' => '奈良県', 'active' => 1, 'slug' => '%e5%a5%88%e8%89%af%e7%9c%8c'],
            ['id' => 783378, 'country_code' => 'JP', 'name' => '福岡県', 'active' => 1, 'slug' => '%e7%a6%8f%e5%b2%a1%e7%9c%8c'],
            ['id' => 783379, 'country_code' => 'JP', 'name' => '兵庫県', 'active' => 1, 'slug' => '%e5%85%b5%e5%ba%ab%e7%9c%8c'],
            ['id' => 783380, 'country_code' => 'JP', 'name' => '福井県', 'active' => 1, 'slug' => '%e7%a6%8f%e4%ba%95%e7%9c%8c'],
            ['id' => 783381, 'country_code' => 'JP', 'name' => '千葉県', 'active' => 1, 'slug' => '%e5%8d%83%e8%91%89%e7%9c%8c'],
            ['id' => 783382, 'country_code' => 'JP', 'name' => '埼玉県', 'active' => 1, 'slug' => '%e5%9f%bc%e7%8e%89%e7%9c%8c'],
            ['id' => 783383, 'country_code' => 'JP', 'name' => '鹿児島県', 'active' => 1, 'slug' => '%e9%b9%bf%e5%85%90%e5%b3%b6%e7%9c%8c'],
            ['id' => 783384, 'country_code' => 'JP', 'name' => '石川県', 'active' => 1, 'slug' => '%e7%9f%b3%e5%b7%9d%e7%9c%8c'],
            ['id' => 783385, 'country_code' => 'JP', 'name' => '沖縄県', 'active' => 1, 'slug' => '%e6%b2%96%e7%b8%84%e7%9c%8c'],
            ['id' => 783386, 'country_code' => 'JP', 'name' => '青森県', 'active' => 1, 'slug' => '%e9%9d%92%e6%a3%ae%e7%9c%8c'],
            ['id' => 783387, 'country_code' => 'JP', 'name' => '和歌山県', 'active' => 1, 'slug' => '%e5%92%8c%e6%ad%8c%e5%b1%b1%e7%9c%8c'],
            ['id' => 783388, 'country_code' => 'JP', 'name' => '茨城県', 'active' => 1, 'slug' => '%e8%8c%a8%e5%9f%8e%e7%9c%8c'],
            ['id' => 783389, 'country_code' => 'JP', 'name' => '宮城県', 'active' => 1, 'slug' => '%e5%ae%ae%e5%9f%8e%e7%9c%8c'],
            ['id' => 783390, 'country_code' => 'JP', 'name' => '岩手県', 'active' => 1, 'slug' => '%e5%b2%a9%e6%89%8b%e7%9c%8c'],
            ['id' => 783391, 'country_code' => 'JP', 'name' => '山口県', 'active' => 1, 'slug' => '%e5%b1%b1%e5%8f%a3%e7%9c%8c'],
            ['id' => 783392, 'country_code' => 'JP', 'name' => '島根県', 'active' => 1, 'slug' => '%e5%b3%b6%e6%a0%b9%e7%9c%8c'],
            ['id' => 783393, 'country_code' => 'JP', 'name' => '栃木県', 'active' => 1, 'slug' => '%e6%a0%83%e6%9c%a8%e7%9c%8c'],
            ['id' => 783394, 'country_code' => 'JP', 'name' => '福島県', 'active' => 1, 'slug' => '%e7%a6%8f%e5%b3%b6%e7%9c%8c'],
            ['id' => 783395, 'country_code' => 'JP', 'name' => '佐賀県', 'active' => 1, 'slug' => '%e4%bd%90%e8%b3%80%e7%9c%8c'],
            ['id' => 783396, 'country_code' => 'JP', 'name' => '東京都', 'active' => 1, 'slug' => '%e6%9d%b1%e4%ba%ac%e9%83%bd'],
            ['id' => 783397, 'country_code' => 'JP', 'name' => '香川県', 'active' => 1, 'slug' => '%e9%a6%99%e5%b7%9d%e7%9c%8c'],
            ['id' => 783398, 'country_code' => 'JP', 'name' => '三重県', 'active' => 1, 'slug' => '%e4%b8%89%e9%87%8d%e7%9c%8c'],
            ['id' => 783399, 'country_code' => 'JP', 'name' => '北海道', 'active' => 1, 'slug' => '%e5%8c%97%e6%b5%b7%e9%81%93'],
            ['id' => 783400, 'country_code' => 'JP', 'name' => '岡山県', 'active' => 1, 'slug' => '%e5%b2%a1%e5%b1%b1%e7%9c%8c'],
            ['id' => 783401, 'country_code' => 'JP', 'name' => '愛知県', 'active' => 1, 'slug' => '%e6%84%9b%e7%9f%a5%e7%9c%8c'],
            ['id' => 783402, 'country_code' => 'JP', 'name' => '熊本県', 'active' => 1, 'slug' => '%e7%86%8a%e6%9c%ac%e7%9c%8c'],
            ['id' => 783403, 'country_code' => 'JP', 'name' => '山形県', 'active' => 1, 'slug' => '%e5%b1%b1%e5%bd%a2%e7%9c%8c'],
            ['id' => 783404, 'country_code' => 'JP', 'name' => '長崎県', 'active' => 1, 'slug' => '%e9%95%b7%e5%b4%8e%e7%9c%8c'],
            ['id' => 783405, 'country_code' => 'JP', 'name' => '高知県', 'active' => 1, 'slug' => '%e9%ab%98%e7%9f%a5%e7%9c%8c'],
            ['id' => 783406, 'country_code' => 'JP', 'name' => '京都府', 'active' => 1, 'slug' => '%e4%ba%ac%e9%83%bd%e5%ba%9c'],
            ['id' => 783407, 'country_code' => 'JP', 'name' => '山梨県', 'active' => 1, 'slug' => '%e5%b1%b1%e6%a2%a8%e7%9c%8c'],
            ['id' => 783408, 'country_code' => 'JP', 'name' => '岐阜県', 'active' => 1, 'slug' => '%e5%b2%90%e9%98%9c%e7%9c%8c'],
            ['id' => 783409, 'country_code' => 'JP', 'name' => '富山県', 'active' => 1, 'slug' => '%e5%af%8c%e5%b1%b1%e7%9c%8c'],
            ['id' => 783410, 'country_code' => 'JP', 'name' => '広島県', 'active' => 1, 'slug' => '%e5%ba%83%e5%b3%b6%e7%9c%8c'],
            ['id' => 783411, 'country_code' => 'JP', 'name' => '大阪府', 'active' => 1, 'slug' => '%e5%a4%a7%e9%98%aa%e5%ba%9c'],
            ['id' => 783412, 'country_code' => 'JP', 'name' => '愛媛県', 'active' => 1, 'slug' => '%e6%84%9b%e5%aa%9b%e7%9c%8c']
    	];

        

        State::create($state);
        $this->enableForeignKeys();

    }
}
