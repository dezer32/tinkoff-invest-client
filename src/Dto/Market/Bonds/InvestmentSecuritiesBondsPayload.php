<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market\Bonds;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class InvestmentSecuritiesBondsPayload extends BaseDataTransferObject
{
    public int $total;
    /** @var InstrumentBonds[] */
    #[CastWith(ArrayCaster::class, itemType: InstrumentBonds::class)]
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
