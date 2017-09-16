<?php

namespace MyPharmaBr\Plastic\Facades;

use Illuminate\Support\Facades\Facade;

class Map extends Facade
{
    /**
     * Get a map builder instance for the default connection.
     *
     * @return \MyPharmaBr\Plastic\Map\Builder
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['plastic']->connection()->getMapBuilder();
    }
}
