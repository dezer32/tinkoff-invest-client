<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Sandbox;

use Dezer\TinkoffInvestApiClient\Casters\EnumCaster;
use Dezer\TinkoffInvestApiClient\Enums\CurrencyEnum;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class CurrencyBalance extends BaseSandboxDataTransferObject
{
    #[CastWith(EnumCaster::class)]
    #[MapFrom(0)]
    public CurrencyEnum $currency;
    #[MapFrom(1)]
    public int $balance;
}
