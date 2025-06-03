<?php

declare(strict_types=1);

namespace Kapersoft\AwesomeRectorRules\Tests;

use Generator;
use PHPUnit\Framework\Attributes\DataProvider;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;

final class RectorRuleTest extends AbstractRectorTestCase
{
    #[DataProvider('fixtures')]
    public function test(string $fixture): void
    {
        $this->doTestFile($fixture);
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__.'/config.php';
    }

    public static function fixtures(): Generator
    {
        $fixtures = glob(__DIR__.'/Fixture/*.php.inc') ?: [];

        foreach ($fixtures as $fixture) {
            yield [$fixture];
        }
    }
}
