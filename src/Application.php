<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use NunoMaduro\Collision\Handler;
use NunoMaduro\Collision\Provider;
use NunoMaduro\Collision\Writer;
use Symfony\Component\Console\Output\OutputInterface;
use Throwable;
use Whoops\Exception\Inspector;

final class Application extends \Yiisoft\Yii\Console\Application
{
    protected function doRenderThrowable(Throwable $e, OutputInterface $output): void
    {
        $solutionsRepository = new FriendlySolutionsRepository();
        $writer = new Writer($solutionsRepository);
        $handler = new Handler($writer);
        $handler = (new Provider(null, $handler))->register()->getHandler()->setOutput($output);
        $handler->setInspector(new Inspector($e));

        $handler->handle();
    }
}
