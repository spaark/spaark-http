<?php
/**
 * Spaark
 *
 * Copyright (C) 2012 Emily Shepherd
 * emily@emilyshepherd.me
 */

namespace Spaark\Http;

use Spaark\Core\AbstractInstance;
use Spaark\Http\DataSource\NativeRequestBuilder;

/**
 * Handles a request, either by using its cached Output, or by running
 * it through the Router
 */
class HttpInstance extends AbstractInstance
{
    private $request;

    public function loadFromEnvironment()
    {
        $this->request = NativeRequestBuilder::build($_SERVER);
    }
}
