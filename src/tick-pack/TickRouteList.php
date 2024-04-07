<?php

/**
 * Tick route list
 * --------------------
 *
 * @noinspection PhpClassNamingConventionInspection - Long class names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection   - Using PSR-4, not PSR-0.
 */

declare(strict_types=1);

namespace Pith\Tick;

use Pith\Workflow\PithRouteList;

/**
 * Class TickRouteList
 * @package Pith\Tick
 */
class TickRouteList extends PithRouteList
{
    public array $routes = [
        ['route', ['GET', 'POST'], '/tick', '\\Pith\\Tick\\TickTaskRoute'],
    ];
}