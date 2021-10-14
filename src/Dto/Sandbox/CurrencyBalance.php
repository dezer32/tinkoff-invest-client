<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;

class CurrencyBalance extends BaseSandboxDataTransferObject
{
    public CurrencyEnum $currency;
    public int $balance;
}