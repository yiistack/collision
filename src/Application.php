<?php

declare(strict_types=1);

namespace Yiistack\Collision\Application;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\StyleInterface;
use Throwable;
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

final class Application extends \Yiisoft\Yii\Console\Application
{
    protected function doRenderThrowable(Throwable $e, OutputInterface $output): void
    {
        parent::doRenderThrowable($e, $output);
        // Friendly Exception support
        if ($e instanceof FriendlyExceptionInterface) {
            if ($output instanceof StyleInterface) {
                $output->title($e->getName());
                if (($solution = $e->getSolution()) !== null) {
                    $output->note($solution);
                }
                $output->newLine();
            } else {
                $output->writeln('<fg=red>' . $e->getName() . '</>');
                if (($solution = $e->getSolution()) !== null) {
                    $output->writeln('<fg=yellow>' . $solution . '</>');
                }
                $output->writeln('');
            }
        }
    }
}
