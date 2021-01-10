<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use NunoMaduro\Collision\Contracts\Writer;
use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\Console\Exception\ExceptionInterface;
use Whoops\Exception\Inspector;

final class ErrorListener
{
    private Writer $writer;

    public function __construct(Writer $writer)
    {
        $this->writer = $writer;
    }

    /**
     * @param ConsoleErrorEvent $event
     *
     * @psalm-suppress InternalMethod
     */
    public function handle(ConsoleErrorEvent $event): void
    {
        $error = $event->getError();

        if (!($error instanceof ExceptionInterface)) {
            $this->writer
                ->setOutput($event->getOutput())
                ->write(new Inspector($error));

            $event->setExitCode(0);
        }
    }
}