<?php

use Carbon\Carbon;
use App\Models\System\Weight;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;

class WeightsTableSeeder extends Seeder
{

    use DisableForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('weights');
        $weight = [
            ['title' => __('Kilogram'), 'unit' => 'kg', 'value' =>'1.00000000', 'is_default'=>1,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Gram'), 'unit' => 'g', 'value' =>'1000.00000000', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Pound'), 'unit' => 'lb', 'value' =>'2.205', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Ounces'), 'unit' => 'oz', 'value' =>'35.27396', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Stones'), 'unit' => 'st', 'value' =>'0.15747', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Tonnes'), 'unit' => 't', 'value' =>'0.001', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],








        ];

       weight::create($weight);

        $this->enableForeignKeys();
    }
}
