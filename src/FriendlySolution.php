<?php

declare(strict_types=1);

namespace Yiistack\Collision;

use Facade\IgnitionContracts\Solution;
use Yiisoft\FriendlyException\FriendlyExceptionInterface;

class FriendlySolution implements Solution
{
    private FriendlyExceptionInterface $friendlyException;

    public function __construct(FriendlyExceptionInterface $friendlyException)
    {
        $this->friendlyException = $friendlyException;
    }

    public function getSolutionTitle(): string
    {
        return $this->friendlyException->getName();
    }

    public function getSolutionDescription(): string
    {
        return $this->friendlyException->getSolution();
    }

    public function getDocumentationLinks(): array
    {
        return [];
    }
}