# kapersoft/awesome-rector-rules

A set of awesome [Rector](https://github.com/rectorphp/rector) rules.

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

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md) for contribution guidelines.

## Security

See [SECURITY.md](SECURITY.md) for the security policy and reporting guidelines.

## License

This project is licensed under the [MIT License](LICENSE).
