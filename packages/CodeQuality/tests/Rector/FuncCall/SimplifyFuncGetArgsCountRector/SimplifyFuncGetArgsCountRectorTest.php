<?php

declare(strict_types=1);

namespace Rector\CodeQuality\Tests\Rector\FuncCall\SimplifyFuncGetArgsCountRector;

use Iterator;
use Rector\CodeQuality\Rector\FuncCall\SimplifyFuncGetArgsCountRector;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class SimplifyFuncGetArgsCountRectorTest extends AbstractRectorTestCase
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
        return SimplifyFuncGetArgsCountRector::class;
    }
}
