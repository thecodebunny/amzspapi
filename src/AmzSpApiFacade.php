<?php

namespace Thecodebunny\AmzSpApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thecodebunny\AmzSpApi\Skeleton\SkeletonClass
 */
class AmzSpApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'amz-sp-api';
    }
}
