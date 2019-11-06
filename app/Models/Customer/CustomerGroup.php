<?php

namespace App\Models\Customer;

use App\Models\Customer\Relationship\CustomerGroupRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerGroup extends Model
{
    use CustomerGroupRelationship, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer_groups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'deleted_at', 'name', 'group_type', 'group_discount', 'description', 'approval', 'position', 'company_id_display',
        'company_id_required', 'tax_id_display', 'tax_id_required', 'payment_allowed', 'payment_terms', 'shipment_allowed', 'taxes_exempt', 'order_total_allowed',
        'setting_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}
