<?php

namespace Nerdmonkey\RelaySwitch\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nerdmonkey\RelaySwitch\RelaySwitch
 */
class RelaySwitch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'relay-switch';
    }
}
