<?php

namespace App\Models\Address;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Address\Relationship\AddressRelationship;

class Address extends Model

{
    use SoftDeletes, AddressRelationship;
    protected $table = 'addresses';
    protected $fillable = ['deleted_at', 'country_id', 'addressable_type', 'addressable_id',
                           'company', 'company_id', 'tax_id', 'address_1', 'address_2', 'postcode_required', 'postcode',
                           'telephone', 'fax', 'latitude', 'longitude'];
    protected $casts = ['country_id' => 'integer', 'addressable_id' => 'integer', 'postcode_required' => 'integer'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    

}
