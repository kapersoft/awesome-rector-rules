# kapersoft/awesome-rector-rules

A set of awesome [Rector](https://github.com/rectorphp/rector) rules.

## Installation

Install via [Composer](https://getcomposer.org/):

```bash
composer require kapersoft/awesome-rector-rules --dev
```

Then register the rules in your `rector.php` config:

```php
use Kapersoft\AwesomeRectorRules\NullableTypeToUnionTypeRector;
use Kapersoft\AwesomeRectorRules\MoveNullToEndOfUnionTypeRector;

return static function (Rector\Config\RectorConfig $rectorConfig): void {
    $rectorConfig->rules([
        NullableTypeToUnionTypeRector::class,
        MoveNullToEndOfUnionTypeRector::class,
    ]);
};
```

## Included Rector Rules

### 1. NullableTypeToUnionTypeRector

**Description:** Converts nullable types (e.g., `?int`) to explicit union types with `null` (e.g., `int|null`).

**Before:**

```php
function someFunction(?int $value): ?string
{
    return null;
}
```

**After:**

```php
function someFunction(int|null $value): string|null
{
    return null;
}
```

### 2. MoveNullToEndOfUnionTypeRector

**Description:** Moves `null` to the end of union types for consistency (e.g., `null|string` → `string|null`).

**Before:**

```php
function someFunction(null|string $param): null|int
{
}
```

**After:**

```php
function someFunction(string|null $param): int|null
{
}
```

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for a history of changes.

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for contribution guidelines.

## Security

See [SECURITY.md](SECURITY.md) for the security policy and reporting guidelines.

## License

This project is licensed under the [MIT License](LICENSE).
