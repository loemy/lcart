<?php

namespace App\Contract\Admins\System;

interface WeightContract
{
    public function getForDataTable($trashed= false);

}

