<?php

namespace App\Contract\Admins\Customer;

interface CustomerGroupContract
{
    public function getForDataTable($status = 1, $trashed= false);
}

