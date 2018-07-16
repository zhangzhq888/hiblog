<?php

namespace Endpoints\Base;

use Laravelladder\Core\Collections\BaseCollection;
use Laravelladder\Core\Services\App;

/**
 * Class OrderMixin
 *
 * 订单trait
 *
 * @package Endpoints\Base
 */
trait OrderMixin
{
    public static function getNeedFieldsForWhereIn(BaseCollection $infos, $whereInValue, $comparisonValue, array $retValue)
    {
        $name = [];

        $model = $infos
            ->whereIn($whereInValue, [$comparisonValue])
            ->first();

        foreach($retValue as $val)
        {
            $name[$val] = !empty($model) ? $model->{$val} : '';
        }

        return $name;
    }
}
