<?php

namespace Spaark\Http\Enum;

use Spaark\Core\Enum\BaseEnum;

class Method extends BaseEnum
{
    const GET = 'get';
    const POST = 'post';
    const PUT = 'put';
    const DELETE = 'delete';
    const HEAD = 'head';
    const OPTIONS = 'options';
}
