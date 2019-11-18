<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class PuertoRicoStatesSeeder extends Seeder
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
            ['id' => 737030, 'country_code' => 'PR', 'name' => 'Adjuntas', 'active' => 1, 'slug' => 'adjuntas'],
            ['id' => 737047, 'country_code' => 'PR', 'name' => 'Aguada', 'active' => 1, 'slug' => 'aguada'],
            ['id' => 737066, 'country_code' => 'PR', 'name' => 'Aguadilla', 'active' => 1, 'slug' => 'aguadilla'],
            ['id' => 737084, 'country_code' => 'PR', 'name' => 'Aguas Buenas', 'active' => 1, 'slug' => 'aguas-buenas'],
            ['id' => 737096, 'country_code' => 'PR', 'name' => 'Aibonito', 'active' => 1, 'slug' => 'aibonito'],
            ['id' => 737106, 'country_code' => 'PR', 'name' => 'Anasco', 'active' => 1, 'slug' => 'anasco'],
            ['id' => 737127, 'country_code' => 'PR', 'name' => 'Arecibo', 'active' => 1, 'slug' => 'arecibo'],
            ['id' => 737147, 'country_code' => 'PR', 'name' => 'Arroyo', 'active' => 1, 'slug' => 'arroyo'],
            ['id' => 737154, 'country_code' => 'PR', 'name' => 'Barceloneta', 'active' => 1, 'slug' => 'barceloneta'],
            ['id' => 737159, 'country_code' => 'PR', 'name' => 'Barranquitas', 'active' => 1, 'slug' => 'barranquitas'],
            ['id' => 737167, 'country_code' => 'PR', 'name' => 'Bayamon', 'active' => 1, 'slug' => 'bayamon'],
            ['id' => 737179, 'country_code' => 'PR', 'name' => 'Cabo Rojo', 'active' => 1, 'slug' => 'cabo-rojo'],
            ['id' => 737189, 'country_code' => 'PR', 'name' => 'Caguas', 'active' => 1, 'slug' => 'caguas'],
            ['id' => 737202, 'country_code' => 'PR', 'name' => 'Camuy', 'active' => 1, 'slug' => 'camuy'],
            ['id' => 737216, 'country_code' => 'PR', 'name' => 'Canovanas', 'active' => 1, 'slug' => 'canovanas'],
            ['id' => 737225, 'country_code' => 'PR', 'name' => 'Carolina', 'active' => 1, 'slug' => 'carolina'],
            ['id' => 737239, 'country_code' => 'PR', 'name' => 'Catano', 'active' => 1, 'slug' => 'catano'],
            ['id' => 737248, 'country_code' => 'PR', 'name' => 'Cayey', 'active' => 1, 'slug' => 'cayey'],
            ['id' => 737271, 'country_code' => 'PR', 'name' => 'Ceiba', 'active' => 1, 'slug' => 'ceiba'],
            ['id' => 737280, 'country_code' => 'PR', 'name' => 'Ciales', 'active' => 1, 'slug' => 'ciales'],
            ['id' => 737290, 'country_code' => 'PR', 'name' => 'Cidra', 'active' => 1, 'slug' => 'cidra'],
            ['id' => 737302, 'country_code' => 'PR', 'name' => 'Coamo', 'active' => 1, 'slug' => 'coamo'],
            ['id' => 737314, 'country_code' => 'PR', 'name' => 'Comerio', 'active' => 1, 'slug' => 'comerio'],
            ['id' => 737323, 'country_code' => 'PR', 'name' => 'Corozal', 'active' => 1, 'slug' => 'corozal'],
            ['id' => 737335, 'country_code' => 'PR', 'name' => 'Culebra', 'active' => 1, 'slug' => 'culebra'],
            ['id' => 737356, 'country_code' => 'PR', 'name' => 'Dorado', 'active' => 1, 'slug' => 'dorado'],
            ['id' => 737363, 'country_code' => 'PR', 'name' => 'Fajardo', 'active' => 1, 'slug' => 'fajardo'],
            ['id' => 737374, 'country_code' => 'PR', 'name' => 'Florida', 'active' => 1, 'slug' => 'florida'],
            ['id' => 737377, 'country_code' => 'PR', 'name' => 'Guanica', 'active' => 1, 'slug' => 'guanica'],
            ['id' => 737386, 'country_code' => 'PR', 'name' => 'Guayama', 'active' => 1, 'slug' => 'guayama'],
            ['id' => 737397, 'country_code' => 'PR', 'name' => 'Guayanilla', 'active' => 1, 'slug' => 'guayanilla'],
            ['id' => 737413, 'country_code' => 'PR', 'name' => 'Guaynabo', 'active' => 1, 'slug' => 'guaynabo'],
            ['id' => 737428, 'country_code' => 'PR', 'name' => 'Gurabo', 'active' => 1, 'slug' => 'gurabo'],
            ['id' => 737438, 'country_code' => 'PR', 'name' => 'Hatillo', 'active' => 1, 'slug' => 'hatillo'],
            ['id' => 737448, 'country_code' => 'PR', 'name' => 'Hormigueros', 'active' => 1, 'slug' => 'hormigueros'],
            ['id' => 737454, 'country_code' => 'PR', 'name' => 'Humacao', 'active' => 1, 'slug' => 'humacao'],
            ['id' => 737468, 'country_code' => 'PR', 'name' => 'Isabela', 'active' => 1, 'slug' => 'isabela'],
            ['id' => 737483, 'country_code' => 'PR', 'name' => 'Jayuya', 'active' => 1, 'slug' => 'jayuya'],
            ['id' => 737494, 'country_code' => 'PR', 'name' => 'Juana Díaz', 'active' => 1, 'slug' => 'juana-diaz'],
            ['id' => 737508, 'country_code' => 'PR', 'name' => 'Juncos', 'active' => 1, 'slug' => 'juncos'],
            ['id' => 737519, 'country_code' => 'PR', 'name' => 'Lajas', 'active' => 1, 'slug' => 'lajas'],
            ['id' => 737531, 'country_code' => 'PR', 'name' => 'Lares', 'active' => 1, 'slug' => 'lares'],
            ['id' => 737542, 'country_code' => 'PR', 'name' => 'Las Marías', 'active' => 1, 'slug' => 'las-marias'],
            ['id' => 737557, 'country_code' => 'PR', 'name' => 'Las Piedras', 'active' => 1, 'slug' => 'las-piedras'],
            ['id' => 737566, 'country_code' => 'PR', 'name' => 'Loiza', 'active' => 1, 'slug' => 'loiza'],
            ['id' => 737573, 'country_code' => 'PR', 'name' => 'Luquillo', 'active' => 1, 'slug' => 'luquillo'],
            ['id' => 737580, 'country_code' => 'PR', 'name' => 'Manati', 'active' => 1, 'slug' => 'manati'],
            ['id' => 737591, 'country_code' => 'PR', 'name' => 'Maricao', 'active' => 1, 'slug' => 'maricao'],
            ['id' => 737599, 'country_code' => 'PR', 'name' => 'Maunabo', 'active' => 1, 'slug' => 'maunabo'],
            ['id' => 737609, 'country_code' => 'PR', 'name' => 'Mayaguez', 'active' => 1, 'slug' => 'mayaguez'],
            ['id' => 737630, 'country_code' => 'PR', 'name' => 'Moca', 'active' => 1, 'slug' => 'moca'],
            ['id' => 737642, 'country_code' => 'PR', 'name' => 'Morovis', 'active' => 1, 'slug' => 'morovis'],
            ['id' => 737656, 'country_code' => 'PR', 'name' => 'Naguabo', 'active' => 1, 'slug' => 'naguabo'],
            ['id' => 737669, 'country_code' => 'PR', 'name' => 'Naranjito', 'active' => 1, 'slug' => 'naranjito'],
            ['id' => 737678, 'country_code' => 'PR', 'name' => 'Orocovis', 'active' => 1, 'slug' => 'orocovis'],
            ['id' => 737694, 'country_code' => 'PR', 'name' => 'Patillas', 'active' => 1, 'slug' => 'patillas'],
            ['id' => 737711, 'country_code' => 'PR', 'name' => 'Peñuelas', 'active' => 1, 'slug' => 'penuelas'],
            ['id' => 737726, 'country_code' => 'PR', 'name' => 'Ponce', 'active' => 1, 'slug' => 'ponce'],
            ['id' => 737762, 'country_code' => 'PR', 'name' => 'Quebradillas', 'active' => 1, 'slug' => 'quebradillas'],
            ['id' => 737771, 'country_code' => 'PR', 'name' => 'Rincón', 'active' => 1, 'slug' => 'rincon'],
            ['id' => 737783, 'country_code' => 'PR', 'name' => 'Rio Grande', 'active' => 1, 'slug' => 'rio-grande'],
            ['id' => 737793, 'country_code' => 'PR', 'name' => 'Sabana Grande', 'active' => 1, 'slug' => 'sabana-grande'],
            ['id' => 737802, 'country_code' => 'PR', 'name' => 'Salinas', 'active' => 1, 'slug' => 'salinas'],
            ['id' => 737811, 'country_code' => 'PR', 'name' => 'San German', 'active' => 1, 'slug' => 'san-german'],
            ['id' => 737830, 'country_code' => 'PR', 'name' => 'San Juan', 'active' => 1, 'slug' => 'san-juan'],
            ['id' => 737847, 'country_code' => 'PR', 'name' => 'San Lorenzo', 'active' => 1, 'slug' => 'san-lorenzo'],
            ['id' => 737859, 'country_code' => 'PR', 'name' => 'San Sebastian', 'active' => 1, 'slug' => 'san-sebastian'],
            ['id' => 737885, 'country_code' => 'PR', 'name' => 'Santa Isabel', 'active' => 1, 'slug' => 'santa-isabel'],
            ['id' => 737892, 'country_code' => 'PR', 'name' => 'Toa Alta', 'active' => 1, 'slug' => 'toa-alta'],
            ['id' => 737902, 'country_code' => 'PR', 'name' => 'Toa Baja', 'active' => 1, 'slug' => 'toa-baja'],
            ['id' => 737909, 'country_code' => 'PR', 'name' => 'Trujillo Alto', 'active' => 1, 'slug' => 'trujillo-alto'],
            ['id' => 737917, 'country_code' => 'PR', 'name' => 'Utuado', 'active' => 1, 'slug' => 'utuado'],
            ['id' => 737940, 'country_code' => 'PR', 'name' => 'Vega Alta', 'active' => 1, 'slug' => 'vega-alta'],
            ['id' => 737949, 'country_code' => 'PR', 'name' => 'Vega Baja', 'active' => 1, 'slug' => 'vega-baja'],
            ['id' => 737964, 'country_code' => 'PR', 'name' => 'Vieques', 'active' => 1, 'slug' => 'vieques'],
            ['id' => 737974, 'country_code' => 'PR', 'name' => 'Villalba', 'active' => 1, 'slug' => 'villalba'],
            ['id' => 737982, 'country_code' => 'PR', 'name' => 'Yabucoa', 'active' => 1, 'slug' => 'yabucoa'],
            ['id' => 737993, 'country_code' => 'PR', 'name' => 'Yauco', 'active' => 1, 'slug' => 'yauco']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
