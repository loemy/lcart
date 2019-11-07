<?php

namespace App\Helpers;

/**
 *
 */
trait GeneralHelper
{
    protected function tree($model = null)
    {
        if ($model) {
            $items = static::where('menu', $model)->get()->groupBy('parent_id');
        } else {
            $items = static::get()->groupBy('parent_id');
        }

        if ($items->count()) {
            $items['root'] = $items[''];
            unset($items['']);
        } else {
            $items = collect(['root' => collect()]);
        }

        return $items;
    }
}

