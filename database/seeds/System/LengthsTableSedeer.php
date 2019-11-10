<?php

use App\Models\System\Length;
use Database\DisableForeignKeys;
use Database\TruncateTable;
use Illuminate\Database\Seeder;



class LengthsTableSedeer extends Seeder
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
        $this->truncate('lengths');
        $length = [
            ['title' => __('Centimetre'), 'unit' => 'cm', 'value' =>'1.00000000', 'is_default'=>1,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Millimetre'), 'unit' => 'mm', 'value' =>'10.00000000', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Metre'), 'unit' => 'm', 'value' =>'0.010000000', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Inch'), 'unit' => 'in', 'value' =>'0.39370079', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Feet'), 'unit' => 'ft', 'value' =>'0.03280840', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['title' => __('Yard'), 'unit' => 'yd', 'value' =>'0.01093613', 'is_default'=>0,'created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],








        ];

       Length::create($length);

        $this->enableForeignKeys();
    }
}
