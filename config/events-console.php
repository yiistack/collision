<?php

declare(strict_types=1);

use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Yiistack\Collision\ErrorListener;

return [
    ConsoleErrorEvent::class => [
        [ErrorListener::class, 'handle'],
    ],
];
