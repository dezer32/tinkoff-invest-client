<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Sandbox;

use Dezer\Investing\Tinkoff\ApiClient\Casters\EnumCaster;
use Dezer\Investing\Tinkoff\ApiClient\Enums\CurrencyEnum;
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
