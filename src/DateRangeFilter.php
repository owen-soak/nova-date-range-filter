<?php

namespace Owensoak\Filters;

use Laravel\Nova\Filters\Filter;

abstract class DateRangeFilter extends Filter
{
    public $component = 'date-range-filter';

    public function __construct()
    {
        $this->dateFormat('Y-m-d');
    }

    public function dateFormat($format)
    {
        return $this->withMeta(['dateFormat' => $format]);
    }

    public function placeholder($placeholder)
    {
        return $this->withMeta(['placeholder' => $placeholder]);
    }
}
