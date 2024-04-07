<?php

/**
 * Tick Pack
 * ---------
 *
 * @noinspection PhpClassNamingConventionInspection    - Long class names are ok.
 * @noinspection PhpPropertyNamingConventionInspection - Property names with underscores are ok.
 */


declare(strict_types=1);

namespace Pith\Tick;

use Pith\Workflow\PithPack;

/**
 * Class TickPack
 * @package Pith\Tick
 */
class TickPack extends PithPack
{
    public string $access_level = 'world';
}