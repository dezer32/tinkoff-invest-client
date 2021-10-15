<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
use Spatie\DataTransferObject\Attributes\CastWith;

class CurrencyBalance extends BaseSandboxDataTransferObject
{
    #[CastWith(EnumCaster::class)]
    public CurrencyEnum $currency;
    public int $balance;
}
