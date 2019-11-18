<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class ItalyStatesSeeder extends Seeder
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
            ['id' => 782080, 'country_code' => 'IT', 'name' => 'Agrigento', 'active' => 1, 'slug' => 'agrigento'],
            ['id' => 782081, 'country_code' => 'IT', 'name' => 'Alessandria', 'active' => 1, 'slug' => 'alessandria'],
            ['id' => 782082, 'country_code' => 'IT', 'name' => 'Ancona', 'active' => 1, 'slug' => 'ancona'],
            ['id' => 782083, 'country_code' => 'IT', 'name' => 'Aosta', 'active' => 1, 'slug' => 'aosta'],
            ['id' => 782084, 'country_code' => 'IT', 'name' => 'Arezzo', 'active' => 1, 'slug' => 'arezzo'],
            ['id' => 782085, 'country_code' => 'IT', 'name' => 'Ascoli Piceno', 'active' => 1, 'slug' => 'ascoli-piceno'],
            ['id' => 782086, 'country_code' => 'IT', 'name' => 'Asti', 'active' => 1, 'slug' => 'asti'],
            ['id' => 782087, 'country_code' => 'IT', 'name' => 'Avellino', 'active' => 1, 'slug' => 'avellino'],
            ['id' => 782088, 'country_code' => 'IT', 'name' => 'Bari', 'active' => 1, 'slug' => 'bari'],
            ['id' => 782089, 'country_code' => 'IT', 'name' => 'Belluno', 'active' => 1, 'slug' => 'belluno'],
            ['id' => 782090, 'country_code' => 'IT', 'name' => 'Benevento', 'active' => 1, 'slug' => 'benevento'],
            ['id' => 782091, 'country_code' => 'IT', 'name' => 'Bergamo', 'active' => 1, 'slug' => 'bergamo'],
            ['id' => 782092, 'country_code' => 'IT', 'name' => 'Biella', 'active' => 1, 'slug' => 'biella'],
            ['id' => 782093, 'country_code' => 'IT', 'name' => 'Bologna', 'active' => 1, 'slug' => 'bologna'],
            ['id' => 782094, 'country_code' => 'IT', 'name' => 'Bolzano', 'active' => 1, 'slug' => 'bolzano'],
            ['id' => 782095, 'country_code' => 'IT', 'name' => 'Brescia', 'active' => 1, 'slug' => 'brescia'],
            ['id' => 782096, 'country_code' => 'IT', 'name' => 'Brindisi', 'active' => 1, 'slug' => 'brindisi'],
            ['id' => 782097, 'country_code' => 'IT', 'name' => 'Cagliari', 'active' => 1, 'slug' => 'cagliari'],
            ['id' => 782098, 'country_code' => 'IT', 'name' => 'Caltanissetta', 'active' => 1, 'slug' => 'caltanissetta'],
            ['id' => 782099, 'country_code' => 'IT', 'name' => 'Campobasso', 'active' => 1, 'slug' => 'campobasso'],
            ['id' => 782100, 'country_code' => 'IT', 'name' => 'Carbonia-Iglesias', 'active' => 1, 'slug' => 'carbonia-iglesias'],
            ['id' => 782101, 'country_code' => 'IT', 'name' => 'Caserta', 'active' => 1, 'slug' => 'caserta'],
            ['id' => 782102, 'country_code' => 'IT', 'name' => 'Catania', 'active' => 1, 'slug' => 'catania'],
            ['id' => 782103, 'country_code' => 'IT', 'name' => 'Catanzaro', 'active' => 1, 'slug' => 'catanzaro'],
            ['id' => 782104, 'country_code' => 'IT', 'name' => 'Chieti', 'active' => 1, 'slug' => 'chieti'],
            ['id' => 782105, 'country_code' => 'IT', 'name' => 'Como', 'active' => 1, 'slug' => 'como'],
            ['id' => 782106, 'country_code' => 'IT', 'name' => 'Cosenza', 'active' => 1, 'slug' => 'cosenza'],
            ['id' => 782107, 'country_code' => 'IT', 'name' => 'Cremona', 'active' => 1, 'slug' => 'cremona'],
            ['id' => 782108, 'country_code' => 'IT', 'name' => 'Crotone', 'active' => 1, 'slug' => 'crotone'],
            ['id' => 782109, 'country_code' => 'IT', 'name' => 'Cuneo', 'active' => 1, 'slug' => 'cuneo'],
            ['id' => 782110, 'country_code' => 'IT', 'name' => 'Enna', 'active' => 1, 'slug' => 'enna'],
            ['id' => 782111, 'country_code' => 'IT', 'name' => 'Ferrara', 'active' => 1, 'slug' => 'ferrara'],
            ['id' => 782112, 'country_code' => 'IT', 'name' => 'Firenze', 'active' => 1, 'slug' => 'firenze'],
            ['id' => 782113, 'country_code' => 'IT', 'name' => 'Foggia', 'active' => 1, 'slug' => 'foggia'],
            ['id' => 782114, 'country_code' => 'IT', 'name' => 'Forlì', 'active' => 1, 'slug' => 'forli'],
            ['id' => 782115, 'country_code' => 'IT', 'name' => 'Frosinone', 'active' => 1, 'slug' => 'frosinone'],
            ['id' => 782116, 'country_code' => 'IT', 'name' => 'Genova', 'active' => 1, 'slug' => 'genova'],
            ['id' => 782117, 'country_code' => 'IT', 'name' => 'Gorizia', 'active' => 1, 'slug' => 'gorizia'],
            ['id' => 782118, 'country_code' => 'IT', 'name' => 'Grosseto', 'active' => 1, 'slug' => 'grosseto'],
            ['id' => 782119, 'country_code' => 'IT', 'name' => 'Imperia', 'active' => 1, 'slug' => 'imperia'],
            ['id' => 782120, 'country_code' => 'IT', 'name' => 'Isernia', 'active' => 1, 'slug' => 'isernia'],
            ['id' => 782122, 'country_code' => 'IT', 'name' => 'La Spezia', 'active' => 1, 'slug' => 'la-spezia'],
            ['id' => 782123, 'country_code' => 'IT', 'name' => 'Latina', 'active' => 1, 'slug' => 'latina'],
            ['id' => 782124, 'country_code' => 'IT', 'name' => 'Lecce', 'active' => 1, 'slug' => 'lecce'],
            ['id' => 782125, 'country_code' => 'IT', 'name' => 'Lecco', 'active' => 1, 'slug' => 'lecco'],
            ['id' => 782126, 'country_code' => 'IT', 'name' => 'Livorno', 'active' => 1, 'slug' => 'livorno'],
            ['id' => 782127, 'country_code' => 'IT', 'name' => 'Lodi', 'active' => 1, 'slug' => 'lodi'],
            ['id' => 782128, 'country_code' => 'IT', 'name' => 'Lucca', 'active' => 1, 'slug' => 'lucca'],
            ['id' => 782129, 'country_code' => 'IT', 'name' => 'Macerata', 'active' => 1, 'slug' => 'macerata'],
            ['id' => 782130, 'country_code' => 'IT', 'name' => 'Mantova', 'active' => 1, 'slug' => 'mantova'],
            ['id' => 782131, 'country_code' => 'IT', 'name' => 'Massa-Carrara', 'active' => 1, 'slug' => 'massa-carrara'],
            ['id' => 782132, 'country_code' => 'IT', 'name' => 'Matera', 'active' => 1, 'slug' => 'matera'],
            ['id' => 782133, 'country_code' => 'IT', 'name' => 'Medio Campidano', 'active' => 1, 'slug' => 'medio-campidano'],
            ['id' => 782134, 'country_code' => 'IT', 'name' => 'Messina', 'active' => 1, 'slug' => 'messina'],
            ['id' => 782135, 'country_code' => 'IT', 'name' => 'Milano', 'active' => 1, 'slug' => 'milano'],
            ['id' => 782136, 'country_code' => 'IT', 'name' => 'Modena', 'active' => 1, 'slug' => 'modena'],
            ['id' => 782137, 'country_code' => 'IT', 'name' => 'Napoli', 'active' => 1, 'slug' => 'napoli'],
            ['id' => 782138, 'country_code' => 'IT', 'name' => 'Novara', 'active' => 1, 'slug' => 'novara'],
            ['id' => 782139, 'country_code' => 'IT', 'name' => 'Nuoro', 'active' => 1, 'slug' => 'nuoro'],
            ['id' => 782140, 'country_code' => 'IT', 'name' => 'Ogliastra', 'active' => 1, 'slug' => 'ogliastra'],
            ['id' => 782141, 'country_code' => 'IT', 'name' => 'Olbia-Tempio', 'active' => 1, 'slug' => 'olbia-tempio'],
            ['id' => 782142, 'country_code' => 'IT', 'name' => 'Oristano', 'active' => 1, 'slug' => 'oristano'],
            ['id' => 782143, 'country_code' => 'IT', 'name' => 'Padova', 'active' => 1, 'slug' => 'padova'],
            ['id' => 782144, 'country_code' => 'IT', 'name' => 'Palermo', 'active' => 1, 'slug' => 'palermo'],
            ['id' => 782145, 'country_code' => 'IT', 'name' => 'Parma', 'active' => 1, 'slug' => 'parma'],
            ['id' => 782146, 'country_code' => 'IT', 'name' => 'Pavia', 'active' => 1, 'slug' => 'pavia'],
            ['id' => 782147, 'country_code' => 'IT', 'name' => 'Perugia', 'active' => 1, 'slug' => 'perugia'],
            ['id' => 782148, 'country_code' => 'IT', 'name' => 'Pesaro e Urbino', 'active' => 1, 'slug' => 'pesaro-e-urbino'],
            ['id' => 782149, 'country_code' => 'IT', 'name' => 'Pescara', 'active' => 1, 'slug' => 'pescara'],
            ['id' => 782150, 'country_code' => 'IT', 'name' => 'Piacenza', 'active' => 1, 'slug' => 'piacenza'],
            ['id' => 782151, 'country_code' => 'IT', 'name' => 'Pisa', 'active' => 1, 'slug' => 'pisa'],
            ['id' => 782152, 'country_code' => 'IT', 'name' => 'Pistoia', 'active' => 1, 'slug' => 'pistoia'],
            ['id' => 782153, 'country_code' => 'IT', 'name' => 'Pordenone', 'active' => 1, 'slug' => 'pordenone'],
            ['id' => 782154, 'country_code' => 'IT', 'name' => 'Potenza', 'active' => 1, 'slug' => 'potenza'],
            ['id' => 782155, 'country_code' => 'IT', 'name' => 'Prato', 'active' => 1, 'slug' => 'prato'],
            ['id' => 782156, 'country_code' => 'IT', 'name' => 'Ragusa', 'active' => 1, 'slug' => 'ragusa'],
            ['id' => 782157, 'country_code' => 'IT', 'name' => 'Ravenna', 'active' => 1, 'slug' => 'ravenna'],
            ['id' => 782158, 'country_code' => 'IT', 'name' => 'Reggio di Calabria', 'active' => 1, 'slug' => 'reggio-di-calabria'],
            ['id' => 782159, 'country_code' => 'IT', 'name' => 'Reggio Emilia', 'active' => 1, 'slug' => 'reggio-emilia'],
            ['id' => 782160, 'country_code' => 'IT', 'name' => 'Rieti', 'active' => 1, 'slug' => 'rieti'],
            ['id' => 782161, 'country_code' => 'IT', 'name' => 'Rimini', 'active' => 1, 'slug' => 'rimini'],
            ['id' => 782162, 'country_code' => 'IT', 'name' => 'Roma', 'active' => 1, 'slug' => 'roma'],
            ['id' => 782163, 'country_code' => 'IT', 'name' => 'Rovigo', 'active' => 1, 'slug' => 'rovigo'],
            ['id' => 782164, 'country_code' => 'IT', 'name' => 'Salerno', 'active' => 1, 'slug' => 'salerno'],
            ['id' => 782165, 'country_code' => 'IT', 'name' => 'Sassari', 'active' => 1, 'slug' => 'sassari'],
            ['id' => 782166, 'country_code' => 'IT', 'name' => 'Savona', 'active' => 1, 'slug' => 'savona'],
            ['id' => 782167, 'country_code' => 'IT', 'name' => 'Siena', 'active' => 1, 'slug' => 'siena'],
            ['id' => 782168, 'country_code' => 'IT', 'name' => 'Siracusa', 'active' => 1, 'slug' => 'siracusa'],
            ['id' => 782169, 'country_code' => 'IT', 'name' => 'Sondrio', 'active' => 1, 'slug' => 'sondrio'],
            ['id' => 782170, 'country_code' => 'IT', 'name' => 'Taranto', 'active' => 1, 'slug' => 'taranto'],
            ['id' => 782171, 'country_code' => 'IT', 'name' => 'Teramo', 'active' => 1, 'slug' => 'teramo'],
            ['id' => 782172, 'country_code' => 'IT', 'name' => 'Terni', 'active' => 1, 'slug' => 'terni'],
            ['id' => 782173, 'country_code' => 'IT', 'name' => 'Torino', 'active' => 1, 'slug' => 'torino'],
            ['id' => 782174, 'country_code' => 'IT', 'name' => 'Trapani', 'active' => 1, 'slug' => 'trapani'],
            ['id' => 782175, 'country_code' => 'IT', 'name' => 'Trento', 'active' => 1, 'slug' => 'trento'],
            ['id' => 782176, 'country_code' => 'IT', 'name' => 'Treviso', 'active' => 1, 'slug' => 'treviso'],
            ['id' => 782177, 'country_code' => 'IT', 'name' => 'Trieste', 'active' => 1, 'slug' => 'trieste'],
            ['id' => 782178, 'country_code' => 'IT', 'name' => 'Udine', 'active' => 1, 'slug' => 'udine'],
            ['id' => 782179, 'country_code' => 'IT', 'name' => 'Varese', 'active' => 1, 'slug' => 'varese'],
            ['id' => 782180, 'country_code' => 'IT', 'name' => 'Venezia', 'active' => 1, 'slug' => 'venezia'],
            ['id' => 782181, 'country_code' => 'IT', 'name' => 'Verbano-Cusio-Ossola', 'active' => 1, 'slug' => 'verbano-cusio-ossola'],
            ['id' => 782182, 'country_code' => 'IT', 'name' => 'Vercelli', 'active' => 1, 'slug' => 'vercelli'],
            ['id' => 782183, 'country_code' => 'IT', 'name' => 'Verona', 'active' => 1, 'slug' => 'verona'],
            ['id' => 782184, 'country_code' => 'IT', 'name' => 'Vibo-Valentia', 'active' => 1, 'slug' => 'vibo-valentia'],
            ['id' => 782185, 'country_code' => 'IT', 'name' => 'Vicenza', 'active' => 1, 'slug' => 'vicenza'],
            ['id' => 782186, 'country_code' => 'IT', 'name' => 'Viterbo', 'active' => 1, 'slug' => 'viterbo']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
