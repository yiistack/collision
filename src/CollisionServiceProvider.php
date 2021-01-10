<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use NunoMaduro\Collision\Contracts\Writer as WriterContract;
use NunoMaduro\Collision\Writer;
use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;

final class CollisionServiceProvider extends ServiceProvider
{
    /**
     * @param Container $container
     *
     * @psalm-suppress InaccessibleMethod
     * @psalm-suppress InternalClass
     *
     * @throws \Yiisoft\Factory\Exceptions\InvalidConfigException
     */
    public function register(Container $container): void
    {
        $solutionsRepository = new FriendlySolutionsRepository();
        $writer = new Writer($solutionsRepository);

        $container->set(WriterContract::class, $writer);
    }
}