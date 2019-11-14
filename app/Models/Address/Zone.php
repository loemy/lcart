<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Relationship\ZoneRelationship;

class Zone extends Model
{
    use ZoneRelationship;
    protected $table = 'zones';
    protected $fillable = ['country_id', 'state_id', 'geo_id'];
    protected $casts = ['country_id' => 'integer', 'state_id' => 'integer', 'geo_id' => 'integer'];
    protected $dates = ['created_at', 'updated_at'];


}
