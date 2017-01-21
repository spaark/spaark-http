<?php

namespace Spaark\Http\Model\URL;

use Spaark\Core\Model\Base\Composite;

class URL extends Composite
{
    /**
     * @readable
     * @var Protocol
     */
    protected $protocol;

    /**
     * @readable
     * @var string
     */
    protected $hostname;

    /**
     * @readable
     * @var int
     */
    protected $port;

    /**
     * @readable
     * @var string
     */
    protected $path;

    /**
     * @readable
     * @var Set
     */
    protected $parameters;
}
