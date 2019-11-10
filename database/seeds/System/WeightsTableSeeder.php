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
            ['name' => __('Can View'), 'slug' => 'view.', 'description' =>__('Can View'), 'model'=>'Permission','created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['name' => __('Can Create'), 'slug' => 'create.', 'description' =>__('Can Create New'), 'model'=>'Permission','created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['name' => __('Can Edit'), 'slug' => 'edit.', 'description' =>__('Can Edit'), 'model'=>'Permission','created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],
            ['name' => __('Can Delete'), 'slug' => 'delete.', 'description' =>__('Can Delete'), 'model'=>'Permission','created_at' => Carbon::now(),'update_at' => Carbon::now(), 'deleted_at' =>null,],








        ];

       weight::create($weight);

        $this->enableForeignKeys();
    }
}
