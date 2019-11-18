<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class RussiaStatesSeeder extends Seeder
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
            ['id' => 782394, 'country_code' => 'RU', 'name' => 'Агинский Бурятский автономный округ', 'active' => 1, 'slug' => '%d0%90%d0%b3%d0%b8%d0%bd%d1%81%d0%ba%d0%b8%d0%b9-%d0%91%d1%83%d1%80%d1%8f%d1%82%d1%81%d0%ba%d0%b8%d0%b9-%d0%b0%d0%b2%d1%82%d0%be%d0%bd%d0%be%d0%bc%d0%bd%d1%8b%d0%b9-%d0%be%d0%ba%d1%80%d1%83%d0%b3'],
            ['id' => 782395, 'country_code' => 'RU', 'name' => 'Алтайский край', 'active' => 1, 'slug' => '%d0%90%d0%bb%d1%82%d0%b0%d0%b9%d1%81%d0%ba%d0%b8%d0%b9-%d0%ba%d1%80%d0%b0%d0%b9'],
            ['id' => 782396, 'country_code' => 'RU', 'name' => 'Амурская область', 'active' => 1, 'slug' => '%d0%90%d0%bc%d1%83%d1%80%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782397, 'country_code' => 'RU', 'name' => 'Архангельская область', 'active' => 1, 'slug' => '%d0%90%d1%80%d1%85%d0%b0%d0%bd%d0%b3%d0%b5%d0%bb%d1%8c%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782398, 'country_code' => 'RU', 'name' => 'Астраханская область', 'active' => 1, 'slug' => '%d0%90%d1%81%d1%82%d1%80%d0%b0%d1%85%d0%b0%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782399, 'country_code' => 'RU', 'name' => 'Белгородская область', 'active' => 1, 'slug' => '%d0%91%d0%b5%d0%bb%d0%b3%d0%be%d1%80%d0%be%d0%b4%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782400, 'country_code' => 'RU', 'name' => 'Брянская область', 'active' => 1, 'slug' => '%d0%91%d1%80%d1%8f%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782401, 'country_code' => 'RU', 'name' => 'Владимирская область', 'active' => 1, 'slug' => '%d0%92%d0%bb%d0%b0%d0%b4%d0%b8%d0%bc%d0%b8%d1%80%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782402, 'country_code' => 'RU', 'name' => 'Волгоградская область', 'active' => 1, 'slug' => '%d0%92%d0%be%d0%bb%d0%b3%d0%be%d0%b3%d1%80%d0%b0%d0%b4%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782403, 'country_code' => 'RU', 'name' => 'Вологодская область', 'active' => 1, 'slug' => '%d0%92%d0%be%d0%bb%d0%be%d0%b3%d0%be%d0%b4%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782404, 'country_code' => 'RU', 'name' => 'Воронежская область', 'active' => 1, 'slug' => '%d0%92%d0%be%d1%80%d0%be%d0%bd%d0%b5%d0%b6%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782405, 'country_code' => 'RU', 'name' => 'Еврейская автономная область', 'active' => 1, 'slug' => '%d0%95%d0%b2%d1%80%d0%b5%d0%b9%d1%81%d0%ba%d0%b0%d1%8f-%d0%b0%d0%b2%d1%82%d0%be%d0%bd%d0%be%d0%bc%d0%bd%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782406, 'country_code' => 'RU', 'name' => 'Ивановская область', 'active' => 1, 'slug' => '%d0%98%d0%b2%d0%b0%d0%bd%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782407, 'country_code' => 'RU', 'name' => 'Иркутская область', 'active' => 1, 'slug' => '%d0%98%d1%80%d0%ba%d1%83%d1%82%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782408, 'country_code' => 'RU', 'name' => 'Кабардино-Балкарская Республика', 'active' => 1, 'slug' => '%d0%9a%d0%b0%d0%b1%d0%b0%d1%80%d0%b4%d0%b8%d0%bd%d0%be-%d0%91%d0%b0%d0%bb%d0%ba%d0%b0%d1%80%d1%81%d0%ba%d0%b0%d1%8f-%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0'],
            ['id' => 782409, 'country_code' => 'RU', 'name' => 'Калининградская область', 'active' => 1, 'slug' => '%d0%9a%d0%b0%d0%bb%d0%b8%d0%bd%d0%b8%d0%bd%d0%b3%d1%80%d0%b0%d0%b4%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782410, 'country_code' => 'RU', 'name' => 'Калужская область', 'active' => 1, 'slug' => '%d0%9a%d0%b0%d0%bb%d1%83%d0%b6%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782411, 'country_code' => 'RU', 'name' => 'Камчатская область', 'active' => 1, 'slug' => '%d0%9a%d0%b0%d0%bc%d1%87%d0%b0%d1%82%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782412, 'country_code' => 'RU', 'name' => 'Карачаево-Черкесская Республика', 'active' => 1, 'slug' => '%d0%9a%d0%b0%d1%80%d0%b0%d1%87%d0%b0%d0%b5%d0%b2%d0%be-%d0%a7%d0%b5%d1%80%d0%ba%d0%b5%d1%81%d1%81%d0%ba%d0%b0%d1%8f-%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0'],
            ['id' => 782413, 'country_code' => 'RU', 'name' => 'Кемеровская область', 'active' => 1, 'slug' => '%d0%9a%d0%b5%d0%bc%d0%b5%d1%80%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782414, 'country_code' => 'RU', 'name' => 'Кировская область', 'active' => 1, 'slug' => '%d0%9a%d0%b8%d1%80%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782415, 'country_code' => 'RU', 'name' => 'Коми-Пермяцкий автономный округ', 'active' => 1, 'slug' => '%d0%9a%d0%be%d0%bc%d0%b8-%d0%9f%d0%b5%d1%80%d0%bc%d1%8f%d1%86%d0%ba%d0%b8%d0%b9-%d0%b0%d0%b2%d1%82%d0%be%d0%bd%d0%be%d0%bc%d0%bd%d1%8b%d0%b9-%d0%be%d0%ba%d1%80%d1%83%d0%b3'],
            ['id' => 782416, 'country_code' => 'RU', 'name' => 'Корякский автономный округ', 'active' => 1, 'slug' => '%d0%9a%d0%be%d1%80%d1%8f%d0%ba%d1%81%d0%ba%d0%b8%d0%b9-%d0%b0%d0%b2%d1%82%d0%be%d0%bd%d0%be%d0%bc%d0%bd%d1%8b%d0%b9-%d0%be%d0%ba%d1%80%d1%83%d0%b3'],
            ['id' => 782417, 'country_code' => 'RU', 'name' => 'Костромская область', 'active' => 1, 'slug' => '%d0%9a%d0%be%d1%81%d1%82%d1%80%d0%be%d0%bc%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782418, 'country_code' => 'RU', 'name' => 'Краснодарский край', 'active' => 1, 'slug' => '%d0%9a%d1%80%d0%b0%d1%81%d0%bd%d0%be%d0%b4%d0%b0%d1%80%d1%81%d0%ba%d0%b8%d0%b9-%d0%ba%d1%80%d0%b0%d0%b9'],
            ['id' => 782419, 'country_code' => 'RU', 'name' => 'Красноярский край', 'active' => 1, 'slug' => '%d0%9a%d1%80%d0%b0%d1%81%d0%bd%d0%be%d1%8f%d1%80%d1%81%d0%ba%d0%b8%d0%b9-%d0%ba%d1%80%d0%b0%d0%b9'],
            ['id' => 782420, 'country_code' => 'RU', 'name' => 'Курганская область', 'active' => 1, 'slug' => '%d0%9a%d1%83%d1%80%d0%b3%d0%b0%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782421, 'country_code' => 'RU', 'name' => 'Курская область', 'active' => 1, 'slug' => '%d0%9a%d1%83%d1%80%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782422, 'country_code' => 'RU', 'name' => 'Ленинградская область', 'active' => 1, 'slug' => '%d0%9b%d0%b5%d0%bd%d0%b8%d0%bd%d0%b3%d1%80%d0%b0%d0%b4%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782423, 'country_code' => 'RU', 'name' => 'Липецкая область', 'active' => 1, 'slug' => '%d0%9b%d0%b8%d0%bf%d0%b5%d1%86%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782424, 'country_code' => 'RU', 'name' => 'Магаданская область', 'active' => 1, 'slug' => '%d0%9c%d0%b0%d0%b3%d0%b0%d0%b4%d0%b0%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782425, 'country_code' => 'RU', 'name' => 'Москва', 'active' => 1, 'slug' => '%d0%9c%d0%be%d1%81%d0%ba%d0%b2%d0%b0'],
            ['id' => 782426, 'country_code' => 'RU', 'name' => 'Московская область', 'active' => 1, 'slug' => '%d0%9c%d0%be%d1%81%d0%ba%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782427, 'country_code' => 'RU', 'name' => 'Мурманская область', 'active' => 1, 'slug' => '%d0%9c%d1%83%d1%80%d0%bc%d0%b0%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782428, 'country_code' => 'RU', 'name' => 'Ненецкий автономный округ', 'active' => 1, 'slug' => '%d0%9d%d0%b5%d0%bd%d0%b5%d1%86%d0%ba%d0%b8%d0%b9-%d0%b0%d0%b2%d1%82%d0%be%d0%bd%d0%be%d0%bc%d0%bd%d1%8b%d0%b9-%d0%be%d0%ba%d1%80%d1%83%d0%b3'],
            ['id' => 782429, 'country_code' => 'RU', 'name' => 'Нижегородская область', 'active' => 1, 'slug' => '%d0%9d%d0%b8%d0%b6%d0%b5%d0%b3%d0%be%d1%80%d0%be%d0%b4%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782430, 'country_code' => 'RU', 'name' => 'Новгородская область', 'active' => 1, 'slug' => '%d0%9d%d0%be%d0%b2%d0%b3%d0%be%d1%80%d0%be%d0%b4%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782431, 'country_code' => 'RU', 'name' => 'Новосибирская область', 'active' => 1, 'slug' => '%d0%9d%d0%be%d0%b2%d0%be%d1%81%d0%b8%d0%b1%d0%b8%d1%80%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782432, 'country_code' => 'RU', 'name' => 'Омская область', 'active' => 1, 'slug' => '%d0%9e%d0%bc%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782433, 'country_code' => 'RU', 'name' => 'Оренбургская область', 'active' => 1, 'slug' => '%d0%9e%d1%80%d0%b5%d0%bd%d0%b1%d1%83%d1%80%d0%b3%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782434, 'country_code' => 'RU', 'name' => 'Орловская область', 'active' => 1, 'slug' => '%d0%9e%d1%80%d0%bb%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782435, 'country_code' => 'RU', 'name' => 'Пензенская область', 'active' => 1, 'slug' => '%d0%9f%d0%b5%d0%bd%d0%b7%d0%b5%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782436, 'country_code' => 'RU', 'name' => 'Пермская область', 'active' => 1, 'slug' => '%d0%9f%d0%b5%d1%80%d0%bc%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782437, 'country_code' => 'RU', 'name' => 'Приморский край', 'active' => 1, 'slug' => '%d0%9f%d1%80%d0%b8%d0%bc%d0%be%d1%80%d1%81%d0%ba%d0%b8%d0%b9-%d0%ba%d1%80%d0%b0%d0%b9'],
            ['id' => 782438, 'country_code' => 'RU', 'name' => 'Псковская область', 'active' => 1, 'slug' => '%d0%9f%d1%81%d0%ba%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782439, 'country_code' => 'RU', 'name' => 'Республика Адыгея', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%90%d0%b4%d1%8b%d0%b3%d0%b5%d1%8f'],
            ['id' => 782440, 'country_code' => 'RU', 'name' => 'Республика Алтай', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%90%d0%bb%d1%82%d0%b0%d0%b9'],
            ['id' => 782441, 'country_code' => 'RU', 'name' => 'Республика Башкортостан', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%91%d0%b0%d1%88%d0%ba%d0%be%d1%80%d1%82%d0%be%d1%81%d1%82%d0%b0%d0%bd'],
            ['id' => 782442, 'country_code' => 'RU', 'name' => 'Республика Бурятия', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%91%d1%83%d1%80%d1%8f%d1%82%d0%b8%d1%8f'],
            ['id' => 782443, 'country_code' => 'RU', 'name' => 'Республика Дагестан', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%94%d0%b0%d0%b3%d0%b5%d1%81%d1%82%d0%b0%d0%bd'],
            ['id' => 782444, 'country_code' => 'RU', 'name' => 'Республика Ингушетия', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%98%d0%bd%d0%b3%d1%83%d1%88%d0%b5%d1%82%d0%b8%d1%8f'],
            ['id' => 782445, 'country_code' => 'RU', 'name' => 'Республика Калмыкия', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%9a%d0%b0%d0%bb%d0%bc%d1%8b%d0%ba%d0%b8%d1%8f'],
            ['id' => 782446, 'country_code' => 'RU', 'name' => 'Республика Карелия', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%9a%d0%b0%d1%80%d0%b5%d0%bb%d0%b8%d1%8f'],
            ['id' => 782447, 'country_code' => 'RU', 'name' => 'Республика Коми', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%9a%d0%be%d0%bc%d0%b8'],
            ['id' => 782448, 'country_code' => 'RU', 'name' => 'Республика Марий Эл', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%9c%d0%b0%d1%80%d0%b8%d0%b9-%d0%ad%d0%bb'],
            ['id' => 782449, 'country_code' => 'RU', 'name' => 'Республика Мордовия', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%9c%d0%be%d1%80%d0%b4%d0%be%d0%b2%d0%b8%d1%8f'],
            ['id' => 782450, 'country_code' => 'RU', 'name' => 'Республика Саха (Якутия)', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%a1%d0%b0%d1%85%d0%b0-%d0%af%d0%ba%d1%83%d1%82%d0%b8%d1%8f'],
            ['id' => 782451, 'country_code' => 'RU', 'name' => 'Республика Северная Осетия - Алания', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%a1%d0%b5%d0%b2%d0%b5%d1%80%d0%bd%d0%b0%d1%8f-%d0%9e%d1%81%d0%b5%d1%82%d0%b8%d1%8f-%d0%90%d0%bb%d0%b0%d0%bd%d0%b8%d1%8f'],
            ['id' => 782452, 'country_code' => 'RU', 'name' => 'Республика Татарстан', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%a2%d0%b0%d1%82%d0%b0%d1%80%d1%81%d1%82%d0%b0%d0%bd'],
            ['id' => 782453, 'country_code' => 'RU', 'name' => 'Республика Тыва', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%a2%d1%8b%d0%b2%d0%b0'],
            ['id' => 782454, 'country_code' => 'RU', 'name' => 'Республика Хакасия', 'active' => 1, 'slug' => '%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0-%d0%a5%d0%b0%d0%ba%d0%b0%d1%81%d0%b8%d1%8f'],
            ['id' => 782455, 'country_code' => 'RU', 'name' => 'Ростовская область', 'active' => 1, 'slug' => '%d0%a0%d0%be%d1%81%d1%82%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782456, 'country_code' => 'RU', 'name' => 'Рязанская область', 'active' => 1, 'slug' => '%d0%a0%d1%8f%d0%b7%d0%b0%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782457, 'country_code' => 'RU', 'name' => 'Самарская область', 'active' => 1, 'slug' => '%d0%a1%d0%b0%d0%bc%d0%b0%d1%80%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782458, 'country_code' => 'RU', 'name' => 'Санкт-Петербург', 'active' => 1, 'slug' => '%d0%a1%d0%b0%d0%bd%d0%ba%d1%82-%d0%9f%d0%b5%d1%82%d0%b5%d1%80%d0%b1%d1%83%d1%80%d0%b3'],
            ['id' => 782459, 'country_code' => 'RU', 'name' => 'Саратовская область', 'active' => 1, 'slug' => '%d0%a1%d0%b0%d1%80%d0%b0%d1%82%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782460, 'country_code' => 'RU', 'name' => 'Сахалинская область', 'active' => 1, 'slug' => '%d0%a1%d0%b0%d1%85%d0%b0%d0%bb%d0%b8%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782461, 'country_code' => 'RU', 'name' => 'Свердловская область', 'active' => 1, 'slug' => '%d0%a1%d0%b2%d0%b5%d1%80%d0%b4%d0%bb%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782462, 'country_code' => 'RU', 'name' => 'Смоленская область', 'active' => 1, 'slug' => '%d0%a1%d0%bc%d0%be%d0%bb%d0%b5%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782463, 'country_code' => 'RU', 'name' => 'Ставропольский край', 'active' => 1, 'slug' => '%d0%a1%d1%82%d0%b0%d0%b2%d1%80%d0%be%d0%bf%d0%be%d0%bb%d1%8c%d1%81%d0%ba%d0%b8%d0%b9-%d0%ba%d1%80%d0%b0%d0%b9'],
            ['id' => 782464, 'country_code' => 'RU', 'name' => 'Тамбовская область', 'active' => 1, 'slug' => '%d0%a2%d0%b0%d0%bc%d0%b1%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782465, 'country_code' => 'RU', 'name' => 'Тверская область', 'active' => 1, 'slug' => '%d0%a2%d0%b2%d0%b5%d1%80%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782466, 'country_code' => 'RU', 'name' => 'Томская область', 'active' => 1, 'slug' => '%d0%a2%d0%be%d0%bc%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782467, 'country_code' => 'RU', 'name' => 'Тульская область', 'active' => 1, 'slug' => '%d0%a2%d1%83%d0%bb%d1%8c%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782468, 'country_code' => 'RU', 'name' => 'Тюменская область', 'active' => 1, 'slug' => '%d0%a2%d1%8e%d0%bc%d0%b5%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782469, 'country_code' => 'RU', 'name' => 'Удмуртская Республика', 'active' => 1, 'slug' => '%d0%a3%d0%b4%d0%bc%d1%83%d1%80%d1%82%d1%81%d0%ba%d0%b0%d1%8f-%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0'],
            ['id' => 782470, 'country_code' => 'RU', 'name' => 'Ульяновская область', 'active' => 1, 'slug' => '%d0%a3%d0%bb%d1%8c%d1%8f%d0%bd%d0%be%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782471, 'country_code' => 'RU', 'name' => 'Усть-Ордынский Бурятский а. о.', 'active' => 1, 'slug' => '%d0%a3%d1%81%d1%82%d1%8c-%d0%9e%d1%80%d0%b4%d1%8b%d0%bd%d1%81%d0%ba%d0%b8%d0%b9-%d0%91%d1%83%d1%80%d1%8f%d1%82%d1%81%d0%ba%d0%b8%d0%b9-%d0%b0-%d0%be'],
            ['id' => 782472, 'country_code' => 'RU', 'name' => 'Хабаровский край', 'active' => 1, 'slug' => '%d0%a5%d0%b0%d0%b1%d0%b0%d1%80%d0%be%d0%b2%d1%81%d0%ba%d0%b8%d0%b9-%d0%ba%d1%80%d0%b0%d0%b9'],
            ['id' => 782473, 'country_code' => 'RU', 'name' => 'Ханты-Мансийский автономный округ', 'active' => 1, 'slug' => '%d0%a5%d0%b0%d0%bd%d1%82%d1%8b-%d0%9c%d0%b0%d0%bd%d1%81%d0%b8%d0%b9%d1%81%d0%ba%d0%b8%d0%b9-%d0%b0%d0%b2%d1%82%d0%be%d0%bd%d0%be%d0%bc%d0%bd%d1%8b%d0%b9-%d0%be%d0%ba%d1%80%d1%83%d0%b3'],
            ['id' => 782474, 'country_code' => 'RU', 'name' => 'Челябинская область', 'active' => 1, 'slug' => '%d0%a7%d0%b5%d0%bb%d1%8f%d0%b1%d0%b8%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782475, 'country_code' => 'RU', 'name' => 'Чеченская Республика', 'active' => 1, 'slug' => '%d0%a7%d0%b5%d1%87%d0%b5%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0'],
            ['id' => 782476, 'country_code' => 'RU', 'name' => 'Читинская область', 'active' => 1, 'slug' => '%d0%a7%d0%b8%d1%82%d0%b8%d0%bd%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c'],
            ['id' => 782477, 'country_code' => 'RU', 'name' => 'Чувашская Республика', 'active' => 1, 'slug' => '%d0%a7%d1%83%d0%b2%d0%b0%d1%88%d1%81%d0%ba%d0%b0%d1%8f-%d0%a0%d0%b5%d1%81%d0%bf%d1%83%d0%b1%d0%bb%d0%b8%d0%ba%d0%b0'],
            ['id' => 782478, 'country_code' => 'RU', 'name' => 'Чукотский автономный округ', 'active' => 1, 'slug' => '%d0%a7%d1%83%d0%ba%d0%be%d1%82%d1%81%d0%ba%d0%b8%d0%b9-%d0%b0%d0%b2%d1%82%d0%be%d0%bd%d0%be%d0%bc%d0%bd%d1%8b%d0%b9-%d0%be%d0%ba%d1%80%d1%83%d0%b3'],
            ['id' => 782479, 'country_code' => 'RU', 'name' => 'Ямало-Ненецкий автономный округ', 'active' => 1, 'slug' => '%d0%af%d0%bc%d0%b0%d0%bb%d0%be-%d0%9d%d0%b5%d0%bd%d0%b5%d1%86%d0%ba%d0%b8%d0%b9-%d0%b0%d0%b2%d1%82%d0%be%d0%bd%d0%be%d0%bc%d0%bd%d1%8b%d0%b9-%d0%be%d0%ba%d1%80%d1%83%d0%b3'],
            ['id' => 782480, 'country_code' => 'RU', 'name' => 'Ярославская область', 'active' => 1, 'slug' => '%d0%af%d1%80%d0%be%d1%81%d0%bb%d0%b0%d0%b2%d1%81%d0%ba%d0%b0%d1%8f-%d0%be%d0%b1%d0%bb%d0%b0%d1%81%d1%82%d1%8c']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
