<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class BrazilStatesSeeder extends Seeder
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
            ['id' => 783040, 'country_code' => 'BR', 'name' => 'Rio Grande do Norte', 'active' => 1, 'slug' => 'rio-grande-do-norte'],
            ['id' => 783041, 'country_code' => 'BR', 'name' => 'Piauí', 'active' => 1, 'slug' => 'piaui'],
            ['id' => 783042, 'country_code' => 'BR', 'name' => 'Pernambuco', 'active' => 1, 'slug' => 'pernambuco'],
            ['id' => 783043, 'country_code' => 'BR', 'name' => 'Paraíba', 'active' => 1, 'slug' => 'paraiba'],
            ['id' => 783044, 'country_code' => 'BR', 'name' => 'Pará', 'active' => 1, 'slug' => 'para'],
            ['id' => 783045, 'country_code' => 'BR', 'name' => 'Maranhão', 'active' => 1, 'slug' => 'maranhao'],
            ['id' => 783046, 'country_code' => 'BR', 'name' => 'Ceará', 'active' => 1, 'slug' => 'ceara'],
            ['id' => 783047, 'country_code' => 'BR', 'name' => 'Amapá', 'active' => 1, 'slug' => 'amapa'],
            ['id' => 783048, 'country_code' => 'BR', 'name' => 'Alagoas', 'active' => 1, 'slug' => 'alagoas'],
            ['id' => 783049, 'country_code' => 'BR', 'name' => 'Sergipe', 'active' => 1, 'slug' => 'sergipe'],
            ['id' => 783050, 'country_code' => 'BR', 'name' => 'São Paulo', 'active' => 1, 'slug' => 'sao-paulo'],
            ['id' => 783051, 'country_code' => 'BR', 'name' => 'Santa Catarina', 'active' => 1, 'slug' => 'santa-catarina'],
            ['id' => 783052, 'country_code' => 'BR', 'name' => 'Rio Grande do Sul', 'active' => 1, 'slug' => 'rio-grande-do-sul'],
            ['id' => 783053, 'country_code' => 'BR', 'name' => 'Rio de Janeiro', 'active' => 1, 'slug' => 'rio-de-janeiro'],
            ['id' => 783054, 'country_code' => 'BR', 'name' => 'Paraná', 'active' => 1, 'slug' => 'parana'],
            ['id' => 783055, 'country_code' => 'BR', 'name' => 'Minas Gerais', 'active' => 1, 'slug' => 'minas-gerais'],
            ['id' => 783056, 'country_code' => 'BR', 'name' => 'Mato Grosso do Sul', 'active' => 1, 'slug' => 'mato-grosso-do-sul'],
            ['id' => 783057, 'country_code' => 'BR', 'name' => 'Mato Grosso', 'active' => 1, 'slug' => 'mato-grosso'],
            ['id' => 783058, 'country_code' => 'BR', 'name' => 'Goiás', 'active' => 1, 'slug' => 'goias'],
            ['id' => 783059, 'country_code' => 'BR', 'name' => 'Distrito Federal', 'active' => 1, 'slug' => 'distrito-federal'],
            ['id' => 783060, 'country_code' => 'BR', 'name' => 'Espírito Santo', 'active' => 1, 'slug' => 'espirito-santo'],
            ['id' => 783061, 'country_code' => 'BR', 'name' => 'Bahia', 'active' => 1, 'slug' => 'bahia'],
            ['id' => 783062, 'country_code' => 'BR', 'name' => 'Tocantins', 'active' => 1, 'slug' => 'tocantins'],
            ['id' => 783063, 'country_code' => 'BR', 'name' => 'Roraima', 'active' => 1, 'slug' => 'roraima'],
            ['id' => 783064, 'country_code' => 'BR', 'name' => 'Amazonas', 'active' => 1, 'slug' => 'amazonas'],
            ['id' => 783065, 'country_code' => 'BR', 'name' => 'Acre', 'active' => 1, 'slug' => 'acre'],
            ['id' => 783066, 'country_code' => 'BR', 'name' => 'Rondônia', 'active' => 1, 'slug' => 'rondonia']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
