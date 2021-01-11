<?php

declare(strict_types=1);

namespace Yiistack\Collision\Tests\Support;

use Yiisoft\FriendlyException\FriendlyExceptionInterface;

final class TestSolutionException extends \Exception implements FriendlyExceptionInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'Test exception';
    }

    /**
     * @inheritDoc
     */
    public function getSolution(): ?string
    {
        return 'Test solution';
    }
}