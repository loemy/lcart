<?php

namespace App\Models\Address\Attribute;

trait CountryAttribute
{
    public function getStatusSwitchAttribute()
    {
        if($this->Enable()){

        }
    }

    public function Enable()
    {
        return $this->status == 1;
    }
}
