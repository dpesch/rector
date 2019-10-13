<?php

declare(strict_types=1);

namespace Rector\ZendToSymfony\Tests\Rector\ClassMethod\ThisViewToThisRenderResponseRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\ZendToSymfony\Rector\ClassMethod\ThisViewToThisRenderResponseRector;

final class ThisViewToThisRenderResponseRectorTest extends AbstractRectorTestCase
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
        yield [__DIR__ . '/Fixture/this_view_to_this_render.php.inc'];
    }

    protected function getRectorClass(): string
    {
        return ThisViewToThisRenderResponseRector::class;
    }
}
