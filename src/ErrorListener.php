<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use NunoMaduro\Collision\Contracts\Provider;
use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\Console\Exception\ExceptionInterface;
use Whoops\Exception\Inspector;

final class ErrorListener
{
    private Provider $provider;

    public function __construct(Provider $provider)
    {
        $this->provider = $provider;
    }

    public function handle(ConsoleErrorEvent $event): void
    {
        $error = $event->getError();

        if (!($error instanceof ExceptionInterface)) {
            $handler = $this->provider->register()->getHandler();
            $handler->setOutput($event->getOutput())
                ->setInspector(new Inspector($error));

            $handler->handle();
            $event->setExitCode(0);
        }
    }
}