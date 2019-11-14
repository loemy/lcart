<?php

namespace App\Models\Address\Relationship;

trait ZoneRelationship
{
    public function country(){

        return $this->belongsTo('App\Models\Address\Country', 'country_id', 'id');

    }

    public function geo(){

        return $this->belongsTo('App\Models\Address\Geo', 'geo_id', 'id');

    }

    public function state(){

        return $this->belongsTo('App\Models\Address\State', 'state_id', 'id');

    }




}
