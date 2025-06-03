<?php

declare(strict_types=1);

namespace Kapersoft\AwesomeRectorRules;

use PhpParser\Node;
use PhpParser\Node\UnionType;
use Rector\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class MoveNullToEndOfUnionTypeRector extends AbstractRector
{
    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition(
            'Move null to the end of union types',
            [
                new CodeSample(
                    <<<'CODE_SAMPLE'
function someFunction(null|string $param): null|int
{
}
CODE_SAMPLE
                    ,
                    <<<'CODE_SAMPLE'
function someFunction(string|null $param): int|null
{
}
CODE_SAMPLE
                ),
            ]
        );
    }

    /** @return array<class-string<Node>> */
    public function getNodeTypes(): array
    {
        return [UnionType::class];
    }

    /** @param  UnionType  $node */
    public function refactor(Node $node): ?UnionType
    {
        $types = $node->types;
        $nullType = null;
        $otherTypes = [];

        foreach ($types as $type) {
            if ($this->isName($type, 'null')) {
                $nullType = $type;
            } else {
                $otherTypes[] = $type;
            }
        }

        if ($nullType === null) {
            return null;
        }

        $otherTypes[] = $nullType;

        return new UnionType($otherTypes);
    }
}
