<?php

declare(strict_types=1);

namespace Dezer\Investing\Tinkoff\ApiClient\Dto\Market;

use Dezer\Investing\Tinkoff\ApiClient\Dto\BaseDataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

class InvestmentSecuritiesPayload extends BaseDataTransferObject
{
    public int $total;
    /** @var Instrument[] */
    #[CastWith(ArrayCaster::class, itemType: Instrument::class)]
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
