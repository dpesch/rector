# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

PRs and issues are linked, so you can find more about it. Thanks to [ChangelogLinker](https://github.com/Symplify/ChangelogLinker).

<!-- changelog-linker -->

## [v0.5.17] - 2019-10-15

### Added

- [#2156] [PHPUnit] [Doc] Add FixDataProviderAnnotationTypoRector
- [#2155] [PHPUnit] [Doc] Add EnsureDataProviderInDocBlockRector
- [#2144] [PHPUnit] Add RemoveDataProviderTestPrefixRector
- [#2132] [Symfony] Add ConsoleExecuteReturnIntRector, Thanks to [@keulinho]
- [#2166] add paypal backers
- [#2150] phpstan - add getContainer() after boot()
- [#2141] add inter support
- [#2142] [PHPUnit 6] Add AddDoesNotPerformAssertionToNonAssertingTestRector
- [#2087] Added way to exclude rectors, Thanks to [@jeroensmit]

### Fixed

- [#2146] fix ValueResolver static array for non static keys
- [#2152] fix get property by class
- [#2114] Fix for issue [#2090], Thanks to [@jeroensmit]
- [#2140] fix 3rd party testing without config
- [#2147] fix string-named func
- [#2164] [code-quality] fixes processing of trait - RemoveAlwaysTrueConditionSetInConstructorRector  [#2162], Thanks to [@lapetr]
- [#2165] Bugfix for RemoveUnreachableStatementRector, Thanks to [@jeroensmit]

### Changed

- [#2145] [DeadCode] Make RemoveDefaultArgumentValueRector skip native functions
- [#2148] [TypeDeclaration] Prevent array-iterable-Iterator override in ReturnTypeDeclarationRector
- [#2159] Screen file command improvements
- [#2149] prevent doc type of child array override
- [#2151] make `ReturnTypeDeclarationRector` keep implementation

## [v0.5.16] - 2019-10-10

- [#2139] Add `screen-file` command for learning & trainings

## [v0.5.15] - 2019-10-10

### Fixed

- [#2135] Fix EncapsedStringsToSprintfRector for non-var exprs
- [#2130] fix stub loading location
- [#2128] Fix `EncapsedStringsToSprintfRector` when using class properties, Thanks to [@gnutix]

## [v0.5.14] - 2019-10-09

### Added

- [#2123] [SOLID] Prefer interface if possible
- [#2115] [DeadCode] Add `SimplifyIfElseWithSameContentRector`
- [#2080] [DeadCode] Add `RemoveUnreachableStatementRector`
- [#2103] [StrictCodeQuality] Add `VarInlineAnnotationToAssertRector`
- [#2122] [StrictCodeQuality] Add freshly created node support to var inline assert
- [#2047] Add conditional method renaming rector, Thanks to [@markstory]
- [#2094] Add `ShortenElseIfRector`, Thanks to [@keulinho]
- [#2095] Add fixture for phpunit x>y to greaterThan refactoring, Thanks to [@keulinho]
- [#2096] `ImportFullyQualifiedNamesRector` : add a failing test about modified annotations that shouldn't be, Thanks to [@gnutix]
- [#2084] Add failing test case for `ReturnArrayClassMethodToYieldRector` (removing comments), Thanks to [@gnutix]
- [#2099] Add documentation for `ImportFullyQualifiedNamesRector` new argument, Thanks to [@gnutix]
- [#2100] Add FunctionCallToConstantRector, Thanks to [@keulinho]
- [#2081] Add failing test: StringifyStrNeedlesRector adds (string) to a method call that returns a string anyway, Thanks to [@gnutix]
- [#2077] Add an option to skip importing root namespace classes (like \DateTime), Thanks to [@gnutix]
- [#2091] Add `UseIncrementAssignRector`, Thanks to [@keulinho]
- [#2074] Add a PHPUnit TestCase stub., Thanks to [@gnutix]
- [#2073] `StringToArrayArgumentProcessRectorTest` : add failing test around Traversable, Thanks to [@gnutix]
- [#2062] Add stubs instead of dump class replace in constructor
- [#2052] Add post run name imports
- [#2049] Added StrictArraySearchRector - Issue [#2009], Thanks to [@jeroenherczeg]
- [#2124] add CommanderCollector
- [#2054] [DoctrineCodeQuality] Initialize collections in constructor

### Changed

- [#2065] [CodingStyle] Allow private ctor override for static factory
- [#2067] Use contextual method rename rector in cake4 rules., Thanks to [@markstory]
- [#2125] improve uuid steps
- [#2107] restart changed doc
- [#2097] Improve class annotation matching
- [#2109] skip var type in anonymous class for `PropertyTypeDeclarationRector`
- [#2083] Do not apply `SimplifyIfReturnBoolRector` when there are comments in between the if statements, Thanks to [@gnutix]
- [#2072] [CodingStyle] Skip common annotation aliases in RemoveUnusedAliasRector

### Fixed

- [#2121] Allow `@Template` to get nullable values
- [#2076] [Symfony] Fix is submitted
- [#2093] fix stringy str needless for return strings
- [#2112] fix joinColumns always fallback
- [#2070] Fixed the third argument in `VarDumperTestTrait`, Thanks to [@adrozdek]
- [#2075] Fix ReflectionException (Method `PHPUnit\Framework\TestCase::tearDown(...)` does not exist) thrown while autoloading class Symfony\Bundle\FrameworkBundle\Test\WebTestCase., Thanks to [@gnutix]
- [#2088] Fix changing the wrong property fetches, Thanks to [@jeroensmit]
- [#2078] Fix type resolution for traversable
- [#2079] fix [@TODO] malfforms
- [#2102] Fix countable for countable classes without countable
- [#2101] Fix virtual property
- [#2082] Fixing `return new static()` not being covered by `MakeInheritedMethodVisibilitySameAsParentRector`, Thanks to [@gnutix]
- [#2060] [PHP 7.1] Skip extra argument removal for parent static call

## [v0.5.13] - 2019-09-27

### Added

- [#1980] [ZendToSymfony] Init Zend 1 to Symfony 4
- [#1982] [Autodiscovery] init
- [#2044] [CodeQuality] Add RemoveSoleValueSprintfRector
- [#2032] [CodingStyle] Add MakeInheritedMethodVisibilitySameAsParentRector
- [#2033] [CodingStyle] Add CallUserFuncCallToVariadicRector
- [#1978] [DX] add check class existence scripts
- [#1924] [DeadCode] Add RemoveAlwaysTrueIfConditionRector
- [#2012] [Doctrine] Add ChangeReturnTypeOfClassMethodWithGetIdRector
- [#1928] [Doctrine] Add stubs instead of full orm dependencies
- [#2003] [Doctrine] add CustomIdGenerator + step 2 for uuid Doctrine migration
- [#1994] [Doctrine] Add AlwaysInitializeUuidInEntityRector
- [#2031] [Monolog] Add 2.0 upgrade set
- [#1984] [PHPStan] add PreventParentMethodVisibilityOverrideRule
- [#1947] [PHPUnit] Add [@see] annotation to reference test
- [#1948] [PHPUnit] Add array call to data provider
- [#2035] [Php53] Add DirNameFileConstantToDirConstantRector [close [#2006]]
- [#2037] [Php71] Add ListToArrayDestructRector
- [#2040] [Rector] Add RemoveZeroBreakContinueRector
- [#2034] [Restoration] Add MissingClassConstantReferenceToStringRector
- [#2020] [Symfony] Add MergeMethodAnnotationToRouteAnnotationRector
- [#2019] [TypeDeclaration] Add AddMethodCallBasedParamTypeRector
- [#2000] add isInDoctrineEntityClass() method
- [#2001] add changeName/getName to serializer
- [#1968] add skip of one to one relations with mapped by
- [#1998] make DocBlockManipulator protected in AbstractRector + add GeneratedValue annotatoin parsing
- [#1955] Added stub directory to Docker composer build phase, Thanks to [@JanMikes]
- [#2015] Add rules for renaming CakePHP's Router methods, Thanks to [@ADmad]
- [#2048] Add support for various annotation formats
- [#1927] Add Sensio TemplateTagValueNode
- [#1933] add removeNodeFromStatements() method to remove statement without key easily
- [#2039] add function aliases to celebrity
- [#1921] Add uuid only to entities with id
- [#1939] Add ReturnedNodesReturnTypeInferer + big \*TypeDeclarationRector refactoring

### Changed

- [#2036] [Php72] improve UnsetCastRector
- [#2017] [Renaming] init new package
- [#2030] [Renaming] fqnize freshly namespaced class
- [#1943] Improve covariance in ReturnTypeDeclarationRector
- [#1992] improve join table patterns
- [#1952] improve test case provided rector class debug info
- [#1937] uuid rules are now designed to be used at once
- [#1925] rename level to set to prevent confusion of duplicate
- [#2046] Decouple annotation to own PhpDocNodeFactory to allow extension without change
- [#1869] Refactoring order creates incompatible return types, Thanks to [@scheb]
- [#1986] improve single info multiline doc, drop NodeDecorator
- [#1976] [phpstorm meta] make getByType() return nullable
- [#1993] Improve annotation content joins
- [#1996] Optimize class renaming
- [#1997] Improve annotation spacing
- [#1972] Migrate tests to data providers
- [#1971] Cleanup
- [#2043] [CI] run all sets check
- [#1979] [DX] check invalid config arguments
- [#2011] [Doctrine] Step [#3] - `getUuid`/`setUuid` method calls to id values
- [#1966] [Doctrine] split id and relation migration to 2 steps
- [#2016] [Php] Split to own packages by version
- [#1989] [PhpDoc] Multiline test improvements
- [#2045] [Symfony] Make MakeDispatchFirstArgumentEventRector work with get_class
- [#1938] [TypeDeclaration] Extend ReturnTypeDeclarationRector with incorrect types override
- [#1931] Make type replacement of annotatoin OOP
- [#1932] make use of `getProperties()`, `getMethods()`, `getConstants()` and `getTraitUses()`
- [#1914] Create rector for transforming Laravel validation rules to a prettier format, Thanks to [@sashabeton]
- [#1923] `RemoveUnusedPrivatePropertyRector` should skip entities [closes [#1922]]
- [#1940] cleanup type resolving
- [#1934] UUID report old to new table
- [#1961] Migrate `TypeInferers` and `TypeResolvers` to PHPStan object types
- [#1991] make `EntityUuidNodeFactory` extensible
- [#2002] cover name at `JoinColumn` removal
- [#1999] make column tag value node changeable
- [#1957] Move from string types to PHPStan types
- [#1946] from helper methods to isStaticType() with PHPStan object typing
- [#1953] StaticTypeMapper refactoring
- [#1866] Misc
- [#2013] cleanup
- [#1951] Update README.md, Thanks to [@drbyte]

### Fixed

- [#2021] [PHP71] Fix BinaryOpBetweenNumberAndStringRector for variables
- [#1969] fix spacing with SpacelessPhpDocTagNode
- [#2018] fix renaming class to existing one [closes [#1438]]
- [#2014] Code sample fixes, Thanks to [@HypeMC]
- [#2024] fix parent typehint for anonymous class
- [#2025] Fix numeric string type in BinaryOpBetweenNumberAndStringRector
- [#2026] Fix pseudo namespace to namespace with use statement
- [#1967] Fix Doctrine stubs + separate reported files into 2
- [#2027] Fix printing of tab-indented files
- [#1962] Fixed small typos for Symfony docs., Thanks to [@adrozdek]
- [#2022] Fix anonymous class constant
- [#1990] fix multi constaints
- [#1983] Fix Return type Covariance Inverse Order
- [#1926] [DeadCode] Keep parent call delegation in case of accessibility override
- [#2023] [DeadCode] Skip magic property `RemoveUnusedPrivatePropertyRector`

### Removed

- [#1954] remove `CallableCollectorPopulator`
- [#1935] remove `getDoctrine\*()` methods from `PhpDocInfo`, use `getByType()` instead
- [#1958] remove few PHP-Parser rules to prevent package-rules vs package-features confusion

## [v0.5.12] - 2019-08-29

### Added

- [#1898] Start CakePHP 4.0 rectors, Thanks to [@markstory]
- [#1902] [BetterPhpDocParser] Add support for parsing Doctrine annotations
- [#1906] [DoctrinePhpDocParser] Add relation tags and join column
- [#1910] Add more rectors for CakePHP 4.0, Thanks to [@markstory]
- [#1916] add parent construct call to uuid init
- [#1912] [Doctrine] Id to UUID migration

### Changed

- [#1903] [dx] make ShouldNotHappen exceptions more informative
- [#1915] allow non-uuid props
- [#1897] allow testing outside Rector
- [#1901] Move Jetbrains PhpStorm stubs into dev dependencies, Thanks to [@atierant]
- [#1908] let parse only Doctrine tags we need

### Fixed

- [#1917] fix expected namespace

## [v0.5.11] - 2019-08-25

### Added

- [#1880] [DeadCode] Add RemoveNullPropertyInitializationRector to dead-code set
- [#1865] [PSR4] Add NormalizeNamespaceByPSR4ComposerAutoloadRector
- [#1895] add makeFinal() method to AbstractRector
- [#1889] Add cakephp3.8 target and fix a typo, Thanks to [@markstory]
- [#1847] [PHP 7.4] Add literal thousand superator

### Changed

- [#1878] [PSR4] Improve renamed classes collector to sort by highest parent
- [#1894] rename levels command to sets
- [#1896] merge isName and isNameInsensitive

### Fixed

- [#1885] [CodingStyle] Fix ImportFullyQualifiedNamesRector for imported namespace
- [#1888] Fix missing args in PreferThisOrSelfMethodCallRector
- [#1891] Fix fqn doc with alraedy PHP imported namespace
- [#1882] [CodingStyle] Import short classes as well [ref #1877]
- [#1883] [CodingStyle] Make import `ImportFullyQualifiedNamesRector` include same short class in same namespace
- [#1881] [RenameClassRector] Include [@ORM], [@Assert], [@Serializer] etc annotations
- [#1884] Parent constant visibility when it is declared in a super-superclass, Thanks to [@scheb]

### Removed

- [#1870] [DeadCode] Remove null value from property, Thanks to [@jacekll]
- [#1875] Remove default excluded file patterns (closes [#1815]), Thanks to [@scheb]

## [v0.5.10] - 2019-08-19

### Added

- [#1855] [CodingStyle] Add `AddArrayDefaultToArrayPropertyRector`
- [#1800] [DeadCode] Add `RemoveUnusedDoctrineEntityMethodAndPropertyRector`
- [#1819] [DeadCode] Add `RemoveSetterOnlyPropertyAndMethodCallRector`
- [#1823] [Nette] Add `JsonDecodeEncodeToNetteUtilsJsonDecodeEncodeRector`
- [#1857] [TypeDeclaration] Add `AddArrayReturnDocTypeRector`
- [#1856] [TypeDeclaration] Add `AddArrayParamDocTypeRector`
- [#1850] add reporting extension, rename rector finish to finishing
- [#1818] add removed nodes collector
- [#1826] add concat + multiline case to `ManualJsonStringToJsonEncodeArrayRector`
- [#1825] add implode support to `ManualJsonStringToJsonEncodeArrayRector`
- [#1802] add iterable return type for yield values in `ReturnTypeDeclarationRector`
- [#1851] Fix FluentReplaceRector for more than 2 calls + add * matching support
- [#1807] add alias support to PropertyTypeDeclarationRector
- [#1844] add RectorFinishExtensionRunner

### Changed

- [#1828] allow multiline empty spaces strings
- [#1841] class manipulator now returns Property on property name search
- [#1814] Improve PHPStan trait scope resolving
- [#1862] [TypeDeclaration] Various `AddArrayReturnDocTypeRector` improvements
- [#1805] resolve target entity from same namespace
- [#1858] Always keeps array in `*TypeInfo`
- [#1854] Ignores resource also when type is nullable, Thanks to [@tigitz]
- [#1793] Break class name in `@var` when relation is defined in same namespace, Thanks to [@snapshotpl]
- [#1852] Fix decimal to float
- [#1806] use DateTimeInterface over `DateTime`
- [#1839] skip ManyToOne properties in `SetterOnlyMethodAnalyzer` ([#1838])
- [#1829] skip same-namespace-short name in `ImportFullyQualifiedNamesRector`
- [#1827] simplify `ManualJsonStringToJsonEncodeArrayRector`
- [#1821] skip abstract parent methods in `RemoveUnusedDoctrineEntityMethodAndPropertyRector`
- [#1838] skip ManyToOne properties in `SetterOnlyMethodAnalyzer`
- [#1840] Constants declared in interfaces have to be public, Thanks to [@scheb]
- [#1863] merge ArrayPropertyDefaultValueRector to superior `AddArrayDefaultToArrayPropertyRector`
- [#1842] Overriding constants require at least the parent's visibility, Thanks to [@scheb]
- [#1813] dont load phpstan-phpunit if phpunit not installed, Thanks to [@slepic]
- [#1808] Correct `NameResolver::getName()` + cleanup static analysis

### Fixed

- [#1830] Fix non-same parent method name for RemoveParentCallWithoutParentRector
- [#1804] Fix nullable array type param for PropertyTypeDeclarationRector
- [#1803] Fix nullable for xToOne annotation by default
- [#1794] Fix method call type
- [#1864] Fix type resolutoin in PropertyNodeParamTypeInferer
- [#1817] Fix analysed files for PHPStan scope resolver
- [#1831] Fix unused method type for return type
- [#1837] Fix RemoveSetterOnlyPropertyAndMethodCallRector race condition
- [#1853] Fix different method call return in FluentReplaceRector
- [#1859] Fix lowercase of union fqn types
- [#1832] Fix args miss-match in RemoveDelegatingParentCallRector
- [#1845] HelperFunctionToDependencyInjectionRector fix, Thanks to [@sashabeton]
- [#1836] Fixing NodeRemovingVisitor
- [#1835] Fix reseting of removed nodes
- [#1833] Fix var/method call resolver


## [v0.5.9] - 2019-08-01

### Added

- [#1761] [CodeQuality] Add ThrowWithPreviousExceptionRector
- [#1762] [CodingStyle] Add ManualJsonStringToJsonEncodeArrayRector
- [#1760] [DeadCode] Add RemoveDuplicatedCaseInSwitchRector
- [#1776] [NodeTypeResolver] Add phpunit extension
- [#1781] [TypeDeclaration] Add PropertyTypeDeclarationRector
- [#1774] add empty array to static type to string resolver
- [#1786] add priority to PropertyTypeInfererInterface and put doctrine infering first
- [#1789] add xToOne relation support to Doctrine var type resolver
- [#1787] add return nullable type to GetterOrSetterPropertyTypeInferer

### Changed

- [#1769] [Restoration] Return removed class annotations
- [#1788] infer from [@return] doc type in PropertyTypeDeclaratoin

### Fixed

- [#1782] [Symfony] Fix frozen parameter bag in DefaultAnalyzedSymfonyApplicationContainer
- [#1779] FIXED: Catastrophic backtracking in regular expression if the current…, Thanks to [@hernst42]
- [#1772] fix type analyzer for FQN
- [#1790] fix laravel53 config

### Removed

- [#1791] [CodingStyle] remove extra break from BinarySwitchToIfElseRector
- [#1780] [NodeTypeResolver] drop duplicated generic array type

### Unknown Category

- [#1764] [Symfony] Use Symfony bridge interface for `doctrine` service, Thanks to [@stloyd]
- [#1759] [SymfonyCodeQuality] From listener to subscriber
- [#1777] make constant array types unique
- [#1771] skip non-annotation prefix

<!-- dumped content end -->

## [v0.5.8] - 2019-07-21

### Added

- [#1691] [Architecture] Add `ConstructorInjectionToActionInjectionRector`
- [#1689] [CodeQuality] Add `is_a` with string true
- [#1754] [CodeQuality] Add `RemoveAlwaysTrueConditionSetInConstructorRector`
- [#1690] [CodeQuality] Add `StrlenZeroToIdenticalEmptyStringRector`
- [#1722] [CodingStyle] Add `EncapsedStringsToSprintfRector`
- [#1717] [DeadCode] Add static, self and FQN type to `RemoveUnusedPrivateMethodRector`
- [#1671] [Doctrine] Add registry to EM
- [#1693] [Doctrine] Add `RemoveRepositoryFromEntityAnnotationRector`
- [#1709] [FuncCall] Don't add `$result` to `parse_str` if second parameter is already set, Thanks to [@ravanscafi]
- [#1720] [Generic] Add `ServiceGetterToConstructorInjectionRector`
- [#1676] [PHP] Add scope limitation to `ArgumentAdderRector` for 3party non-existing params
- [#1695] [PHPStan] Add `RemoveNonExistingVarAnnotationRector`
- [#1696] [PHPUnit][Symfony] Add `AddMessageToEqualsResponseCodeRector`
- [#1744] add reference support to `ParamTypeDeclarationRector`
- [#1694] Add `rector.yaml` to `.dockerignore`, Thanks to [@aboks]
- [#1674] Add Polyfil function support
- [#1681] Add `parent::__construct()` to command dependencies

### Changed

- [#1748] [CodingStyle] Improve `NewlineBeforeNewAssignSetRector`
- [#1697] [DeadCode] Allow static constant call on `RemoveUnusedPrivateConstantRector`, Thanks to [@ravanscafi]
- [#1719] Resolve anonymous class return type to object

### Fixed

- [#1752] [CodeQuality] Fix `CompleteDynamicPropertiesRector` for dynamic property fetch
- [#1718] [DeadCode] Fix too deep nesting in dead private property
- [#1710] [MethodCall] Fix multilevel array subsets, Thanks to [@ravanscafi]
- [#1715] [SOLID] Fix `PrivatizeLocalClassConstantRector` for in-class use
- [#1698] Fix `NameTypeResolver` resolveFullyQualifiedName return type, Thanks to [@ravanscafi]
- [#1684] fix new phpstan reports
- [#1702] Fixed some issues for `RemoveZeroAndOneBinaryRector`, Thanks to [@jeroensmit]
- [#1703] Fixed unintended removal of properties when used inside a trait, Thanks to [@jeroensmit]
- [#1738] Fix InjectAnnotationClassRector with aliases
- [#1705] Fixed wrong naming of docs script in composer.json, Thanks to [@jeroensmit]
- [#1712] Fix tests according to review and a few typos, Thanks to [@ravanscafi]
- [#1673] Fix `InjectAnnotationClassRector` for `@var` case
- [#1677] [Bugfix] `IsCountableRector` & `IsIterableRector` should first check method availability, Thanks to [@stloyd]
- [#1686] [Bugfix] PHPDoc type-hint `resource` should not be used as PHP type-hint, Thanks to [@stloyd]
- [#1739] [CodeStyle] Newline before assign
- [#1716] [DeadCode] Keep array method call in `RemoveUnusedPrivateMethodRector`
- [#1753] [DeadCode] Rector `RemoveDeadConstructorRector` should skip `private` method, Thanks to [@stloyd]
- [#1687] [Symfony] Set few default common service names for Symfony App Analyzer, Thanks to [@stloyd]
- [#1675] [Symfony] Make set symfony42 refactor get(...) in former container aware commands
- [#1666] Skip session in `SelfContainerGetMethodCallFromTestToSetUpMethodRector`
- [#1757] make SymfonyContainer factory configurable with "kernel_environment" parameter in rector.yaml
- [#1707] Don't mess with lines between docblock comment and var type., Thanks to [@ravanscafi]
- [#1699] Update composer scripts, Thanks to [@ravanscafi]
- [#1755] make interface description PHPStorm compatible, so it will not break abstract method complete
- [#1711] Do not mark injected properties as private when moved to constructor, Thanks to [@holtkamp]
- [#1714] Cleanup
- [#1721] skip `Illuminate\Support\Collection` magic for `CompleteDynamicPropertiesRector`
- [#1725] Empty compacts are forbidden, keep signature by replacing with empty array, Thanks to [@ravanscafi]
- [#1728] `is_real()` is deprecated instead of `is_float()`, Thanks to [@holtkamp]
- [#1735] Consider reference symbol in docblock for param type declaration rector, Thanks to [@tigitz]
- [#1736] Colorify neon files, Thanks to [@szepeviktor]
- [#1737] Typo in Travis config, Thanks to [@szepeviktor]

### Removed

- [#1679] [MakeCommandLazyRector] Remove duplicated check, Thanks to [@stloyd]
- [#1701] Make sure parameter is not removed when a child class does use the parameter, Thanks to [@jeroensmit]
- [#1723] Do not remove args when replacing to static calls, Thanks to [@ravanscafi]
- [#1713] Remove `--with-style` in favour of mentioning ECS, Thanks to [@stloyd]

## [v0.5.7] - 2019-06-28

### Fixed

- [#1661] Minor phpdoc fixes

## [v0.5.6] - 2019-06-28

### Removed

- [#1659] remove deprecated singly implemented autowire compiler pass

<!-- dumped content end -->

<!-- dumped content start -->

## [v0.5.6] - 2019-06-28

### Added

- [#1584] [DeadCode] Add `RemoveDeadZeroAndOneOperationRector`
- [#1586] [DeadCode] Add `RemoveDelegatingParentCallRector`
- [#1603] [DeadCode] Add `RemoveDuplicatedInstanceOfRector`
- [#1656] [SymfonyPHPUnit] Add `SelfContainerGetMethodCallFromTestToSetUpMethodRector`
- [#1589] Add assign ref support to `AddDefaultValueForUndefinedVariableRector`
- [#1609] Add `ElasticSearchDSL` package, Thanks to [@shyim]
- [#1611] Add rector for ShopRegistration, Thanks to [@shyim]
- [#1615] add exclude to typical reported typos
- [#1610] Add shopware version const rector, Thanks to [@shyim]
- [#1640] Add `--rule` option to process only single rule from set

### Changed

- [#1582] Rename "level" directory to "set"
- [#1612] travis: allow PHP 7.4

### Fixed

- [#1619] [CodeQuality] Fix `__set`/`__get` case for `CompleteDynamicPropertiesRector`
- [#1643] [CodingStyle] Fix extra slash in array simple types
- [#1616] [DeadCode] Fix removed comment after return at `RemoveCodeAfterReturnRector`
- [#1602] [Laravel] Fix missing method name in 5.7
- [#1645] [PHP] Fix `mktime` rename with args [closes [#1622]]
- [#1647] [PHP] Fix `JsonThrowOnErrorRector` inter-args
- [#1644] [PHP] Fix missed variadic on `ReflectionMethod::invoke()` [closes [#1625]]
- [#1618] [PHP] Fix class signature over interface priority in `RemoveExtraParametersRector`
- [#1642] [PHP] Fix `StringifyStrNeedlesRector` duplicated change
- [#1617] [Symfony] Fix GetRequestRector overlap to non-controllers
- [#1605] Fix Open Collective link for `FUNDING.yml`, Thanks to [@pxgamer]
- [#1583] Fix CountOnNullRector for nullable and invalid property
- [#1599] Fix `StringClassNameToClassConstantRector` for empty name [closes [#1596]]
- [#1590] Fix nullable item in `ListSwapArrayOrderRector`
- [#1631] Fix typo : rename `jsm-decouple.yaml` to `jms-decouple.yaml`, Thanks to [@gnutix]
- [#1588] Fix foreach scope for `AddDefaultValueForUndefinedVariableRector`
- [#1601] Fix trait skip in `RemoveParentCallWithoutParentRector`

### Changed

- [#1587] [PHP] Skip list in `AddDefaultValueForUndefinedVariableRector`
- [#1651] Update link to `UPGRADE.md 3.0`, Thanks to [@vasilvestre]
- [#1581] use `STOP_TRAVERSAL` over exception
- [#1525] [#1469] prototype github issue template, Thanks to [@funivan]

## [v0.5.5] - 2019-06-08

- [#1577] skip analysis of new anonymous classes in method call [closes [#1574]]

<!-- dumped content end -->

## [v0.5.4] - 2019-06-06

### Added

- [#1570] [DeadCode] Add `RemoveConcatAutocastRector`
- [#1519] [Symfony] Add `MakeCommandLazyRector`
- [#1568] [Symfony 4.3] Add `parent::__construct` to `EventDispatcher`
- [#1562] add `CallableNodeTraverserTrait`

### Changed

- [#1523] make RectorsFinder return consistent order by shorter names
- [#1572] [Symfony 4.3] Improve event name and class flip
- [#1548] Widen `PHPStan` version constraint to `~0.11.6`., Thanks to [@Aerendir]

### Fixed

- [#1550] Fix `symfony/finder` 3.4 compact in `LevelOptionResolver`
- [#1544] Fix phpdoc-parser BC break for generic multiline nodes
- [#1569] Fix reporting of changed nodes
- [#1559] Fix classname change for `FilterControllerEvent`, Thanks to [@keulinho]
- [#1557] Fix scope overflow in `AddDefaultValueForUndefinedVariableRector`
- [#1556] fix static method in reflection for `StaticCallOnNonStaticToInstanceCallRector`
- [#1571] Fix anonymous class method return type resolving
- [#1567] Fix `solid.yaml`, Thanks to [@Great-Antique]
- [#1549] fix unescaped regular
- [#1538] Don't remove aliases of classes with same name but different namespaces., Thanks to [@Aerendir]
- [#1553] [CodeQuality] Skip collections `ForeachToInArrayRector` [closes [#1533]]
- [#1524] Cover multiline in description-aware nodes [closes [#1522]]
- [#1565] make `StringClassNameToClassConstantRector` case sensitive [closes [#1539]]
- [#1545] Ensure Doctrine's `Collection`-like arrays are ignored., Thanks to [@Aerendir]
- [#1554] optimize
- [#1558] Do not call parent constructor of `AutowiredEventDispatcher` unless it exists, Thanks to [@cgkkevinr]
- [#1561] make `RemoveUnusedAliasRector` take into account aliases that keep 2 classes with same short name explicit
- [#1555] skip nullable array for `ArrayPropertyDefaultValueRector` [closes [#1542]]

## [v0.5.3] - 2019-06-01

### Added

- [#1520] [PHP] Add `is_countable` to `CountOnNull`

### Changed

- [#1521] make `LevelOptionResolver` smarter + add `--set` alias to `--level`

## [v0.5.2] - 2019-05-31

### Fixed

- [#1510] [CodeQuality] Add trait and parent class support for `CompleteDynamicPropertiesRector`
- [#1508] [CodeQuality] Fix unneeded return in `CallableThisArrayToAnonymousFunctionRector`
- [#1509] [PHP] Fix `AddDefaultValueForUndefinedVariableRector` for static variable
- [#1507] [PHP] Fix `BinaryOpBetweenNumberAndStringRector` for concat
- [#1517] fix `RenameClassRector` to change only direct class names, not children
- [#1511] fix `PHPStormVarAnnotationRector` for too nested var [closes [#1407]]
- [#1513] Make Symfony 4.3 + phpdoc-parser 0.3.4 compatible
- [#1506] Ensure `static` variables are considered as declared, Thanks to [@Aerendir]
- [#1502] Test concatenation dot is ignored, Thanks to [@Aerendir]

## [v0.5.1] - 2019-05-30

### Added

- [#1496] [Symfony 4.3] Add class renames, method renames and added arguments

### Fixed

- [#1493] Fix documentation minor mistake, Thanks to [@alterphp]

<!-- dumped content end -->

## [v0.5.0] - 2019-05-28

### Added

- [#1487] [Legacy] Remove singleton
- [#1468] [MultipleClassFileToPsr4ClassesRector] Original file is deleted even if class matches filename, Thanks to [@JanMikes]
- [#1424] [SplitStringClassConstantToClassConstFetchRector] Remove duplicated namespace separator, Thanks to [@mxr576]
- [#1470] [PHP][CodingStyle] string class to ::class
- [#1367] [DeadCode] Anonymous class implementing an interface doesn't respect interface signature, Thanks to [@pierredup]
- [#1404] [TypeDeclaration] Create new set
- [#1414] [PSR-4 Split] Split interfaces and traits as well, Thanks to [@JanMikes]
- [#1416] [PHP 7.4] Spread array
- [#1419] [CodeQuality] Add For to foreach
- [#1443] [CodeQuality] Add CompactToVariablesRector
- [#1488] 🎉[CodeQuality] Add CompleteDynamicPropertiesRector
- [#1390] [CodeQuality] Add AndAssignsToSeparateLinesRector
- [#1485] [CodingStyle] Add VarConstantCommentRector
- [#1484] [CodingStyle] Add SplitDoubleAssignRector
- [#1483] [CodingStyle] Add ArrayPropertyDefaultValueRector
- [#1482] [CodingStyle] Add CatchExceptionNameMatchingTypeRector
- [#1481] [CodingStyle] Add FollowRequireByDirRector
- [#1480] [CodingStyle] Add ConsistentPregDelimiterRector
- [#1447] [CodingStyle] add partial support already imported support to ImportFullyQualifiedNamesRector
- [#1389] [DeadCode] Add RemoveAndTrueRector
- [#1392] [DeadCode] Add RemoveDefaultArgumentValueRector
- [#1451] [PHP] Add RemoveMissingCompactVariableRector
- [#1418] [PHP-DI] Add php-di [@Inject] annotation import
- [#1460] [Psr4] Add supprot for namespace less MultipleClassFileToPsr4ClassesRector
- [#1486] [SOLID] Add AbstractChildlessUnusedClassesRector
- [#1406] [TypeDeclaration] Add AddFunctionReturnTypeRector
- [#1403] [Symfony 4.3] Add swapped dispatch() arguments for EventDispatcher
- [#1429] Add missing end bracket at HowItWorks.md's sample, Thanks to [@sasezaki]
- [#1430] Add working directory option, Thanks to [@ktomk]
- [#1417] Add trait analysis without class dependency
- [#1491] add JsonOutputFormatter
- [#1492] Symplify 6 bump + add relative paths to JsonOutputFormatter
- [#1410] [PHP 7.4] Add ClosureToArrowFunctionRector
- [#1449] [PHP 7.1] Add BinaryOpBetweenNumberAndStringRector
- [#1450] [PHP 7.1] Add float to BinaryOpBetweenNumberAndStringRector
- [#1452] Add non-namespaced support to ImportFullyQualifiedNamesRector
- [#1461] [supporŧ] add funding Github - news from Github Satellite
- [#1478] composer: add authors
- [#1382] Add support to rename classes and it's namespace, Thanks to [@JanMikes]
- [#1377] Add function support to ImportFullyQualifiedNamesRector
- [#1489] [backers] add Jan Votruba

### Changed

- [#1412] [ImportFullyQualifiedNamesRector] Allow to opt-out from doc block modification, Thanks to [@mxr576]
- [#1439] [PSR4] Improve MultipleClassFileToPsr4ClassesRector output
- [#1477] introduce OutputFormatterCollector to allow extension of output formatters
- [#1446] Narrow ArraySpreadInsteadOfArrayMergeRector to numeric-arrays only
- [#1479] update to php-parser 4.2.2

### Fixed

- [#1395] Preserve file permissions when updating a file, Thanks to [@LeSuisse]
- [#1397] [DeadCode] Various set fixes
- [#1398] Fix travis for Laravel self-run
- [#1391] fix ImportFullyQualifiedNamesRector on multiple files
- [#1444] fix ReservedObjectRector for lowercased object
- [#1471] fix deleting file that matches class name
- [#1425] speedup RenameClassRector on doc comments
- [#1464] do not override printing files with previous stmts if possible

### Removed

- [#1415] Removed duplicated code, Thanks to [@DaveLiddament]

## [v0.4.12] - 2019-05-02

### Added

- [#1326] [CodingStyle] Add SplitStringClassConstantToClassConstFetchRector
- [#1327] [CodingStyle] Add ImportFullyQualifiedNamesRector
- [#1363] [PHP] Add AddDefaultValueForUndefinedVariableRector
- [#1347] [RemovingStatic] Add new level
- [#1333] Add PrivatizeLocalClassConstantRector to SOLID, Thanks to [@mxr576]
- [#1362] [PHP 7.4] Add ReservedFnFunctionRector

### Changed

- [#1323] allow Nette 3.0, Thanks to [@mimmi20]
- [#1325] [DeadCode] Skip magic methods in RemoveUnusedParameterRector
- [#1351] [DeadCode] Keep different case in RemoveDoubleAssignRector
- [#1353] [DeadCode] Skip traits in RemoveUnusedPrivateMethodRector
- [#1370] make ImportFullyQualifiedNamesRector take into account existing imports on combination of PHP and doc block
- [#1354] Speedup tests by 90 % from 41 secs to 4
- [#1357] Tests improvements
- [#1359] Notice file rectors on run

### Fixed

- [#1369] [CodingStyle] ImportsInClassCollection fixes
- [#1368] [CodingStyle] Fix ImportFullyQualifiedNamesRector for self imports
- [#1365] [CodingStyle] Fix interface short name identical with class name in ImportFullyQualifiedNamesRector
- [#1348] [DeadCode] Remove overriden fix
- [#1352] [DeadCode] Fix RemoveUnusedPrivateMethodRector for self call
- [#1350] [Laravel] Fix MinutesToSecondsInCacheRector DateTimeInterface argument
- [#1361] [Symfony] Fix GetRequestRector for get non method calls
- [#1375] Fix file removal in MultipleClassFileToPsr4ClassesRector
- [#1320] [CakePHP]FIx rule for cakephp37, Thanks to [@o0h]
- [#1331] Use `dev` as Symfony default env to fix issue [#1319], Thanks to [@BernhardWebstudio]

### Removed

- [#1349] [DeadCode] Remove double

## [v0.4.11] - 2019-04-14

### Added

- [#1317] Add Changelog
- [#1302] [Symfony 4.3] Add SimplifyWebTestCaseAssertionsRector
- [#1302] [Symfony 4.3] Add `SimplifyWebTestCaseAssertionsRector`
- [#1311] [CodingStyle] Add `SplitGroupedConstantsAndPropertiesRector`
- [#1301] [PHPUnit] Add `RemoveExpectAnyFromMockRector`
- [#1304] [SOLID] Add `PrivatizeLocalClassConstantRector`
- [#1303] [SOLID] Add `FinalizeClassesWithoutChildrenRector`
- [#1302] [Symfony 4.3] Add `SimplifyWebTestCaseAssertionsRector`

### Changed

- [#1316] Merge collected nodes to ParsedNodesByType
- [#1314] rename `Attribute` to `AttributeKey` to prevent duplicated names with other projects
- [#1318] Update reference to drupal8-rector/drupal8-rector, Thanks to [@mxr576]
- [#1316] Merge collected nodes to ParsedNodesByType

### Fixed

- [#1305] [Symfony 3.0] Fix wrong indentation in symfony30.yaml, Thanks to [@Dodenis]

[#1302]: https://github.com/rectorphp/rector/pull/1302
[#1314]: https://github.com/rectorphp/rector/pull/1314
[#1311]: https://github.com/rectorphp/rector/pull/1311
[#1305]: https://github.com/rectorphp/rector/pull/1305
[#1304]: https://github.com/rectorphp/rector/pull/1304
[#1303]: https://github.com/rectorphp/rector/pull/1303
[#1301]: https://github.com/rectorphp/rector/pull/1301
[@Dodenis]: https://github.com/Dodenis
[#1318]: https://github.com/rectorphp/rector/pull/1318
[#1317]: https://github.com/rectorphp/rector/pull/1317
[#1316]: https://github.com/rectorphp/rector/pull/1316
[@mxr576]: https://github.com/mxr576
[#1375]: https://github.com/rectorphp/rector/pull/1375
[#1370]: https://github.com/rectorphp/rector/pull/1370
[#1369]: https://github.com/rectorphp/rector/pull/1369
[#1368]: https://github.com/rectorphp/rector/pull/1368
[#1365]: https://github.com/rectorphp/rector/pull/1365
[#1363]: https://github.com/rectorphp/rector/pull/1363
[#1362]: https://github.com/rectorphp/rector/pull/1362
[#1361]: https://github.com/rectorphp/rector/pull/1361
[#1359]: https://github.com/rectorphp/rector/pull/1359
[#1357]: https://github.com/rectorphp/rector/pull/1357
[#1354]: https://github.com/rectorphp/rector/pull/1354
[#1353]: https://github.com/rectorphp/rector/pull/1353
[#1352]: https://github.com/rectorphp/rector/pull/1352
[#1351]: https://github.com/rectorphp/rector/pull/1351
[#1350]: https://github.com/rectorphp/rector/pull/1350
[#1349]: https://github.com/rectorphp/rector/pull/1349
[#1348]: https://github.com/rectorphp/rector/pull/1348
[#1347]: https://github.com/rectorphp/rector/pull/1347
[#1333]: https://github.com/rectorphp/rector/pull/1333
[#1331]: https://github.com/rectorphp/rector/pull/1331
[#1327]: https://github.com/rectorphp/rector/pull/1327
[#1326]: https://github.com/rectorphp/rector/pull/1326
[#1325]: https://github.com/rectorphp/rector/pull/1325
[#1323]: https://github.com/rectorphp/rector/pull/1323
[#1320]: https://github.com/rectorphp/rector/pull/1320
[#1319]: https://github.com/rectorphp/rector/pull/1319
[@o0h]: https://github.com/o0h
[@mimmi20]: https://github.com/mimmi20
[@BernhardWebstudio]: https://github.com/BernhardWebstudio
[v0.4.11]: https://github.com/rectorphp/rector/compare/v0.4.11...v0.4.11

[#1492]: https://github.com/rectorphp/rector/pull/1492
[#1491]: https://github.com/rectorphp/rector/pull/1491
[#1489]: https://github.com/rectorphp/rector/pull/1489
[#1488]: https://github.com/rectorphp/rector/pull/1488
[#1487]: https://github.com/rectorphp/rector/pull/1487
[#1486]: https://github.com/rectorphp/rector/pull/1486
[#1485]: https://github.com/rectorphp/rector/pull/1485
[#1484]: https://github.com/rectorphp/rector/pull/1484
[#1483]: https://github.com/rectorphp/rector/pull/1483
[#1482]: https://github.com/rectorphp/rector/pull/1482
[#1481]: https://github.com/rectorphp/rector/pull/1481
[#1480]: https://github.com/rectorphp/rector/pull/1480
[#1479]: https://github.com/rectorphp/rector/pull/1479
[#1478]: https://github.com/rectorphp/rector/pull/1478
[#1477]: https://github.com/rectorphp/rector/pull/1477
[#1471]: https://github.com/rectorphp/rector/pull/1471
[#1470]: https://github.com/rectorphp/rector/pull/1470
[#1468]: https://github.com/rectorphp/rector/pull/1468
[#1464]: https://github.com/rectorphp/rector/pull/1464
[#1461]: https://github.com/rectorphp/rector/pull/1461
[#1460]: https://github.com/rectorphp/rector/pull/1460
[#1452]: https://github.com/rectorphp/rector/pull/1452
[#1451]: https://github.com/rectorphp/rector/pull/1451
[#1450]: https://github.com/rectorphp/rector/pull/1450
[#1449]: https://github.com/rectorphp/rector/pull/1449
[#1447]: https://github.com/rectorphp/rector/pull/1447
[#1446]: https://github.com/rectorphp/rector/pull/1446
[#1444]: https://github.com/rectorphp/rector/pull/1444
[#1443]: https://github.com/rectorphp/rector/pull/1443
[#1439]: https://github.com/rectorphp/rector/pull/1439
[#1430]: https://github.com/rectorphp/rector/pull/1430
[#1429]: https://github.com/rectorphp/rector/pull/1429
[#1425]: https://github.com/rectorphp/rector/pull/1425
[#1424]: https://github.com/rectorphp/rector/pull/1424
[#1419]: https://github.com/rectorphp/rector/pull/1419
[#1418]: https://github.com/rectorphp/rector/pull/1418
[#1417]: https://github.com/rectorphp/rector/pull/1417
[#1416]: https://github.com/rectorphp/rector/pull/1416
[#1415]: https://github.com/rectorphp/rector/pull/1415
[#1414]: https://github.com/rectorphp/rector/pull/1414
[#1412]: https://github.com/rectorphp/rector/pull/1412
[#1410]: https://github.com/rectorphp/rector/pull/1410
[#1406]: https://github.com/rectorphp/rector/pull/1406
[#1404]: https://github.com/rectorphp/rector/pull/1404
[#1403]: https://github.com/rectorphp/rector/pull/1403
[#1398]: https://github.com/rectorphp/rector/pull/1398
[#1397]: https://github.com/rectorphp/rector/pull/1397
[#1395]: https://github.com/rectorphp/rector/pull/1395
[#1392]: https://github.com/rectorphp/rector/pull/1392
[#1391]: https://github.com/rectorphp/rector/pull/1391
[#1390]: https://github.com/rectorphp/rector/pull/1390
[#1389]: https://github.com/rectorphp/rector/pull/1389
[#1382]: https://github.com/rectorphp/rector/pull/1382
[#1377]: https://github.com/rectorphp/rector/pull/1377
[#1367]: https://github.com/rectorphp/rector/pull/1367
[@sasezaki]: https://github.com/sasezaki
[@pierredup]: https://github.com/pierredup
[@ktomk]: https://github.com/ktomk
[@LeSuisse]: https://github.com/LeSuisse
[@JanMikes]: https://github.com/JanMikes
[@Inject]: https://github.com/Inject
[@DaveLiddament]: https://github.com/DaveLiddament
[v0.4.12]: https://github.com/rectorphp/rector/compare/v0.4.11...v0.4.12
[v0.5.0]: https://github.com/rectorphp/rector/compare/v0.4.12...v0.5.0
[#1521]: https://github.com/rectorphp/rector/pull/1521
[#1520]: https://github.com/rectorphp/rector/pull/1520
[#1517]: https://github.com/rectorphp/rector/pull/1517
[#1513]: https://github.com/rectorphp/rector/pull/1513
[#1511]: https://github.com/rectorphp/rector/pull/1511
[#1510]: https://github.com/rectorphp/rector/pull/1510
[#1509]: https://github.com/rectorphp/rector/pull/1509
[#1508]: https://github.com/rectorphp/rector/pull/1508
[#1507]: https://github.com/rectorphp/rector/pull/1507
[#1506]: https://github.com/rectorphp/rector/pull/1506
[#1502]: https://github.com/rectorphp/rector/pull/1502
[#1496]: https://github.com/rectorphp/rector/pull/1496
[#1493]: https://github.com/rectorphp/rector/pull/1493
[#1407]: https://github.com/rectorphp/rector/pull/1407
[v0.5.2]: https://github.com/rectorphp/rector/compare/v0.5.1...v0.5.2
[@alterphp]: https://github.com/alterphp
[@Aerendir]: https://github.com/Aerendir
[v0.5.1]: https://github.com/rectorphp/rector/compare/v0.5.0...v0.5.1
[#1572]: https://github.com/rectorphp/rector/pull/1572
[#1571]: https://github.com/rectorphp/rector/pull/1571
[#1570]: https://github.com/rectorphp/rector/pull/1570
[#1569]: https://github.com/rectorphp/rector/pull/1569
[#1568]: https://github.com/rectorphp/rector/pull/1568
[#1567]: https://github.com/rectorphp/rector/pull/1567
[#1565]: https://github.com/rectorphp/rector/pull/1565
[#1562]: https://github.com/rectorphp/rector/pull/1562
[#1561]: https://github.com/rectorphp/rector/pull/1561
[#1559]: https://github.com/rectorphp/rector/pull/1559
[#1558]: https://github.com/rectorphp/rector/pull/1558
[#1557]: https://github.com/rectorphp/rector/pull/1557
[#1556]: https://github.com/rectorphp/rector/pull/1556
[#1555]: https://github.com/rectorphp/rector/pull/1555
[#1554]: https://github.com/rectorphp/rector/pull/1554
[#1553]: https://github.com/rectorphp/rector/pull/1553
[#1550]: https://github.com/rectorphp/rector/pull/1550
[#1549]: https://github.com/rectorphp/rector/pull/1549
[#1548]: https://github.com/rectorphp/rector/pull/1548
[#1545]: https://github.com/rectorphp/rector/pull/1545
[#1544]: https://github.com/rectorphp/rector/pull/1544
[#1542]: https://github.com/rectorphp/rector/pull/1542
[#1539]: https://github.com/rectorphp/rector/pull/1539
[#1538]: https://github.com/rectorphp/rector/pull/1538
[#1533]: https://github.com/rectorphp/rector/pull/1533
[#1524]: https://github.com/rectorphp/rector/pull/1524
[#1523]: https://github.com/rectorphp/rector/pull/1523
[#1522]: https://github.com/rectorphp/rector/pull/1522
[#1519]: https://github.com/rectorphp/rector/pull/1519
[@keulinho]: https://github.com/keulinho
[@cgkkevinr]: https://github.com/cgkkevinr
[@Great-Antique]: https://github.com/Great-Antique
[v0.5.3]: https://github.com/rectorphp/rector/compare/v0.5.2...v0.5.3
[#1659]: https://github.com/rectorphp/rector/pull/1659
[#1656]: https://github.com/rectorphp/rector/pull/1656
[#1651]: https://github.com/rectorphp/rector/pull/1651
[#1647]: https://github.com/rectorphp/rector/pull/1647
[#1645]: https://github.com/rectorphp/rector/pull/1645
[#1644]: https://github.com/rectorphp/rector/pull/1644
[#1643]: https://github.com/rectorphp/rector/pull/1643
[#1642]: https://github.com/rectorphp/rector/pull/1642
[#1640]: https://github.com/rectorphp/rector/pull/1640
[#1631]: https://github.com/rectorphp/rector/pull/1631
[#1625]: https://github.com/rectorphp/rector/pull/1625
[#1622]: https://github.com/rectorphp/rector/pull/1622
[#1619]: https://github.com/rectorphp/rector/pull/1619
[#1618]: https://github.com/rectorphp/rector/pull/1618
[#1617]: https://github.com/rectorphp/rector/pull/1617
[#1616]: https://github.com/rectorphp/rector/pull/1616
[#1615]: https://github.com/rectorphp/rector/pull/1615
[#1612]: https://github.com/rectorphp/rector/pull/1612
[#1611]: https://github.com/rectorphp/rector/pull/1611
[#1610]: https://github.com/rectorphp/rector/pull/1610
[#1609]: https://github.com/rectorphp/rector/pull/1609
[#1605]: https://github.com/rectorphp/rector/pull/1605
[#1603]: https://github.com/rectorphp/rector/pull/1603
[#1602]: https://github.com/rectorphp/rector/pull/1602
[#1601]: https://github.com/rectorphp/rector/pull/1601
[#1599]: https://github.com/rectorphp/rector/pull/1599
[#1596]: https://github.com/rectorphp/rector/pull/1596
[#1590]: https://github.com/rectorphp/rector/pull/1590
[#1589]: https://github.com/rectorphp/rector/pull/1589
[#1588]: https://github.com/rectorphp/rector/pull/1588
[#1587]: https://github.com/rectorphp/rector/pull/1587
[#1586]: https://github.com/rectorphp/rector/pull/1586
[#1584]: https://github.com/rectorphp/rector/pull/1584
[#1583]: https://github.com/rectorphp/rector/pull/1583
[#1582]: https://github.com/rectorphp/rector/pull/1582
[#1581]: https://github.com/rectorphp/rector/pull/1581
[#1577]: https://github.com/rectorphp/rector/pull/1577
[#1574]: https://github.com/rectorphp/rector/pull/1574
[#1525]: https://github.com/rectorphp/rector/pull/1525
[#1469]: https://github.com/rectorphp/rector/pull/1469
[@vasilvestre]: https://github.com/vasilvestre
[@shyim]: https://github.com/shyim
[@pxgamer]: https://github.com/pxgamer
[@gnutix]: https://github.com/gnutix
[@funivan]: https://github.com/funivan
[v0.5.5]: https://github.com/rectorphp/rector/compare/v0.5.4...v0.5.5
[v0.5.4]: https://github.com/rectorphp/rector/compare/v0.5.3...v0.5.4
[#1757]: https://github.com/rectorphp/rector/pull/1757
[#1755]: https://github.com/rectorphp/rector/pull/1755
[#1754]: https://github.com/rectorphp/rector/pull/1754
[#1753]: https://github.com/rectorphp/rector/pull/1753
[#1752]: https://github.com/rectorphp/rector/pull/1752
[#1748]: https://github.com/rectorphp/rector/pull/1748
[#1744]: https://github.com/rectorphp/rector/pull/1744
[#1739]: https://github.com/rectorphp/rector/pull/1739
[#1738]: https://github.com/rectorphp/rector/pull/1738
[#1737]: https://github.com/rectorphp/rector/pull/1737
[#1736]: https://github.com/rectorphp/rector/pull/1736
[#1735]: https://github.com/rectorphp/rector/pull/1735
[#1728]: https://github.com/rectorphp/rector/pull/1728
[#1725]: https://github.com/rectorphp/rector/pull/1725
[#1723]: https://github.com/rectorphp/rector/pull/1723
[#1722]: https://github.com/rectorphp/rector/pull/1722
[#1721]: https://github.com/rectorphp/rector/pull/1721
[#1720]: https://github.com/rectorphp/rector/pull/1720
[#1719]: https://github.com/rectorphp/rector/pull/1719
[#1718]: https://github.com/rectorphp/rector/pull/1718
[#1717]: https://github.com/rectorphp/rector/pull/1717
[#1716]: https://github.com/rectorphp/rector/pull/1716
[#1715]: https://github.com/rectorphp/rector/pull/1715
[#1714]: https://github.com/rectorphp/rector/pull/1714
[#1713]: https://github.com/rectorphp/rector/pull/1713
[#1712]: https://github.com/rectorphp/rector/pull/1712
[#1711]: https://github.com/rectorphp/rector/pull/1711
[#1710]: https://github.com/rectorphp/rector/pull/1710
[#1709]: https://github.com/rectorphp/rector/pull/1709
[#1707]: https://github.com/rectorphp/rector/pull/1707
[#1705]: https://github.com/rectorphp/rector/pull/1705
[#1703]: https://github.com/rectorphp/rector/pull/1703
[#1702]: https://github.com/rectorphp/rector/pull/1702
[#1701]: https://github.com/rectorphp/rector/pull/1701
[#1699]: https://github.com/rectorphp/rector/pull/1699
[#1698]: https://github.com/rectorphp/rector/pull/1698
[#1697]: https://github.com/rectorphp/rector/pull/1697
[#1696]: https://github.com/rectorphp/rector/pull/1696
[#1695]: https://github.com/rectorphp/rector/pull/1695
[#1694]: https://github.com/rectorphp/rector/pull/1694
[#1693]: https://github.com/rectorphp/rector/pull/1693
[#1691]: https://github.com/rectorphp/rector/pull/1691
[#1690]: https://github.com/rectorphp/rector/pull/1690
[#1689]: https://github.com/rectorphp/rector/pull/1689
[#1687]: https://github.com/rectorphp/rector/pull/1687
[#1686]: https://github.com/rectorphp/rector/pull/1686
[#1684]: https://github.com/rectorphp/rector/pull/1684
[#1681]: https://github.com/rectorphp/rector/pull/1681
[#1679]: https://github.com/rectorphp/rector/pull/1679
[#1677]: https://github.com/rectorphp/rector/pull/1677
[#1676]: https://github.com/rectorphp/rector/pull/1676
[#1675]: https://github.com/rectorphp/rector/pull/1675
[#1674]: https://github.com/rectorphp/rector/pull/1674
[#1673]: https://github.com/rectorphp/rector/pull/1673
[#1671]: https://github.com/rectorphp/rector/pull/1671
[#1666]: https://github.com/rectorphp/rector/pull/1666
[#1661]: https://github.com/rectorphp/rector/pull/1661
[v0.5.8]: https://github.com/rectorphp/rector/compare/v0.5.7...v0.5.8
[v0.5.7]: https://github.com/rectorphp/rector/compare/v0.5.6...v0.5.7
[@tigitz]: https://github.com/tigitz
[@szepeviktor]: https://github.com/szepeviktor
[@stloyd]: https://github.com/stloyd
[@ravanscafi]: https://github.com/ravanscafi
[@jeroensmit]: https://github.com/jeroensmit
[@holtkamp]: https://github.com/holtkamp
[@aboks]: https://github.com/aboks
[v0.5.6]: https://github.com/rectorphp/rector/compare/v0.5.5...v0.5.6
[#1864]: https://github.com/rectorphp/rector/pull/1864
[#1863]: https://github.com/rectorphp/rector/pull/1863
[#1862]: https://github.com/rectorphp/rector/pull/1862
[#1859]: https://github.com/rectorphp/rector/pull/1859
[#1858]: https://github.com/rectorphp/rector/pull/1858
[#1857]: https://github.com/rectorphp/rector/pull/1857
[#1856]: https://github.com/rectorphp/rector/pull/1856
[#1855]: https://github.com/rectorphp/rector/pull/1855
[#1854]: https://github.com/rectorphp/rector/pull/1854
[#1853]: https://github.com/rectorphp/rector/pull/1853
[#1852]: https://github.com/rectorphp/rector/pull/1852
[#1851]: https://github.com/rectorphp/rector/pull/1851
[#1850]: https://github.com/rectorphp/rector/pull/1850
[#1845]: https://github.com/rectorphp/rector/pull/1845
[#1844]: https://github.com/rectorphp/rector/pull/1844
[#1842]: https://github.com/rectorphp/rector/pull/1842
[#1841]: https://github.com/rectorphp/rector/pull/1841
[#1840]: https://github.com/rectorphp/rector/pull/1840
[#1839]: https://github.com/rectorphp/rector/pull/1839
[#1838]: https://github.com/rectorphp/rector/pull/1838
[#1837]: https://github.com/rectorphp/rector/pull/1837
[#1836]: https://github.com/rectorphp/rector/pull/1836
[#1835]: https://github.com/rectorphp/rector/pull/1835
[#1833]: https://github.com/rectorphp/rector/pull/1833
[#1832]: https://github.com/rectorphp/rector/pull/1832
[#1831]: https://github.com/rectorphp/rector/pull/1831
[#1830]: https://github.com/rectorphp/rector/pull/1830
[#1829]: https://github.com/rectorphp/rector/pull/1829
[#1828]: https://github.com/rectorphp/rector/pull/1828
[#1827]: https://github.com/rectorphp/rector/pull/1827
[#1826]: https://github.com/rectorphp/rector/pull/1826
[#1825]: https://github.com/rectorphp/rector/pull/1825
[#1823]: https://github.com/rectorphp/rector/pull/1823
[#1821]: https://github.com/rectorphp/rector/pull/1821
[#1819]: https://github.com/rectorphp/rector/pull/1819
[#1818]: https://github.com/rectorphp/rector/pull/1818
[#1817]: https://github.com/rectorphp/rector/pull/1817
[#1814]: https://github.com/rectorphp/rector/pull/1814
[#1813]: https://github.com/rectorphp/rector/pull/1813
[#1808]: https://github.com/rectorphp/rector/pull/1808
[#1807]: https://github.com/rectorphp/rector/pull/1807
[#1806]: https://github.com/rectorphp/rector/pull/1806
[#1805]: https://github.com/rectorphp/rector/pull/1805
[#1804]: https://github.com/rectorphp/rector/pull/1804
[#1803]: https://github.com/rectorphp/rector/pull/1803
[#1802]: https://github.com/rectorphp/rector/pull/1802
[#1800]: https://github.com/rectorphp/rector/pull/1800
[#1794]: https://github.com/rectorphp/rector/pull/1794
[#1793]: https://github.com/rectorphp/rector/pull/1793
[#1791]: https://github.com/rectorphp/rector/pull/1791
[#1790]: https://github.com/rectorphp/rector/pull/1790
[#1789]: https://github.com/rectorphp/rector/pull/1789
[#1788]: https://github.com/rectorphp/rector/pull/1788
[#1787]: https://github.com/rectorphp/rector/pull/1787
[#1786]: https://github.com/rectorphp/rector/pull/1786
[#1782]: https://github.com/rectorphp/rector/pull/1782
[#1781]: https://github.com/rectorphp/rector/pull/1781
[#1780]: https://github.com/rectorphp/rector/pull/1780
[#1779]: https://github.com/rectorphp/rector/pull/1779
[#1777]: https://github.com/rectorphp/rector/pull/1777
[#1776]: https://github.com/rectorphp/rector/pull/1776
[#1774]: https://github.com/rectorphp/rector/pull/1774
[#1772]: https://github.com/rectorphp/rector/pull/1772
[#1771]: https://github.com/rectorphp/rector/pull/1771
[#1769]: https://github.com/rectorphp/rector/pull/1769
[#1764]: https://github.com/rectorphp/rector/pull/1764
[#1762]: https://github.com/rectorphp/rector/pull/1762
[#1761]: https://github.com/rectorphp/rector/pull/1761
[#1760]: https://github.com/rectorphp/rector/pull/1760
[#1759]: https://github.com/rectorphp/rector/pull/1759
[@snapshotpl]: https://github.com/snapshotpl
[@slepic]: https://github.com/slepic
[@scheb]: https://github.com/scheb
[@sashabeton]: https://github.com/sashabeton
[@return]: https://github.com/return
[@hernst42]: https://github.com/hernst42
[v0.5.9]: https://github.com/rectorphp/rector/compare/v0.5.8...v0.5.9
[#1895]: https://github.com/rectorphp/rector/pull/1895
[#1894]: https://github.com/rectorphp/rector/pull/1894
[#1891]: https://github.com/rectorphp/rector/pull/1891
[#1889]: https://github.com/rectorphp/rector/pull/1889
[#1888]: https://github.com/rectorphp/rector/pull/1888
[#1885]: https://github.com/rectorphp/rector/pull/1885
[#1884]: https://github.com/rectorphp/rector/pull/1884
[#1883]: https://github.com/rectorphp/rector/pull/1883
[#1882]: https://github.com/rectorphp/rector/pull/1882
[#1881]: https://github.com/rectorphp/rector/pull/1881
[#1880]: https://github.com/rectorphp/rector/pull/1880
[#1878]: https://github.com/rectorphp/rector/pull/1878
[#1875]: https://github.com/rectorphp/rector/pull/1875
[#1870]: https://github.com/rectorphp/rector/pull/1870
[#1865]: https://github.com/rectorphp/rector/pull/1865
[#1847]: https://github.com/rectorphp/rector/pull/1847
[#1815]: https://github.com/rectorphp/rector/pull/1815
[@markstory]: https://github.com/markstory
[@jacekll]: https://github.com/jacekll
[@Serializer]: https://github.com/Serializer
[@ORM]: https://github.com/ORM
[@Assert]: https://github.com/Assert
[v0.5.10]: https://github.com/rectorphp/rector/compare/v0.5.9...v0.5.10
[#2048]: https://github.com/rectorphp/rector/pull/2048
[#2046]: https://github.com/rectorphp/rector/pull/2046
[#2045]: https://github.com/rectorphp/rector/pull/2045
[#2044]: https://github.com/rectorphp/rector/pull/2044
[#2043]: https://github.com/rectorphp/rector/pull/2043
[#2040]: https://github.com/rectorphp/rector/pull/2040
[#2039]: https://github.com/rectorphp/rector/pull/2039
[#2037]: https://github.com/rectorphp/rector/pull/2037
[#2036]: https://github.com/rectorphp/rector/pull/2036
[#2035]: https://github.com/rectorphp/rector/pull/2035
[#2034]: https://github.com/rectorphp/rector/pull/2034
[#2033]: https://github.com/rectorphp/rector/pull/2033
[#2032]: https://github.com/rectorphp/rector/pull/2032
[#2031]: https://github.com/rectorphp/rector/pull/2031
[#2030]: https://github.com/rectorphp/rector/pull/2030
[#2027]: https://github.com/rectorphp/rector/pull/2027
[#2026]: https://github.com/rectorphp/rector/pull/2026
[#2025]: https://github.com/rectorphp/rector/pull/2025
[#2024]: https://github.com/rectorphp/rector/pull/2024
[#2023]: https://github.com/rectorphp/rector/pull/2023
[#2022]: https://github.com/rectorphp/rector/pull/2022
[#2021]: https://github.com/rectorphp/rector/pull/2021
[#2020]: https://github.com/rectorphp/rector/pull/2020
[#2019]: https://github.com/rectorphp/rector/pull/2019
[#2018]: https://github.com/rectorphp/rector/pull/2018
[#2017]: https://github.com/rectorphp/rector/pull/2017
[#2016]: https://github.com/rectorphp/rector/pull/2016
[#2015]: https://github.com/rectorphp/rector/pull/2015
[#2014]: https://github.com/rectorphp/rector/pull/2014
[#2013]: https://github.com/rectorphp/rector/pull/2013
[#2012]: https://github.com/rectorphp/rector/pull/2012
[#2011]: https://github.com/rectorphp/rector/pull/2011
[#2006]: https://github.com/rectorphp/rector/pull/2006
[#2003]: https://github.com/rectorphp/rector/pull/2003
[#2002]: https://github.com/rectorphp/rector/pull/2002
[#2001]: https://github.com/rectorphp/rector/pull/2001
[#2000]: https://github.com/rectorphp/rector/pull/2000
[#1999]: https://github.com/rectorphp/rector/pull/1999
[#1998]: https://github.com/rectorphp/rector/pull/1998
[#1997]: https://github.com/rectorphp/rector/pull/1997
[#1996]: https://github.com/rectorphp/rector/pull/1996
[#1994]: https://github.com/rectorphp/rector/pull/1994
[#1993]: https://github.com/rectorphp/rector/pull/1993
[#1992]: https://github.com/rectorphp/rector/pull/1992
[#1991]: https://github.com/rectorphp/rector/pull/1991
[#1990]: https://github.com/rectorphp/rector/pull/1990
[#1989]: https://github.com/rectorphp/rector/pull/1989
[#1986]: https://github.com/rectorphp/rector/pull/1986
[#1984]: https://github.com/rectorphp/rector/pull/1984
[#1983]: https://github.com/rectorphp/rector/pull/1983
[#1982]: https://github.com/rectorphp/rector/pull/1982
[#1980]: https://github.com/rectorphp/rector/pull/1980
[#1979]: https://github.com/rectorphp/rector/pull/1979
[#1978]: https://github.com/rectorphp/rector/pull/1978
[#1976]: https://github.com/rectorphp/rector/pull/1976
[#1972]: https://github.com/rectorphp/rector/pull/1972
[#1971]: https://github.com/rectorphp/rector/pull/1971
[#1969]: https://github.com/rectorphp/rector/pull/1969
[#1968]: https://github.com/rectorphp/rector/pull/1968
[#1967]: https://github.com/rectorphp/rector/pull/1967
[#1966]: https://github.com/rectorphp/rector/pull/1966
[#1962]: https://github.com/rectorphp/rector/pull/1962
[#1961]: https://github.com/rectorphp/rector/pull/1961
[#1958]: https://github.com/rectorphp/rector/pull/1958
[#1957]: https://github.com/rectorphp/rector/pull/1957
[#1955]: https://github.com/rectorphp/rector/pull/1955
[#1954]: https://github.com/rectorphp/rector/pull/1954
[#1953]: https://github.com/rectorphp/rector/pull/1953
[#1952]: https://github.com/rectorphp/rector/pull/1952
[#1951]: https://github.com/rectorphp/rector/pull/1951
[#1948]: https://github.com/rectorphp/rector/pull/1948
[#1947]: https://github.com/rectorphp/rector/pull/1947
[#1946]: https://github.com/rectorphp/rector/pull/1946
[#1943]: https://github.com/rectorphp/rector/pull/1943
[#1940]: https://github.com/rectorphp/rector/pull/1940
[#1939]: https://github.com/rectorphp/rector/pull/1939
[#1938]: https://github.com/rectorphp/rector/pull/1938
[#1937]: https://github.com/rectorphp/rector/pull/1937
[#1935]: https://github.com/rectorphp/rector/pull/1935
[#1934]: https://github.com/rectorphp/rector/pull/1934
[#1933]: https://github.com/rectorphp/rector/pull/1933
[#1932]: https://github.com/rectorphp/rector/pull/1932
[#1931]: https://github.com/rectorphp/rector/pull/1931
[#1928]: https://github.com/rectorphp/rector/pull/1928
[#1927]: https://github.com/rectorphp/rector/pull/1927
[#1926]: https://github.com/rectorphp/rector/pull/1926
[#1925]: https://github.com/rectorphp/rector/pull/1925
[#1924]: https://github.com/rectorphp/rector/pull/1924
[#1923]: https://github.com/rectorphp/rector/pull/1923
[#1922]: https://github.com/rectorphp/rector/pull/1922
[#1921]: https://github.com/rectorphp/rector/pull/1921
[#1917]: https://github.com/rectorphp/rector/pull/1917
[#1916]: https://github.com/rectorphp/rector/pull/1916
[#1915]: https://github.com/rectorphp/rector/pull/1915
[#1914]: https://github.com/rectorphp/rector/pull/1914
[#1912]: https://github.com/rectorphp/rector/pull/1912
[#1910]: https://github.com/rectorphp/rector/pull/1910
[#1908]: https://github.com/rectorphp/rector/pull/1908
[#1906]: https://github.com/rectorphp/rector/pull/1906
[#1903]: https://github.com/rectorphp/rector/pull/1903
[#1902]: https://github.com/rectorphp/rector/pull/1902
[#1901]: https://github.com/rectorphp/rector/pull/1901
[#1898]: https://github.com/rectorphp/rector/pull/1898
[#1897]: https://github.com/rectorphp/rector/pull/1897
[#1896]: https://github.com/rectorphp/rector/pull/1896
[#1869]: https://github.com/rectorphp/rector/pull/1869
[#1866]: https://github.com/rectorphp/rector/pull/1866
[#1438]: https://github.com/rectorphp/rector/pull/1438
[#3]: https://github.com/rectorphp/rector/pull/3
[v0.5.12]: https://github.com/rectorphp/rector/compare/v0.5.11...v0.5.12
[@see]: https://github.com/see
[@drbyte]: https://github.com/drbyte
[@atierant]: https://github.com/atierant
[@adrozdek]: https://github.com/adrozdek
[@HypeMC]: https://github.com/HypeMC
[@ADmad]: https://github.com/ADmad
[v0.5.11]: https://github.com/rectorphp/rector/compare/v0.5.10...v0.5.11
[#2125]: https://github.com/rectorphp/rector/pull/2125
[#2124]: https://github.com/rectorphp/rector/pull/2124
[#2123]: https://github.com/rectorphp/rector/pull/2123
[#2122]: https://github.com/rectorphp/rector/pull/2122
[#2121]: https://github.com/rectorphp/rector/pull/2121
[#2115]: https://github.com/rectorphp/rector/pull/2115
[#2112]: https://github.com/rectorphp/rector/pull/2112
[#2109]: https://github.com/rectorphp/rector/pull/2109
[#2107]: https://github.com/rectorphp/rector/pull/2107
[#2103]: https://github.com/rectorphp/rector/pull/2103
[#2102]: https://github.com/rectorphp/rector/pull/2102
[#2101]: https://github.com/rectorphp/rector/pull/2101
[#2100]: https://github.com/rectorphp/rector/pull/2100
[#2099]: https://github.com/rectorphp/rector/pull/2099
[#2097]: https://github.com/rectorphp/rector/pull/2097
[#2096]: https://github.com/rectorphp/rector/pull/2096
[#2095]: https://github.com/rectorphp/rector/pull/2095
[#2094]: https://github.com/rectorphp/rector/pull/2094
[#2093]: https://github.com/rectorphp/rector/pull/2093
[#2091]: https://github.com/rectorphp/rector/pull/2091
[#2088]: https://github.com/rectorphp/rector/pull/2088
[#2084]: https://github.com/rectorphp/rector/pull/2084
[#2083]: https://github.com/rectorphp/rector/pull/2083
[#2082]: https://github.com/rectorphp/rector/pull/2082
[#2081]: https://github.com/rectorphp/rector/pull/2081
[#2080]: https://github.com/rectorphp/rector/pull/2080
[#2079]: https://github.com/rectorphp/rector/pull/2079
[#2078]: https://github.com/rectorphp/rector/pull/2078
[#2077]: https://github.com/rectorphp/rector/pull/2077
[#2076]: https://github.com/rectorphp/rector/pull/2076
[#2075]: https://github.com/rectorphp/rector/pull/2075
[#2074]: https://github.com/rectorphp/rector/pull/2074
[#2073]: https://github.com/rectorphp/rector/pull/2073
[#2072]: https://github.com/rectorphp/rector/pull/2072
[#2070]: https://github.com/rectorphp/rector/pull/2070
[#2067]: https://github.com/rectorphp/rector/pull/2067
[#2065]: https://github.com/rectorphp/rector/pull/2065
[#2062]: https://github.com/rectorphp/rector/pull/2062
[#2060]: https://github.com/rectorphp/rector/pull/2060
[#2054]: https://github.com/rectorphp/rector/pull/2054
[#2052]: https://github.com/rectorphp/rector/pull/2052
[#2049]: https://github.com/rectorphp/rector/pull/2049
[#2047]: https://github.com/rectorphp/rector/pull/2047
[#2009]: https://github.com/rectorphp/rector/pull/2009
[@jeroenherczeg]: https://github.com/jeroenherczeg
[@TODO]: https://github.com/TODO
[v0.5.13]: https://github.com/rectorphp/rector/compare/v0.5.12...v0.5.13
[#2166]: https://github.com/rectorphp/rector/pull/2166
[#2165]: https://github.com/rectorphp/rector/pull/2165
[#2164]: https://github.com/rectorphp/rector/pull/2164
[#2162]: https://github.com/rectorphp/rector/pull/2162
[#2159]: https://github.com/rectorphp/rector/pull/2159
[#2156]: https://github.com/rectorphp/rector/pull/2156
[#2155]: https://github.com/rectorphp/rector/pull/2155
[#2154]: https://github.com/rectorphp/rector/pull/2154
[#2152]: https://github.com/rectorphp/rector/pull/2152
[#2151]: https://github.com/rectorphp/rector/pull/2151
[#2150]: https://github.com/rectorphp/rector/pull/2150
[#2149]: https://github.com/rectorphp/rector/pull/2149
[#2148]: https://github.com/rectorphp/rector/pull/2148
[#2147]: https://github.com/rectorphp/rector/pull/2147
[#2146]: https://github.com/rectorphp/rector/pull/2146
[#2145]: https://github.com/rectorphp/rector/pull/2145
[#2144]: https://github.com/rectorphp/rector/pull/2144
[#2142]: https://github.com/rectorphp/rector/pull/2142
[#2141]: https://github.com/rectorphp/rector/pull/2141
[#2140]: https://github.com/rectorphp/rector/pull/2140
[#2139]: https://github.com/rectorphp/rector/pull/2139
[#2135]: https://github.com/rectorphp/rector/pull/2135
[#2132]: https://github.com/rectorphp/rector/pull/2132
[#2130]: https://github.com/rectorphp/rector/pull/2130
[#2129]: https://github.com/rectorphp/rector/pull/2129
[#2128]: https://github.com/rectorphp/rector/pull/2128
[#2114]: https://github.com/rectorphp/rector/pull/2114
[#2090]: https://github.com/rectorphp/rector/pull/2090
[#2087]: https://github.com/rectorphp/rector/pull/2087
[v0.5.16]: https://github.com/rectorphp/rector/compare/v0.5.15...v0.5.16
[@lapetr]: https://github.com/lapetr
[v0.5.15]: https://github.com/rectorphp/rector/compare/v0.5.14...v0.5.15
[v0.5.14]: https://github.com/rectorphp/rector/compare/v0.5.13...v0.5.14