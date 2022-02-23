<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Casters;

use DateTime;
use DateTimeInterface;
use Spatie\DataTransferObject\Caster;

class DateTimeInterfaceCaster implements Caster
{
    public function cast(mixed $value): DateTimeInterface
    {
        if (is_subclass_of($value, DateTimeInterface::class)) {
            return $value;
        }

        return new DateTime($value);
    }
}
