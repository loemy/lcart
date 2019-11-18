<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class PeruStatesSeeder extends Seeder
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
            ['id' => 782246, 'country_code' => 'PE', 'name' => 'Amazonas', 'active' => 1, 'slug' => 'amazonas'],
            ['id' => 782247, 'country_code' => 'PE', 'name' => 'Ancash', 'active' => 1, 'slug' => 'ancash'],
            ['id' => 782248, 'country_code' => 'PE', 'name' => 'Apurimac', 'active' => 1, 'slug' => 'apurimac'],
            ['id' => 782249, 'country_code' => 'PE', 'name' => 'Arequipa', 'active' => 1, 'slug' => 'arequipa'],
            ['id' => 782250, 'country_code' => 'PE', 'name' => 'Ayacucho', 'active' => 1, 'slug' => 'ayacucho'],
            ['id' => 782251, 'country_code' => 'PE', 'name' => 'Cajamarca', 'active' => 1, 'slug' => 'cajamarca'],
            ['id' => 782252, 'country_code' => 'PE', 'name' => 'Callao', 'active' => 1, 'slug' => 'callao'],
            ['id' => 782253, 'country_code' => 'PE', 'name' => 'Cusco', 'active' => 1, 'slug' => 'cusco'],
            ['id' => 782254, 'country_code' => 'PE', 'name' => 'Huancavelica', 'active' => 1, 'slug' => 'huancavelica'],
            ['id' => 782255, 'country_code' => 'PE', 'name' => 'Huanuco', 'active' => 1, 'slug' => 'huanuco'],
            ['id' => 782256, 'country_code' => 'PE', 'name' => 'Ica', 'active' => 1, 'slug' => 'ica'],
            ['id' => 782257, 'country_code' => 'PE', 'name' => 'Junín', 'active' => 1, 'slug' => 'junin'],
            ['id' => 782258, 'country_code' => 'PE', 'name' => 'La Libertad', 'active' => 1, 'slug' => 'la-libertad'],
            ['id' => 782259, 'country_code' => 'PE', 'name' => 'Lambayeque', 'active' => 1, 'slug' => 'lambayeque'],
            ['id' => 782260, 'country_code' => 'PE', 'name' => 'Lima', 'active' => 1, 'slug' => 'lima'],
            ['id' => 782261, 'country_code' => 'PE', 'name' => 'Loreto', 'active' => 1, 'slug' => 'loreto'],
            ['id' => 782262, 'country_code' => 'PE', 'name' => 'Madre de Dios', 'active' => 1, 'slug' => 'madre-de-dios'],
            ['id' => 782263, 'country_code' => 'PE', 'name' => 'Moquegua', 'active' => 1, 'slug' => 'moquegua'],
            ['id' => 782264, 'country_code' => 'PE', 'name' => 'Pasco', 'active' => 1, 'slug' => 'pasco'],
            ['id' => 782265, 'country_code' => 'PE', 'name' => 'Piura', 'active' => 1, 'slug' => 'piura'],
            ['id' => 782266, 'country_code' => 'PE', 'name' => 'Puno', 'active' => 1, 'slug' => 'puno'],
            ['id' => 782267, 'country_code' => 'PE', 'name' => 'San Martín', 'active' => 1, 'slug' => 'san-martin'],
            ['id' => 782268, 'country_code' => 'PE', 'name' => 'Tacna', 'active' => 1, 'slug' => 'tacna'],
            ['id' => 782269, 'country_code' => 'PE', 'name' => 'Tumbes', 'active' => 1, 'slug' => 'tumbes'],
            ['id' => 782270, 'country_code' => 'PE', 'name' => 'Ucayali', 'active' => 1, 'slug' => 'ucayali']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
