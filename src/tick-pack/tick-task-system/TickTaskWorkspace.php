<?php

/**
 * Tick Task Workspace
 * -------------------
 *
 * @noinspection PhpClassNamingConventionInspection - Long class names are ok.
 * @noinspection PhpIllegalPsrClassPathInspection   - Using PSR-4, not PSR-0.
 */


declare(strict_types=1);


namespace Pith\Tick;


/**
 * Class TickTaskWorkspace
 * @package Pith\Tick
 */
class TickTaskWorkspace
{
    public array $tasks = [
        ['task', 'tick', 'Run other systems.', '\\Pith\\Tick\\TickTaskRoute'],
    ];
}