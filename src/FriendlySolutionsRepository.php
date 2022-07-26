<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use NunoMaduro\Collision\Contracts\SolutionsRepository;
use Throwable;
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

final class FriendlySolutionsRepository implements SolutionsRepository
{
    /**
     * @inheritDoc
     */
    public function getFromThrowable(Throwable $throwable): array
    {
        if ($throwable instanceof FriendlyExceptionInterface) {
            return [new FriendlySolution($throwable)];
        }

        return [];
    }
}
