<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market\Currencies;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class InvestmentSecuritiesCurrenciesPayload extends BaseDataTransferObject
{
    public int $total;
    /** @var InstrumentCurrencies[] */
    #[CastWith(ArrayCaster::class, itemType: InstrumentCurrencies::class)]
    public array $instruments;

    public function getTotal(): int
    {
        return $this->total;
    }

    public function getInstruments(): array
    {
        return $this->instruments;
    }
}
