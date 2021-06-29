<?php

declare (strict_types=1);
namespace Rector\Core\NodeManipulator;

use PhpParser\Node\Name;
use PhpParser\Node\Name\FullyQualified;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\Interface_;
use PhpParser\Node\Stmt\Property;
use PhpParser\Node\Stmt\Trait_;
use PHPStan\Reflection\ReflectionProvider;
use PHPStan\Type\ObjectType;
use Rector\NodeNameResolver\NodeNameResolver;
use Rector\PostRector\Collector\NodesToRemoveCollector;
final class ClassManipulator
{
    /**
     * @var \Rector\NodeNameResolver\NodeNameResolver
     */
    private $nodeNameResolver;
    /**
     * @var \Rector\PostRector\Collector\NodesToRemoveCollector
     */
    private $nodesToRemoveCollector;
    /**
     * @var \PHPStan\Reflection\ReflectionProvider
     */
    private $reflectionProvider;
    public function __construct(\Rector\NodeNameResolver\NodeNameResolver $nodeNameResolver, \Rector\PostRector\Collector\NodesToRemoveCollector $nodesToRemoveCollector, \PHPStan\Reflection\ReflectionProvider $reflectionProvider)
    {
        $this->nodeNameResolver = $nodeNameResolver;
        $this->nodesToRemoveCollector = $nodesToRemoveCollector;
        $this->reflectionProvider = $reflectionProvider;
    }
    /**
     * @deprecated
     * @return array<string, Name>
     * @param \PhpParser\Node\Stmt\Class_|\PhpParser\Node\Stmt\Trait_ $classLike
     */
    public function getUsedTraits($classLike) : array
    {
        $usedTraits = [];
        foreach ($classLike->getTraitUses() as $traitUse) {
            foreach ($traitUse->traits as $trait) {
                /** @var string $traitName */
                $traitName = $this->nodeNameResolver->getName($trait);
                $usedTraits[$traitName] = $trait;
            }
        }
        return $usedTraits;
    }
    public function hasParentMethodOrInterface(\PHPStan\Type\ObjectType $objectType, string $methodName) : bool
    {
        if (!$this->reflectionProvider->hasClass($objectType->getClassName())) {
            return \false;
        }
        $classReflection = $this->reflectionProvider->getClass($objectType->getClassName());
        foreach ($classReflection->getAncestors() as $ancestorClassReflection) {
            if ($classReflection === $ancestorClassReflection) {
                continue;
            }
            if ($ancestorClassReflection->hasMethod($methodName)) {
                return \true;
            }
        }
        return \false;
    }
    /**
     * @return string[]
     */
    public function getPrivatePropertyNames(\PhpParser\Node\Stmt\Class_ $class) : array
    {
        $privateProperties = \array_filter($class->getProperties(), function (\PhpParser\Node\Stmt\Property $property) : bool {
            return $property->isPrivate();
        });
        return $this->nodeNameResolver->getNames($privateProperties);
    }
    /**
     * @return string[]
     */
    public function getImplementedInterfaceNames(\PhpParser\Node\Stmt\Class_ $class) : array
    {
        return $this->nodeNameResolver->getNames($class->implements);
    }
    public function hasInterface(\PhpParser\Node\Stmt\Class_ $class, \PHPStan\Type\ObjectType $interfaceObjectType) : bool
    {
        return $this->nodeNameResolver->isName($class->implements, $interfaceObjectType->getClassName());
    }
    public function hasTrait(\PhpParser\Node\Stmt\Class_ $class, string $desiredTrait) : bool
    {
        foreach ($class->getTraitUses() as $traitUse) {
            if (!$this->nodeNameResolver->isName($traitUse->traits, $desiredTrait)) {
                continue;
            }
            return \true;
        }
        return \false;
    }
    public function replaceTrait(\PhpParser\Node\Stmt\Class_ $class, string $oldTrait, string $newTrait) : void
    {
        foreach ($class->getTraitUses() as $traitUse) {
            foreach ($traitUse->traits as $key => $traitTrait) {
                if (!$this->nodeNameResolver->isName($traitTrait, $oldTrait)) {
                    continue;
                }
                $traitUse->traits[$key] = new \PhpParser\Node\Name\FullyQualified($newTrait);
                break;
            }
        }
    }
    /**
     * @return string[]
     * @param \PhpParser\Node\Stmt\Class_|\PhpParser\Node\Stmt\Interface_ $classLike
     */
    public function getClassLikeNodeParentInterfaceNames($classLike) : array
    {
        if ($classLike instanceof \PhpParser\Node\Stmt\Class_) {
            return $this->nodeNameResolver->getNames($classLike->implements);
        }
        return $this->nodeNameResolver->getNames($classLike->extends);
    }
    public function removeInterface(\PhpParser\Node\Stmt\Class_ $class, string $desiredInterface) : void
    {
        foreach ($class->implements as $implement) {
            if (!$this->nodeNameResolver->isName($implement, $desiredInterface)) {
                continue;
            }
            $this->nodesToRemoveCollector->addNodeToRemove($implement);
        }
    }
}
