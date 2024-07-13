<?php

namespace Edeoliv\OpenGraphy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Edeoliv\OpenGraphy\OpenGraphy
 */
class OpenGraphy extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Edeoliv\OpenGraphy\OpenGraphy::class;
    }
}
