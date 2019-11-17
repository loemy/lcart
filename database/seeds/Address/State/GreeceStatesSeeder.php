<?php

use App\Models\Address\State;
use App\Models\Address\Country;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class GreeceStatesSeeder extends Seeder
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
            ['id' => 783254, 'country_code' => 'GR', 'name' => 'Αθήνα - Βόρεια Προάστια', 'active' => 1, 'slug' => '%ce%91%ce%b8%ce%ae%ce%bd%ce%b1-%ce%92%cf%8c%cf%81%ce%b5%ce%b9%ce%b1-%ce%a0%cf%81%ce%bf%ce%ac%cf%83%cf%84%ce%b9%ce%b1'],
            ['id' => 783255, 'country_code' => 'GR', 'name' => 'Αθήνα - Κέντρο', 'active' => 1, 'slug' => '%ce%91%ce%b8%ce%ae%ce%bd%ce%b1-%ce%9a%ce%ad%ce%bd%cf%84%cf%81%ce%bf'],
            ['id' => 783256, 'country_code' => 'GR', 'name' => 'Νομός Αργολίδας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%91%cf%81%ce%b3%ce%bf%ce%bb%ce%af%ce%b4%ce%b1%cf%82'],
            ['id' => 783257, 'country_code' => 'GR', 'name' => 'Αθήνα - Ανατολικά Προάστια', 'active' => 1, 'slug' => '%ce%91%ce%b8%ce%ae%ce%bd%ce%b1-%ce%91%ce%bd%ce%b1%cf%84%ce%bf%ce%bb%ce%b9%ce%ba%ce%ac-%ce%a0%cf%81%ce%bf%ce%ac%cf%83%cf%84%ce%b9%ce%b1'],
            ['id' => 783258, 'country_code' => 'GR', 'name' => 'Αθήνα - Δυτικά Προάστια', 'active' => 1, 'slug' => '%ce%91%ce%b8%ce%ae%ce%bd%ce%b1-%ce%94%cf%85%cf%84%ce%b9%ce%ba%ce%ac-%ce%a0%cf%81%ce%bf%ce%ac%cf%83%cf%84%ce%b9%ce%b1'],
            ['id' => 783259, 'country_code' => 'GR', 'name' => 'Αθήνα - Νότια Προάστια', 'active' => 1, 'slug' => '%ce%91%ce%b8%ce%ae%ce%bd%ce%b1-%ce%9d%cf%8c%cf%84%ce%b9%ce%b1-%ce%a0%cf%81%ce%bf%ce%ac%cf%83%cf%84%ce%b9%ce%b1'],
            ['id' => 783260, 'country_code' => 'GR', 'name' => 'Θεσσαλονίκη - Περιφ. Δήμοι', 'active' => 1, 'slug' => '%ce%98%ce%b5%cf%83%cf%83%ce%b1%ce%bb%ce%bf%ce%bd%ce%af%ce%ba%ce%b7-%ce%a0%ce%b5%cf%81%ce%b9%cf%86-%ce%94%ce%ae%ce%bc%ce%bf%ce%b9'],
            ['id' => 783261, 'country_code' => 'GR', 'name' => 'Θεσσαλονίκη - Κέντρο', 'active' => 1, 'slug' => '%ce%98%ce%b5%cf%83%cf%83%ce%b1%ce%bb%ce%bf%ce%bd%ce%af%ce%ba%ce%b7-%ce%9a%ce%ad%ce%bd%cf%84%cf%81%ce%bf'],
            ['id' => 783262, 'country_code' => 'GR', 'name' => 'Θεσσαλονίκη - Υπόλ. Νομού', 'active' => 1, 'slug' => '%ce%98%ce%b5%cf%83%cf%83%ce%b1%ce%bb%ce%bf%ce%bd%ce%af%ce%ba%ce%b7-%ce%a5%cf%80%cf%8c%ce%bb-%ce%9d%ce%bf%ce%bc%ce%bf%cf%8d'],
            ['id' => 783263, 'country_code' => 'GR', 'name' => 'Αττική Ανατολική - Υπόλοιπο', 'active' => 1, 'slug' => '%ce%91%cf%84%cf%84%ce%b9%ce%ba%ce%ae-%ce%91%ce%bd%ce%b1%cf%84%ce%bf%ce%bb%ce%b9%ce%ba%ce%ae-%ce%a5%cf%80%cf%8c%ce%bb%ce%bf%ce%b9%cf%80%ce%bf'],
            ['id' => 783264, 'country_code' => 'GR', 'name' => 'Αττική Δυτική  - Υπόλοιπο', 'active' => 1, 'slug' => '%ce%91%cf%84%cf%84%ce%b9%ce%ba%ce%ae-%ce%94%cf%85%cf%84%ce%b9%ce%ba%ce%ae-%ce%a5%cf%80%cf%8c%ce%bb%ce%bf%ce%b9%cf%80%ce%bf'],
            ['id' => 783265, 'country_code' => 'GR', 'name' => 'Νομός Αιτωλοακαρνανίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%91%ce%b9%cf%84%cf%89%ce%bb%ce%bf%ce%b1%ce%ba%ce%b1%cf%81%ce%bd%ce%b1%ce%bd%ce%af%ce%b1%cf%82'],
            ['id' => 783266, 'country_code' => 'GR', 'name' => 'Νομός Άρτας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%86%cf%81%cf%84%ce%b1%cf%82'],
            ['id' => 783267, 'country_code' => 'GR', 'name' => 'Νομός Αχαΐας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%91%cf%87%ce%b1%ce%90%ce%b1%cf%82'],
            ['id' => 783268, 'country_code' => 'GR', 'name' => 'Νομός Χίου', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a7%ce%af%ce%bf%cf%85'],
            ['id' => 783269, 'country_code' => 'GR', 'name' => 'Πειραιάς - Προάστεια', 'active' => 1, 'slug' => '%ce%a0%ce%b5%ce%b9%cf%81%ce%b1%ce%b9%ce%ac%cf%82-%ce%a0%cf%81%ce%bf%ce%ac%cf%83%cf%84%ce%b5%ce%b9%ce%b1'],
            ['id' => 783270, 'country_code' => 'GR', 'name' => 'Πειραιάς - Αργοσαρωνικός', 'active' => 1, 'slug' => '%ce%a0%ce%b5%ce%b9%cf%81%ce%b1%ce%b9%ce%ac%cf%82-%ce%91%cf%81%ce%b3%ce%bf%cf%83%ce%b1%cf%81%cf%89%ce%bd%ce%b9%ce%ba%cf%8c%cf%82'],
            ['id' => 783271, 'country_code' => 'GR', 'name' => 'Πειραιάς', 'active' => 1, 'slug' => '%ce%a0%ce%b5%ce%b9%cf%81%ce%b1%ce%b9%ce%ac%cf%82'],
            ['id' => 783272, 'country_code' => 'GR', 'name' => 'Νομός Πέλλας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a0%ce%ad%ce%bb%ce%bb%ce%b1%cf%82'],
            ['id' => 783273, 'country_code' => 'GR', 'name' => 'Νομός Ξάνθης', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9e%ce%ac%ce%bd%ce%b8%ce%b7%cf%82'],
            ['id' => 783274, 'country_code' => 'GR', 'name' => 'Νομός Κυκλάδων', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%cf%85%ce%ba%ce%bb%ce%ac%ce%b4%cf%89%ce%bd'],
            ['id' => 783275, 'country_code' => 'GR', 'name' => 'Νομός Ημαθίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%97%ce%bc%ce%b1%ce%b8%ce%af%ce%b1%cf%82'],
            ['id' => 783276, 'country_code' => 'GR', 'name' => 'Νομός Λευκάδας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9b%ce%b5%cf%85%ce%ba%ce%ac%ce%b4%ce%b1%cf%82'],
            ['id' => 783277, 'country_code' => 'GR', 'name' => 'Νομός Έβρου', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%88%ce%b2%cf%81%ce%bf%cf%85'],
            ['id' => 783278, 'country_code' => 'GR', 'name' => 'Νομός Κέρκυρας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%ce%ad%cf%81%ce%ba%cf%85%cf%81%ce%b1%cf%82'],
            ['id' => 783279, 'country_code' => 'GR', 'name' => 'Νομός Βοιωτίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%92%ce%bf%ce%b9%cf%89%cf%84%ce%af%ce%b1%cf%82'],
            ['id' => 783280, 'country_code' => 'GR', 'name' => 'Νομός Χανίων', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a7%ce%b1%ce%bd%ce%af%cf%89%ce%bd'],
            ['id' => 783281, 'country_code' => 'GR', 'name' => 'Νομός Κοζάνης', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%ce%bf%ce%b6%ce%ac%ce%bd%ce%b7%cf%82'],
            ['id' => 783282, 'country_code' => 'GR', 'name' => 'Νομός Λασιθίου', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9b%ce%b1%cf%83%ce%b9%ce%b8%ce%af%ce%bf%cf%85'],
            ['id' => 783283, 'country_code' => 'GR', 'name' => 'Νομός Κεφαλληνίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%ce%b5%cf%86%ce%b1%ce%bb%ce%bb%ce%b7%ce%bd%ce%af%ce%b1%cf%82'],
            ['id' => 783284, 'country_code' => 'GR', 'name' => 'Νομός Ζακύνθου', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%96%ce%b1%ce%ba%cf%8d%ce%bd%ce%b8%ce%bf%cf%85'],
            ['id' => 783285, 'country_code' => 'GR', 'name' => 'Νομός Πιερίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a0%ce%b9%ce%b5%cf%81%ce%af%ce%b1%cf%82'],
            ['id' => 783286, 'country_code' => 'GR', 'name' => 'Νομός Καβάλας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%ce%b1%ce%b2%ce%ac%ce%bb%ce%b1%cf%82'],
            ['id' => 783287, 'country_code' => 'GR', 'name' => 'Νομός Γρεβενών', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%93%cf%81%ce%b5%ce%b2%ce%b5%ce%bd%cf%8e%ce%bd'],
            ['id' => 783288, 'country_code' => 'GR', 'name' => 'Νομός Ροδόπης', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a1%ce%bf%ce%b4%cf%8c%cf%80%ce%b7%cf%82'],
            ['id' => 783289, 'country_code' => 'GR', 'name' => 'Νομός Δράμας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%94%cf%81%ce%ac%ce%bc%ce%b1%cf%82'],
            ['id' => 783290, 'country_code' => 'GR', 'name' => 'Νομός Κιλκίς', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%ce%b9%ce%bb%ce%ba%ce%af%cf%82'],
            ['id' => 783291, 'country_code' => 'GR', 'name' => 'Νομός Σάμου', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a3%ce%ac%ce%bc%ce%bf%cf%85'],
            ['id' => 783292, 'country_code' => 'GR', 'name' => 'Νομός Ρεθύμνης', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a1%ce%b5%ce%b8%cf%8d%ce%bc%ce%bd%ce%b7%cf%82'],
            ['id' => 783293, 'country_code' => 'GR', 'name' => 'Νομός Εύβοιας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%95%cf%8d%ce%b2%ce%bf%ce%b9%ce%b1%cf%82'],
            ['id' => 783294, 'country_code' => 'GR', 'name' => 'Νομός Πρέβεζας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a0%cf%81%ce%ad%ce%b2%ce%b5%ce%b6%ce%b1%cf%82'],
            ['id' => 783295, 'country_code' => 'GR', 'name' => 'Νομός Λέσβου', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9b%ce%ad%cf%83%ce%b2%ce%bf%cf%85'],
            ['id' => 783296, 'country_code' => 'GR', 'name' => 'Νομός Φωκίδας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a6%cf%89%ce%ba%ce%af%ce%b4%ce%b1%cf%82'],
            ['id' => 783297, 'country_code' => 'GR', 'name' => 'Νομός Φλώρινας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a6%ce%bb%cf%8e%cf%81%ce%b9%ce%bd%ce%b1%cf%82'],
            ['id' => 783298, 'country_code' => 'GR', 'name' => 'Νομός Θεσπρωτίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%98%ce%b5%cf%83%cf%80%cf%81%cf%89%cf%84%ce%af%ce%b1%cf%82'],
            ['id' => 783299, 'country_code' => 'GR', 'name' => 'Νομός Ευρυτανίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%95%cf%85%cf%81%cf%85%cf%84%ce%b1%ce%bd%ce%af%ce%b1%cf%82'],
            ['id' => 783300, 'country_code' => 'GR', 'name' => 'Νομός Φθιώτιδας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a6%ce%b8%ce%b9%cf%8e%cf%84%ce%b9%ce%b4%ce%b1%cf%82'],
            ['id' => 783301, 'country_code' => 'GR', 'name' => 'Νομός Αρκαδίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%91%cf%81%ce%ba%ce%b1%ce%b4%ce%af%ce%b1%cf%82'],
            ['id' => 783302, 'country_code' => 'GR', 'name' => 'Νομός Καστοριάς', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%ce%b1%cf%83%cf%84%ce%bf%cf%81%ce%b9%ce%ac%cf%82'],
            ['id' => 783303, 'country_code' => 'GR', 'name' => 'Νομός Χαλκιδικής', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a7%ce%b1%ce%bb%ce%ba%ce%b9%ce%b4%ce%b9%ce%ba%ce%ae%cf%82'],
            ['id' => 783304, 'country_code' => 'GR', 'name' => 'Νομός Μεσσηνίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9c%ce%b5%cf%83%cf%83%ce%b7%ce%bd%ce%af%ce%b1%cf%82'],
            ['id' => 783305, 'country_code' => 'GR', 'name' => 'Νομός Σερρών', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a3%ce%b5%cf%81%cf%81%cf%8e%ce%bd'],
            ['id' => 783306, 'country_code' => 'GR', 'name' => 'Νομός Καρδίτσας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%ce%b1%cf%81%ce%b4%ce%af%cf%84%cf%83%ce%b1%cf%82'],
            ['id' => 783307, 'country_code' => 'GR', 'name' => 'Νομός Ηρακλείου', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%97%cf%81%ce%b1%ce%ba%ce%bb%ce%b5%ce%af%ce%bf%cf%85'],
            ['id' => 783308, 'country_code' => 'GR', 'name' => 'Νομός Δωδεκανήσου', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%94%cf%89%ce%b4%ce%b5%ce%ba%ce%b1%ce%bd%ce%ae%cf%83%ce%bf%cf%85'],
            ['id' => 783309, 'country_code' => 'GR', 'name' => 'Νομός Κορινθίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9a%ce%bf%cf%81%ce%b9%ce%bd%ce%b8%ce%af%ce%b1%cf%82'],
            ['id' => 783310, 'country_code' => 'GR', 'name' => 'Νομός Λακωνίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9b%ce%b1%ce%ba%cf%89%ce%bd%ce%af%ce%b1%cf%82'],
            ['id' => 783311, 'country_code' => 'GR', 'name' => 'Νομός Ηλείας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%97%ce%bb%ce%b5%ce%af%ce%b1%cf%82'],
            ['id' => 783312, 'country_code' => 'GR', 'name' => 'Νομός Ιωαννίνων', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%99%cf%89%ce%b1%ce%bd%ce%bd%ce%af%ce%bd%cf%89%ce%bd'],
            ['id' => 783313, 'country_code' => 'GR', 'name' => 'Νομός Τρικάλων', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%a4%cf%81%ce%b9%ce%ba%ce%ac%ce%bb%cf%89%ce%bd'],
            ['id' => 783314, 'country_code' => 'GR', 'name' => 'Νομός Λάρισας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9b%ce%ac%cf%81%ce%b9%cf%83%ce%b1%cf%82'],
            ['id' => 783315, 'country_code' => 'GR', 'name' => 'Νομός Μαγνησίας', 'active' => 1, 'slug' => '%ce%9d%ce%bf%ce%bc%cf%8c%cf%82-%ce%9c%ce%b1%ce%b3%ce%bd%ce%b7%cf%83%ce%af%ce%b1%cf%82']

        ];

        State::create($state);
        $this->enableForeignKeys();

    }
}
