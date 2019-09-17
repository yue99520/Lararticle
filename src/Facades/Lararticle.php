<?php

namespace yue99520\Lararticle\Facades;

use Illuminate\Support\Facades\Facade;

class Lararticle extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lararticle';
    }
}
