<?php

declare(strict_types=1);

namespace Yiistack\Collision\Tests;

use Yiistack\Collision\FriendlySolution;
use PHPUnit\Framework\TestCase;
use Yiistack\Collision\Tests\Support\TestSolutionException;

final class FriendlySolutionTest extends TestCase
{
    public function testSolution(): void
    {
        $solution = new FriendlySolution(new TestSolutionException());
        
        $this->assertEquals('Test exception', $solution->getSolutionTitle());
        $this->assertEquals('Test solution', $solution->getSolutionDescription());
}
}
