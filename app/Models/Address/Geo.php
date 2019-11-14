<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Relationship\GeoRelationship as GeoRelationship;


class Geo extends Model
{
    use GeoRelationship, SoftDeletes;
    protected $table = 'geos';
    protected $fillable = ['created_at', 'updated_at', 'deleted_at', 'name', 'description'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
