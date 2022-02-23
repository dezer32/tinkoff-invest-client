<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Enums\CurrencyEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class CurrencyValue extends BaseDataTransferObject
{
    #[CastWith(EnumCaster::class)]
    public CurrencyEnum $currency;
    public float $value;

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
