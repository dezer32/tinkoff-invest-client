<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Portfolio;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
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
