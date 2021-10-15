<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Portfolio;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;

class Currency extends BaseDataTransferObject
{
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
