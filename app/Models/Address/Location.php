<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Address\Relationship\LocationRelationship;

class Location extends Model
{
    use SoftDeletes, LocationRelationship;
    protected $table = 'locations';
    protected $fillable = ['created_at', 'updated_at', 'deleted_at', 'parent_id', 'lft', 'rgt', 'depth', 'name', 'address_id', 'open', 'comment', 'image'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts = ['parent_id' => 'integer', 'lft' => 'integer', 'rgt' => 'integer', 'depth' => 'integer', 'address_id' => 'integer'];
}
