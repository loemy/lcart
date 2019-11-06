<?php

namespace App\Models\Customer;

use App\Models\Customer\Relationship\CustomerRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use CustomerRelationship, SoftDeletes;
}
