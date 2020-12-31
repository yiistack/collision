<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use NunoMaduro\Collision\Provider;
use Yiisoft\Di\Container;

final class CollisionServiceProvider extends \Yiisoft\Di\Support\ServiceProvider
{

    public function register(Container $container): void
    {
        (new Provider())->register();
    }
}