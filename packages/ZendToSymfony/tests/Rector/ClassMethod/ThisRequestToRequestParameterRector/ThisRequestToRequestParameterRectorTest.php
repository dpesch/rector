<?php

declare(strict_types=1);

namespace Rector\ZendToSymfony\Tests\Rector\ClassMethod\ThisRequestToRequestParameterRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\ZendToSymfony\Rector\ClassMethod\ThisRequestToRequestParameterRector;

final class ThisRequestToRequestParameterRectorTest extends AbstractRectorTestCase
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
        yield [__DIR__ . '/Fixture/this_request_to_parameter.php.inc'];
    }

    protected function getRectorClass(): string
    {
        return ThisRequestToRequestParameterRector::class;
    }
}
