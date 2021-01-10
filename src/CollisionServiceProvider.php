<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use NunoMaduro\Collision\Contracts\Provider;
use NunoMaduro\Collision\Handler;
use NunoMaduro\Collision\Writer;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;

final class CollisionServiceProvider extends ServiceProvider
{
    /**
     * @param Container $container
     *
     * @psalm-suppress InaccessibleMethod
     *
     * @throws \Yiisoft\Factory\Exceptions\InvalidConfigException
     */
    public function register(Container $container): void
    {
        $solutionsRepository = new FriendlySolutionsRepository();
        $writer = new Writer($solutionsRepository);
        $handler = new Handler($writer);
        $container->set(Provider::class, new \NunoMaduro\Collision\Provider(null, $handler));
    }
}