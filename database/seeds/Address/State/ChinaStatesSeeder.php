<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ChinaStatesSeeder extends Seeder
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
            ['id' => 744116, 'country_code' => 'CN', 'name' => 'Anhui', 'active' => 1, 'slug' => 'anhui'],
            ['id' => 744207, 'country_code' => 'CN', 'name' => 'Fújiàn', 'active' => 1, 'slug' => 'fujian'],
            ['id' => 744280, 'country_code' => 'CN', 'name' => 'Gansù', 'active' => 1, 'slug' => 'gansu'],
            ['id' => 744371, 'country_code' => 'CN', 'name' => 'Guangdong', 'active' => 1, 'slug' => 'guangdong'],
            ['id' => 744471, 'country_code' => 'CN', 'name' => 'Uìzzhouho Guì', 'active' => 1, 'slug' => 'uizzhouho-gui'],
            ['id' => 744562, 'country_code' => 'CN', 'name' => 'Hainán', 'active' => 1, 'slug' => 'hainan'],
            ['id' => 744586, 'country_code' => 'CN', 'name' => 'Hébei', 'active' => 1, 'slug' => 'hebei'],
            ['id' => 744690, 'country_code' => 'CN', 'name' => 'Heilóngjang', 'active' => 1, 'slug' => 'heilongjang'],
            ['id' => 744777, 'country_code' => 'CN', 'name' => 'Hénán', 'active' => 1, 'slug' => 'henan'],
            ['id' => 744876, 'country_code' => 'CN', 'name' => 'Húbei', 'active' => 1, 'slug' => 'hubei'],
            ['id' => 744963, 'country_code' => 'CN', 'name' => 'Húnán', 'active' => 1, 'slug' => 'hunan'],
            ['id' => 745061, 'country_code' => 'CN', 'name' => 'Jiangsu', 'active' => 1, 'slug' => 'jiangsu'],
            ['id' => 745137, 'country_code' => 'CN', 'name' => 'Jiangxiiangxi', 'active' => 1, 'slug' => 'jiangxiiangxi'],
            ['id' => 745237, 'country_code' => 'CN', 'name' => 'Jílín', 'active' => 1, 'slug' => 'jilin'],
            ['id' => 745289, 'country_code' => 'CN', 'name' => 'Liáoníng', 'active' => 1, 'slug' => 'liaoning'],
            ['id' => 745366, 'country_code' => 'CN', 'name' => 'Qinghai', 'active' => 1, 'slug' => 'qinghai'],
            ['id' => 745415, 'country_code' => 'CN', 'name' => 'Shaanxi', 'active' => 1, 'slug' => 'shaanxi'],
            ['id' => 745517, 'country_code' => 'CN', 'name' => 'Shandong', 'active' => 1, 'slug' => 'shandong'],
            ['id' => 745621, 'country_code' => 'CN', 'name' => 'Shanxi', 'active' => 1, 'slug' => 'shanxi'],
            ['id' => 745721, 'country_code' => 'CN', 'name' => 'Sìchuan', 'active' => 1, 'slug' => 'sichuan'],
            ['id' => 745826, 'country_code' => 'CN', 'name' => 'Yúnnán', 'active' => 1, 'slug' => 'yunnan'],
            ['id' => 745925, 'country_code' => 'CN', 'name' => 'Zhèjiang', 'active' => 1, 'slug' => 'zhejiang'],
            ['id' => 746010, 'country_code' => 'CN', 'name' => 'Zhuang de Guangxi', 'active' => 1, 'slug' => 'zhuang-de-guangxi'],
            ['id' => 746108, 'country_code' => 'CN', 'name' => 'Mongolia Interior', 'active' => 1, 'slug' => 'mongolia-interior'],
            ['id' => 746205, 'country_code' => 'CN', 'name' => 'Hui de Níngxià', 'active' => 1, 'slug' => 'hui-de-ningxia'],
            ['id' => 746229, 'country_code' => 'CN', 'name' => 'Uigur de Xinjian', 'active' => 1, 'slug' => 'uigur-de-xinjian'],
            ['id' => 746327, 'country_code' => 'CN', 'name' => 'Tibet', 'active' => 1, 'slug' => 'tibet'],
            ['id' => 746334, 'country_code' => 'CN', 'name' => 'Pekín', 'active' => 1, 'slug' => 'pekin'],
            ['id' => 746354, 'country_code' => 'CN', 'name' => 'Chónqgìng', 'active' => 1, 'slug' => 'chonqging'],
            ['id' => 746396, 'country_code' => 'CN', 'name' => 'Shànghai', 'active' => 1, 'slug' => 'shanghai'],
            ['id' => 746419, 'country_code' => 'CN', 'name' => 'Tianjin', 'active' => 1, 'slug' => 'tianjin'],
            ['id' => 746440, 'country_code' => 'CN', 'name' => 'Hong Kong', 'active' => 1, 'slug' => 'hong-kong'],
            ['id' => 746444, 'country_code' => 'CN', 'name' => 'Macao', 'active' => 1, 'slug' => 'macao']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
