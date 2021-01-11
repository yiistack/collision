<?php

declare(strict_types=1);

namespace Yiistack\Collision\Tests;

use PHPUnit\Framework\TestCase;
use Yiistack\Collision\FriendlySolutionsRepository;
use Yiistack\Collision\Tests\Support\TestSolutionException;

class FriendlySolutionsRepositoryTest extends TestCase
{
    public function testGetFromThrowable(): void
    {
        $repository = new FriendlySolutionsRepository();

        $solutions = $repository->getFromThrowable(new TestSolutionException());

        $this->assertNotEmpty($solutions);
        $this->assertEquals('Test solution', array_shift($solutions)->getSolutionDescription());
    }
}
