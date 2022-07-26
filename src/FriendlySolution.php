<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use Facade\IgnitionContracts\Solution;
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

final class FriendlySolution implements Solution
{
    public function __construct(private FriendlyExceptionInterface $friendlyException)
    {
    }

    public function getSolutionTitle(): string
    {
        return $this->friendlyException->getName();
    }

    public function getSolutionDescription(): string
    {
        return $this->friendlyException->getSolution() ?? '';
    }

    public function getDocumentationLinks(): array
    {
        return [];
    }
}
