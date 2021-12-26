<?php

declare(strict_types=1);

namespace Dezer\TinkoffInvestApiClient\Dto\Market\ETFs;

use Dezer\TinkoffInvestApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class InvestmentSecuritiesETFsPayload extends BaseDataTransferObject
{
    public int $total;
    /** @var InstrumentETFs[] */
    #[CastWith(ArrayCaster::class, itemType: InstrumentETFs::class)]
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
