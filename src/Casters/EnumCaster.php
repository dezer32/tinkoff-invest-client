<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Casters;

use LogicException;
use MyCLabs\Enum\Enum;
use Spatie\DataTransferObject\Caster;

class EnumCaster implements Caster
{
    public function __construct(
        private array $types
    ) {
    }

    public function cast(mixed $value): Enum
    {
        if (is_subclass_of($value, Enum::class)) {
            return $value;
        }

        foreach ($this->types as $type) {
            if (is_subclass_of($type, Enum::class)) {
                return $type::from($value);
            }
        }

        throw new LogicException(
            "Caster [EnumCaster] may only be used to cast MyCLabs\\Enum."
        );
    }
}
