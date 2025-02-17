<?php

declare(strict_types=1);

namespace Rector\PHPUnit\Rector\MethodCall;

use PhpParser\Node;
use PhpParser\Node\Expr\MethodCall;
use Rector\Rector\AbstractPHPUnitRector;
use Rector\RectorDefinition\CodeSample;
use Rector\RectorDefinition\RectorDefinition;

/**
 * @see https://github.com/symfony/symfony/pull/30813/files#r270879504
 * @see \Rector\PHPUnit\Tests\Rector\MethodCall\RemoveExpectAnyFromMockRector\RemoveExpectAnyFromMockRectorTest
 */
final class RemoveExpectAnyFromMockRector extends AbstractPHPUnitRector
{
    public function getDefinition(): RectorDefinition
    {
        return new RectorDefinition('Remove `expect($this->any())` from mocks as it has no added value', [
            new CodeSample(
                <<<'PHP'
use PHPUnit\Framework\TestCase;

class SomeClass extends TestCase
{
    public function test()
    {
        $translator = $this->getMock('SomeClass');
        $translator->expects($this->any())
            ->method('trans')
            ->willReturn('translated max {{ max }}!');
    }
}
PHP
                ,
                <<<'PHP'
use PHPUnit\Framework\TestCase;

class SomeClass extends TestCase
{
    public function test()
    {
        $translator = $this->getMock('SomeClass');
        $translator->method('trans')
            ->willReturn('translated max {{ max }}!');
    }
}
PHP
            ),
        ]);
    }

    /**
     * @return string[]
     */
    public function getNodeTypes(): array
    {
        return [MethodCall::class];
    }

    /**
     * @param MethodCall $node
     */
    public function refactor(Node $node): ?Node
    {
        if (! $this->isInTestClass($node)) {
            return null;
        }

        if (! $this->isName($node, 'expects')) {
            return null;
        }

        if (count($node->args) !== 1) {
            return null;
        }

        $onlyArgument = $node->args[0]->value;

        // @todo add match sequence method, ref https://github.com/FriendsOfPHP/PHP-CS-Fixer/blob/be664e0c9f3cca94d0bbefa06a731848144e4a22/src/Tokenizer/Tokens.php#L776
        if (! $onlyArgument instanceof MethodCall) {
            return null;
        }

        if (! $this->isName($onlyArgument->var, 'this')) {
            return null;
        }

        if (! $this->isName($onlyArgument, 'any')) {
            return null;
        }

        return $node->var;
    }
}
