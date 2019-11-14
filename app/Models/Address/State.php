<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Relationship\StateRelationship;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use StateRelationship, SoftDeletes;
    protected $table = 'states';
    protected $fillable = ['deleted_at', 'country_id', 'code', 'name', 'status'];
    protected $casts = ['country_id' => 'integer', 'status' => 'integer'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
