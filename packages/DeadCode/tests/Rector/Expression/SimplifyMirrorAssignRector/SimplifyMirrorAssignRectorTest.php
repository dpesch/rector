<?php

declare(strict_types=1);

namespace Rector\DeadCode\Tests\Rector\Expression\SimplifyMirrorAssignRector;

use Iterator;
use Rector\DeadCode\Rector\Expression\SimplifyMirrorAssignRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class SimplifyMirrorAssignRectorTest extends AbstractRectorTestCase
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
        return SimplifyMirrorAssignRector::class;
    }
}
