<?php

/**
 * Tick task route
 * ---------------
 *
 * @noinspection PhpPropertyNamingConventionInspection - Ignore.
 * @noinspection PhpClassNamingConventionInspection    - Long class name is ok.
 * @noinspection PhpIllegalPsrClassPathInspection      - Using PSR-4, not PSR-0.
 */


declare(strict_types=1);

namespace Pith\Tick;

use Pith\Workflow\PithRoute;

/**
 * Class TickTaskRoute
 * @package Pith\Tick
 */
class TickTaskRoute extends PithRoute
{
    public string $route_type   = 'task';
    public string $pack         = '\\Pith\\Tick\\TickPack';
    public string $access_level = 'task';
    public string $action       = '\\Pith\\Tick\\TickTaskAction';
    public string $view_adapter = '\\Pith\\CliViewAdapter\\PithCliViewAdapter';
}
