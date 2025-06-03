<?php

namespace tests\Fixture;

use DateTime;
use DateTimeImmutable;

class SomeClass
{
    public function simpleNullable(null|int $value): null|string
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
    public function simpleNullable(int|null $value): string|null
    {
        return null;
    }
}
