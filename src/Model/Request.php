<?php

namespace Spaark\Http\Model;

use Spaark\Core\Model\Base\Composite;
use Spaark\Http\Enum\Method;
use Spaark\Core\Model\Collection\HashMap;

class Request extends Composite
{
    /**
     * @readable
     * @writable
     * @var Method
     */
    protected $method;

    /**
     * @readable
     * @writable
     * @var URL
     */
    protected $url;

    /**
     * @readable
     * @writable
     * @var HashMap
     */
    protected $rawHeaders;
}
