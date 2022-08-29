<?php

use App\Charts\StudentCount;
use Illuminate\Support\Collection;

function getChart(array $data, string $class, string $type): StudentCount{
    $chart = new StudentCount();
    $chart->labels(
        collect($data)->keys()
    );
    $chart->dataset('Students Per ' . $class, $type,
        collect($data)->values()
    );
    return $chart;
}
