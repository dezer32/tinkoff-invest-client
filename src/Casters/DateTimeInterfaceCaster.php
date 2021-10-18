<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Casters;

use Carbon\Carbon;
use DateTimeInterface;
use Spatie\DataTransferObject\Caster;

class DateTimeInterfaceCaster implements Caster
{
    public function cast(mixed $value): DateTimeInterface
    {
        if (is_subclass_of($value, DateTimeInterface::class)) {
            return $value;
        }

        return Carbon::parse($value);
    }
}
