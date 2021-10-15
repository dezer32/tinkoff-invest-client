<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto;

use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;

class CurrencyValue extends BaseDataTransferObject
{
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
