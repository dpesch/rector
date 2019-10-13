<?php

declare(strict_types=1);

namespace Rector\Symfony\Tests\Rector\ClassMethod\MergeMethodAnnotationToRouteAnnotationRector;

use Iterator;
use Rector\Symfony\Rector\ClassMethod\MergeMethodAnnotationToRouteAnnotationRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class MergeMethodAnnotationToRouteAnnotationRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideDataForTest()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideDataForTest(): Iterator
    {
        yield [__DIR__ . '/Fixture/fixture.php.inc'];
    }

    protected function getRectorClass(): string
    {
        return MergeMethodAnnotationToRouteAnnotationRector::class;
    }
}
