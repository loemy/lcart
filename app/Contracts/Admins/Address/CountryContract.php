<?php

namespace App\Contract\Admins\Address;

interface CountryContract
{
    public function getForDataTable($status = 1, $trashed= false);
}
