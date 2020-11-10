<?php

namespace Majidalaeinia\Khoolios\Facades;

use Illuminate\Support\Facades\Facade;

class Khoolios extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'khoolios';
    }
}
