<?php

declare(strict_types=1);

namespace Kapersoft\AwesomeRectorRules;

use PhpParser\Node;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\UnionType;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class NullableTypeToUnionTypeRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Convert nullable types to union types with null',
            [
                new CodeSample(
                    <<<'CODE_SAMPLE'
function someFunction(?int $value): ?string
{
    return null;
}
CODE_SAMPLE
                    ,
                    <<<'CODE_SAMPLE'
function someFunction(int|null $value): string|null
{
    return null;
}
CODE_SAMPLE
                ),
            ]
        );
    }

    /** @return array<class-string<Node>> */
    public function getNodeTypes(): array
    {
        return [NullableType::class];
    }

    /** @param  NullableType  $node */
    public function refactor(Node $node): Node
    {
        $type = $node->type;

        // If the type is already a UnionType, we need to create a new union with null
        if ($type instanceof UnionType) {
            $types = $type->types;
            $types[] = new Name('null');

            return new UnionType($types);
        }

        // For simple types, create a union with the type and null
        return new UnionType([$type, new Name('null')]);
    }
}
