<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Casters;

use Carbon\Carbon;
use DateTimeInterface;
use LogicException;
use Spatie\DataTransferObject\Caster;

class DateTimeInterfaceCaster implements Caster
{
    public function __construct(
        private array $types
    ) {
    }

    public function cast(mixed $value): DateTimeInterface
    {
        if (is_subclass_of($value, DateTimeInterface::class)) {
            return $value;
        }

        foreach ($this->types as $type) {
            if (is_subclass_of($type, DateTimeInterface::class)) {
                return Carbon::parse($value);
            }
        }

        throw new LogicException(
            "Caster [DateTimeInterfaceCaster] may only be used to cast DateTime."
        );
    }
}
