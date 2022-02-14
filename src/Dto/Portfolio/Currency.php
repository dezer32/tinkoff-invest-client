<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Portfolio;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Dezer\Investing\Tinkoff\ApiClient\Enums\CurrencyEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class Currency extends BaseDataTransferObject
{
    #[CastWith(EnumCaster::class)]
    public CurrencyEnum $currency;
    public float $balance;
    public float $blocked;

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getBlocked(): float
    {
        return $this->blocked;
    }
}
