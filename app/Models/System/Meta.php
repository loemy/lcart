<?php

namespace App\Models\System;

use App\Models\System\Relationship\MetaRelationship;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use MetaRelationship;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'metadatas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'title', 'description', 'keyword'
    ];
}
