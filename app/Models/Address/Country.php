<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Relationship\CountryRelationship;

class Country extends Model
{
    use SoftDeletes, CountryRelationship;
    protected $table = 'countries';
    protected $fillable = ['deleted_at', 'iso_code_2', 'iso_code_3', 'status', 'calling_code', 'name'];
    protected $casts = ['status' => 'integer'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function getCountrieslists($empty = false)
    {
        $model = new static();
        if(true === $empty)
        {
            $return = Collection::make(['' => __('Please Select')] + $model->orderBy('name', 'asc')->pluck('name', 'id')->toArray());
        } else {
            $return = $model->all()->pluck('name', 'id');
        }
        return $return;
    }


}
