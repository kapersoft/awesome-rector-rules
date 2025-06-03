<?php

declare(strict_types=1);

use Kapersoft\AwesomeRectorRules\MoveNullToEndOfUnionTypeRector;
use Kapersoft\AwesomeRectorRules\NullableTypeToUnionTypeRector;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rules([
        NullableTypeToUnionTypeRector::class,
        MoveNullToEndOfUnionTypeRector::class,
    ]);
    $rectorConfig->autoloadPaths([
        __DIR__.'/src/NullableTypeToUnionTypeRector.php',
        __DIR__.'/src/MoveNullToEndOfUnionTypeRector.php',
    ]);
};
