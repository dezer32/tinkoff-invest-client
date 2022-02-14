<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Casters;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Spatie\DataTransferObject\Caster;

class UuidCaster implements Caster
{
    public function cast(mixed $value): mixed
    {
        if (is_subclass_of($value, UuidInterface::class)) {
            return $value;
        }

        return Uuid::fromString($value);
    }
}
