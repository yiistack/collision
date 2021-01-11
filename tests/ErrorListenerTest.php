<?php

declare(strict_types=1);

namespace Yiistack\Collision\Tests;

use NunoMaduro\Collision\Writer;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Yiistack\Collision\ErrorListener;
use Yiistack\Collision\Tests\Support\TestSolutionException;

class ErrorListenerTest extends TestCase
{
    public function testHandle(): void
    {
        $event = new ConsoleErrorEvent(
            $this->createMock(InputInterface::class),
            $this->createMock(OutputInterface::class),
            new TestSolutionException()
        );

        (new ErrorListener(new Writer()))->handle($event);

        $this->assertEquals(0, $event->getExitCode());
    }
}
