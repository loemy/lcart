<?php

namespace App\Models\System;

use App\Models\System\Attribute\LengthAttribute;
use App\Models\System\Relationship\LengthRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Length extends Model
{
    use LengthRelationship, SoftDeletes, LengthAttribute;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lengths';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'deleted_at', 'value', 'title', 'unit', 'is_default'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_default'  => 'integer'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    public function scopeDefault($query) {
       return $query->where('is_default', 1);
    }
}
