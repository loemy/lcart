<?php

namespace App\Models\Customer;

use App\Models\Customer\Relationship\CustomerGroupRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerGroup extends Model
{
    use CustomerGroupRelationship, SoftDeletes;
}
