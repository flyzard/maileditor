<?php

declare(strict_types=1);

namespace Flyzard\Maileditor\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Flyzard\Maileditor\Maileditor
 */
class Maileditor extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Flyzard\Maileditor\Maileditor::class;
    }
}
