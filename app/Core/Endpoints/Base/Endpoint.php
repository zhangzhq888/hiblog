<?php

namespace Endpoints\Base;

use Laravelladder\Core\Endpoints\BaseEndpoint;
use Repositories\Base\BlogRepository;

/**
 * Class Endpoint
 *
 * 运营平台Endpoint基类
 *
 * @package Endpoints\Base
 */
abstract class Endpoint extends BaseEndpoint  {
    use BlogRepository;
}
