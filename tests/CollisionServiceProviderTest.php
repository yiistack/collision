<?php

declare(strict_types=1);

namespace Yiistack\Collision\Tests;

use NunoMaduro\Collision\Contracts\Writer;
use PHPUnit\Framework\TestCase;
use Yiisoft\Di\Container;
use Yiistack\Collision\CollisionServiceProvider;

final class CollisionServiceProviderTest extends TestCase
{
    public function testRegister(): void
    {
        $container = new Container();

        (new CollisionServiceProvider())->register($container);

        $this->assertTrue($container->has(Writer::class));
    }
}
