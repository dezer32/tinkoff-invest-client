<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Portfolio;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class CurrenciesPayload extends BaseDataTransferObject
{
    /** @var Currency[] */
    #[CastWith(ArrayCaster::class, itemType: Currency::class)]
    public array $currencies;
}
