<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Relationship\CityRelationship as CityRelationship;


class City extends Model
{
   use CityRelationship, SoftDeletes;
   protected $table = 'cities';
   protected $fillable = ['created_at', 'updated_at', 'deleted_at', 'state_id', 'name'];
   protected $dates = ['created_at', 'updated_at', 'deleted_at'];
   protected $casts = ['state_id' => 'integer'];



}
