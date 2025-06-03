<?php

namespace tests\Fixture;

use DateTime;
use DateTimeImmutable;

class SomeClass
{
    public function simpleNullable(int $value): string
    {
        return null;
    }

    public function classNullable(SomeClass $value): SomeClass
    {
        return null;
    }

    public function simpleNullable(?int $value): ?string
    {
        return null;
    }

    public function classNullable(?SomeClass $value): ?SomeClass
    {
        return null;
    }
}

-----
<?php

namespace tests\Fixture;

use DateTime;
use DateTimeImmutable;

class SomeClass
{
    public function simpleNullable(int $value): string
    {
        return null;
    }

    public function classNullable(SomeClass $value): SomeClass
    {
        return null;
    }

    public function simpleNullable(int|null $value): string|null
    {
        return null;
    }

    public function classNullable(SomeClass|null $value): SomeClass|null
    {
        return null;
    }
}
