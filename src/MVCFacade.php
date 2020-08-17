<?php

namespace Thinklifepot\MVC;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thinklifepot\MVC\Skeleton\SkeletonClass
 */
class MVCFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mvc';
    }
}
