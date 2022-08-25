<?php

use Illuminate\Support\Collection;

function getCollection($array): Collection
{
    return collect($array)->map(function ($key, $item) {
        return [
            'name' => $item,
            'count' => $key
        ];
    })->values();
}
