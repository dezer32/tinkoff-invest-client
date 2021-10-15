<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Portfolio;

use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class CurrenciesPayload
{
    /** @var Currency[] */
    #[CastWith(ArrayCaster::class, itemType: Currency::class)]
    public array $currencies;
}
