<?php

namespace App\Contract\Admins\System;

interface LengthContract
{
    public function getForDataTable($status = 1, $trashed= false);

}

