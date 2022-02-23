<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Portfolio;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class CurrenciesPayload extends BaseDataTransferObject
{
    /** @var Currency[] */
    #[CastWith(ArrayCaster::class, itemType: Currency::class)]
    public array $currencies;
}
