<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Operations;

use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;

class Commission
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
