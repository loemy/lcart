<?php

namespace App\Contract\Admins\Customer;

interface CustomerContract
{
    public function getForDataTable($status = 1, $trashed= false);
    
}

