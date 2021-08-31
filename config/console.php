<?php

declare(strict_types=1);

use NunoMaduro\Collision\Contracts\SolutionsRepository;
use NunoMaduro\Collision\Writer;
use NunoMaduro\Collision\Contracts\Writer as WriterContract;
use Yiistack\Collision\FriendlySolutionsRepository;

/**
 * @var array $params
 */
if ((bool)$params['yiistack/collision']['enabled'] === false) {
    return [];
}
return [
    SolutionsRepository::class => FriendlySolutionsRepository::class,
    WriterContract::class => Writer::class,
];