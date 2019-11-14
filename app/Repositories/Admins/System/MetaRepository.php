<?php

namespace App\Repositories\Admins\System;

use App\Models\System\Meta;
use App\Contract\Admins\System\MetaContract;
use Recca0120\Repository\EloquentRepository;


class MetaRepository extends EloquentRepository implements MetaContract
{
    /** */
    public function __construct(Meta $model)
    {
         $this->model = $model;
    }

    public function create()
    {

    }
}


